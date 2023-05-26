<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/base_ajax/base_ajax.php");
CModule::IncludeModule('iblock');

use \BaseAjax\BaseAjaxJSON;

class GetAuth extends BaseAjaxJSON{
    public function __construct(){
        parent::__construct();
    }

    private function _user(){
        global $USER;
        return $USER;
    }

    protected function checkRequest(){
        if(!$this->request) return false;
        if(empty($this->request["EMAIL"]) ||empty($this->request["PASSWORD"])){ return false;}
        if(!check_bitrix_sessid()) return false;
        return true;
    }

    public function getAuth(){
        if($this->checkRequest()){
            $rsData = CUser::GetList(($by = "timestamp_x"), ($order = "desc"), array("EMAIL"=>$this->request["EMAIL"]), array("FIELDS"=>array("LOGIN")));
            if($user = $rsData->Fetch()){
                $res = $this->_user()->Login($user["LOGIN"], $this->request["PASSWORD"], (isset($this->request["SAVE_COOKIE"]) && $this->request["SAVE_COOKIE"]) ? "Y" : "N");
                if($res === true){
                    if(isset($this->request["SAVE_COOKIE"]) && $this->request["SAVE_COOKIE"]){
                        \Bitrix\Main\Context::getCurrent()->getResponse()->writeHeaders();   
                    }
                    $this->successResponse(array("url"=>"/personal/"));
                }
                else $this->errorResponse("Неверный логин или пароль");
            }
            else $this->errorResponse("Неверный логин или пароль");
            //$connect = $USER->Login($this->request["EMAIL"], $this->request["PASSWORD"], 'N');
            //if ($USER->IsAuthorized()){$this->successResponse("Все верно");}
            //else{$this->errorResponse("Логин или пароль введен неверно");}
        }elseif (!$this->checkRequest()){
            $this->errorResponse("Заполните все поля");
        }
    }
}
$gc = new GetAuth();
$gc->getAuth();