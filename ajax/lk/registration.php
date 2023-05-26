<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/base_ajax/base_ajax.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/lk/password.php");
CModule::IncludeModule('iblock');

use \BaseAjax\BaseAjaxJSON;
use \PHPPassword\Password;

class GetReg extends BaseAjaxJSON{
    public function __construct(){
        parent::__construct();
    }

    protected function checkRequest(){
        if(!$this->request) return false;
        if(!isset($this->request["FIO"]) || !$this->request["FIO"]) return false;
        if(!isset($this->request["NICKNAME"]) || !$this->request["NICKNAME"]) return false;
        if(!isset($this->request["EMAIL"]) || !$this->request["EMAIL"]) return false;
        if(!isset($this->request["PASSWORD"]) || !$this->request["PASSWORD"]) return false;
        if(!isset($this->request["PASSWORD_CONFIRM"]) || !$this->request["PASSWORD_CONFIRM"]) return false;
        if(!check_bitrix_sessid()) return false;
        return true;
    }

    protected function validateRequest($requestName): string
    {
        return trim(strip_tags(htmlspecialchars($requestName)));
    }

    public function getReg(){
        if($this->checkRequest()){
            if(!check_email($this->request["EMAIL"])){
               $this->errorResponse("Неверный почтовый адрес"); 
            }
            $password = new Password(
                [
                    "minLength" => 8,
                    "maxLength" => 999,
                    "minNumbers" => 1,
                    "minLowerCase" => 1, 
                    "minUpperCase" => 1,
                    "minSymbols" => 1,
                    "maxSymbols" => 999
                ]
            );
            if (!$password->validatePassword($this->request["PASSWORD"])) {
                $this->errorResponse("Пароль должен состоять не менее чем из 8 символов и содержать как минимум одну заглавную букву, одну цифру и один специальный символ.");
            } 
            if ($this->request["PASSWORD"] !== $this->request["PASSWORD_CONFIRM"]) {
                $this->errorResponse("Пароли не совпадают") ;
            }
            $user = new CUser;
            $this->request["FIO"] = explode(' ', $this->request["FIO"], 2);
            $arFields = array(
                "NAME" => $this->validateRequest($this->request["FIO"][0]),
                "LAST_NAME"=> isset($this->request["FIO"][1]) ? $this->validateRequest($this->request["FIO"][1]) : "",
                "LOGIN" => $this->validateRequest($this->request["NICKNAME"]),  
                "EMAIL" => $this->validateRequest($this->request["EMAIL"]),  
                "LID" => "s1",
                "ACTIVE" => "N",
                "PASSWORD" => $this->validateRequest($this->request["PASSWORD"]),
                "CONFIRM_PASSWORD" => $this->validateRequest($this->request["PASSWORD"]),
                "GROUP_ID" => array(2)
            );
            $user->Register(
                $this->validateRequest($this->request["NICKNAME"]),  
                $this->validateRequest($this->request["FIO"][0]),
                isset($this->request["FIO"][1]) ? $this->validateRequest($this->request["FIO"][1]) : "",
                $this->validateRequest($this->request["PASSWORD"]),
                $this->validateRequest($this->request["PASSWORD"]),
                $this->validateRequest($this->request["EMAIL"])
            );
            $new_user = $user->GetByLogin($this->validateRequest($this->request["NICKNAME"]))->Fetch();
            if(!($new_user)) $this->errorResponse("Ошибка регистрации");
            //$confirm_code = $new_user["CONFIRM_CODE"];
            //CEvent::Send("NEW_USER_CONFIRM", "s1", array("USER_ID"=>$new_user["ID"], "EMAIL"=>$this->request["EMAIL"], "CONFIRM_CODE"=>$confirm_code));
            $this->successResponse($user->GetByLogin($this->validateRequest($this->request["NICKNAME"]))->Fetch());
        }else{
            $this->errorResponse($this->request);//("Заполните все поля");
        }
    }
}
$gc = new GetReg();
$gc->getReg();