<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/base_ajax/base_ajax.php");

use \BaseAjax\BaseAjaxJSON;
use Bitrix\Main\Loader; 
use Bitrix\Main\Type\DateTime;

Loader::includeModule('iblock');

class FeedbackForm extends BaseAjaxJSON
{
	public function __construct(){
        parent::__construct();
    }

    protected function checkRequest(){
    	if(!isset($this->request["FIO"]) || !$this->request["FIO"]) return false;
    	if(!isset($this->request["EMAIL"]) || !$this->request["EMAIL"] || !check_email($this->request["EMAIL"])) return false;
    	if(!isset($this->request["QUESTION"]) && !$this->request["QUESTION"]) return false;
    	if(!check_bitrix_sessid()) return false;
    	return true;
    }

    private function handle($val){
        return htmlspecialchars(stripslashes(trim($val)));
    }

    public function sendResponse(){
    	if($this->checkRequest()){
    		$this->makeLog();
    		$res = CEvent::Send("FEEDBACK_FORM", SITE_ID, $this->getFields());
            if($res){
                $this->successResponse("ok");
            }
            $this->errorResponse("Ошибка отправки формы");
    	}
    	$this->errorResponse("Invalid values");
    }

    private function getFields(){
        $this->arFields = array(
            "FIO" => $this->request["FIO"],
            "EMAIL" => $this->request["EMAIL"],
            "QUESTION" => $this->request["QUESTION"]
        );
        return $this->arFields;
    }

    private function makeLog(){
    	$el = new CIBlockElement;

    	$PROP = array();
        $PROP["NAME_SURNAME"]  = $this->handle($this->request["FIO"]);
        $PROP["EMAIL"] = $this->handle($this->request["EMAIL"]);
        $PROP["QUESTION"] = $this->handle($this->request["QUESTION"]);

        $dt = DateTime::createFromTimestamp(time());
        $dt_active_from = $dt->toString();
        $dt->add("2 minutes");
        $dt_active_to = $dt->toString();

        $arLoadProductArray = Array(
             "IBLOCK_ID"      => 3,
             "PROPERTY_VALUES"=> $PROP,
             "NAME"           => FormatDate(CDatabase::DateFormatToPHP(CSite::GetDateFormat(), time()), time()),
             "ACTIVE"         => "Y",
             "DATE_ACTIVE_FROM" => $dt_active_from,
             "DATE_ACTIVE_TO" => $dt_active_to

        );
        $el->Add($arLoadProductArray);
    }

}

$ff = new FeedbackForm();
$ff->sendResponse();