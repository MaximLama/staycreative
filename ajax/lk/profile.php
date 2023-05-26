<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/base_ajax/base_ajax.php");
CModule::IncludeModule('iblock');

use \BaseAjax\BaseAjaxJSON;

class SaveProfile extends BaseAjaxJSON
{
	public function __construct(){
		parent::__construct();
	}

	private function handle($val){
		return htmlspecialchars(stripslashes(trim($val)));
	}

	protected function checkRequest(){
		if(!$this->request) return false;
		foreach ($request as &$value) {
			$value = $this->handle($value);
		}
		if(!isset($this->request["NAME"])||!$this->request["NAME"]) return false;
		if(!isset($this->request["LAST_NAME"])||!$this->request["LAST_NAME"]) return false;
		if(!isset($this->request["PHONE"])||!$this->request["PHONE"]) return false;
		if(!isset($this->request["CITY"])||!$this->request["CITY"]) return false;
		return true;
	}

	public function updateData(){
		global $USER;
		if(check_bitrix_sessid()){
			$USER->Update($USER->GetID(), array(
				"NAME" => $this->handle($this->request['NAME']),
				"LAST_NAME" => $this->handle($this->request['LAST_NAME']),
				"PERSONAL_PHONE" => $this->handle($this->request["PHONE"]),
				"PERSONAL_CITY" => $this->handle($this->request["CITY"])
			));
		}
	}
}

$ff = new SaveProfile();
$ff->updateData();