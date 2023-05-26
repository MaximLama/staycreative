<?
namespace BaseAjax;

require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Application;

class BaseAjaxJSON{
	
	protected $context;
	protected $request;
	
	public function __construct(){
		$this->context = Application::getInstance()->getContext();
		$this->request = $this->context->getRequest()->toArray();
	}

	protected function checkRequest(){
		if(!$this->request) return false;
		return true;
	}

	protected function successResponse($response){
		echo json_encode(["success"=>$response]);
		exit();
	}

	protected function errorResponse($response){
		echo json_encode(["error"=>$response]);
		exit();
	}
}