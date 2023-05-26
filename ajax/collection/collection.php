<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/ajax/base_ajax/base_ajax.php");

CModule::IncludeModule('iblock');
CModule::IncludeModule('main');

use \BaseAjax\BaseAjaxJSON;
use Bitrix\Main\Loader; 

Loader::includeModule("highloadblock"); 
use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity;

class Collection extends BaseAjaxJSON
{
    public function __construct(){
        parent::__construct();
    }

    private function _user(){
        global $USER;
        return $USER;
    }

    protected function checkRequest(){
        if(!$this->request) return false;
        if(!check_bitrix_sessid()) return false;
        if(!isset($this->request["action"])) return false;
        switch($this->request['action']){
            case "add_collection":{
                if(!isset($this->request["NAME"]) || !$this->request["NAME"]) return false;
                break;
            }
            case "get_collections":{
                if(!isset($this->request['productId']) || !$this->request["productId"]) return false;
                break;
            }
            case "add2collection":{
                if(!isset($this->request['collection_id']) || !$this->request["collection_id"]) return false;
                if(!isset($this->request['product_id']) || !$this->request["product_id"]) return false;
                break;
            }
            default:
                return false;
                break;
        }
        return true;
    }

    public function doAction(){
        if($this->_user()->IsAuthorized()){
            if($this->checkRequest()){
                switch($this->request["action"]){
                    case "add_collection":
                        $this->addCollection();
                        break;
                    case "get_collections":
                        $this->getCollections();
                        break;
                    case "add2collection":
                        $this->add2collection();
                        break;
                }
            }
            else $this->errorResponse('Invalid request');
        }
        else $this->errorResponse("Создание коллекций доступно только авторизованным пользователям");
    }

    private function addCollection(){
        $arParams = array(
            "UF_USER" => $this->_user()->GetID(),
            "UF_COLLECTION_NAME" => $this->request["NAME"]
        );
        $id = 2; // Highloadblock с пользовательскими коллекциями
        $result = $this->addToHB($id, $arParams);
        $this->successResponse(array("id"=>$result->getId(), "COLLECTION_HTML"=>"<div><span>".$this->request['NAME']."</span><button data-id='".$result->getId()."' class='add_to_collection_btn'>Добавить</button></div>"));
    }

    private function getCollections(){
        $arParams = array(
            "UF_USER" => $this->_user()->GetID()
        );
        $id = 2;
        $result = $this->getFromHB($id, $arParams);
        $collections = [];
        while($collection = $result->Fetch()){
            $collections[] = $collection;
        }
        $ids = array_column($collections, "ID");
        $result = $this->getFromHB(3, ["=UF_COLLECTION" => $ids, "UF_COLLECTION_ELEMENT_ID" => $this->request['productId']]);
        $in_collections = array();
        while($collection = $result->Fetch()){
            $in_collections[] = $collection;
        }

        $in_collections = array_column($in_collections, "UF_COLLECTION");
        $html = "";
        $text = [];
        foreach ($collections as $collection) {
            $text[] = ["in_array" => in_array($collection["ID"], $in_collections), "text" => (in_array($collection["ID"], $in_collections) ? "Добавлен" : "Добавить"), "Collection"=>$collection];
            $html .= "<div><span>".$collection["UF_COLLECTION_NAME"]."</span><button data-id='".$collection["ID"]."' class='add_to_collection_btn'>".(in_array($collection["ID"], $in_collections) ? "Добавлен" : "Добавить")."</button></div>";
        }
        $this->successResponse(array("collections"=>$html, "temp"=>$in_collections, "col"=>$collections, "res"=>$text));
    }

    private function add2collection(){
        $result = $this->getFromHB(3, ["UF_COLLECTION" => $this->request["collection_id"], "UF_COLLECTION_ELEMENT_ID" => $this->request["product_id"]]);
        $el = $result->Fetch();
        if($el){
            $this->deleteFromHB(3, $el["ID"]);
            $this->successResponse(array("text"=>"Добавить"));
        }
        else {
            $this->addToHB(3, ["UF_COLLECTION" => $this->request['collection_id'], "UF_COLLECTION_ELEMENT_ID" => $this->request["product_id"]]);
            $this->successResponse(array("text"=>"Добавлен"));
        }
    }

    private function deleteFromHB($id, $id_el){
        $hlblock = HL\HighloadBlockTable::getById($id)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityDataClass = $entity->getDataClass();
        $entityDataClass::delete($id_el);
    }

    private function getFromHB($id, $params){
        $hlblock = HL\HighloadBlockTable::getById($id)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityDataClass = $entity->getDataClass();
        return $entityDataClass::getList(array(
            "select" => array("*"),
            "order" => array("ID" => "ASC"),
            "filter" => $params
        ));
    }

    private function addToHB($id, $params){
        $hlblock = HL\HighloadBlockTable::getById($id)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityDataClass = $entity->getDataClass();
        $result = $entityDataClass::add($params);
        return $result;
    }
}

$collection = new Collection();
$collection->doAction();