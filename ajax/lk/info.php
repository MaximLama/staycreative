<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

global $USER;

$ID_user = $USER-> GetID();

if($_REQUEST) {

	$fields = Array(
	  "NAME"	=> $_REQUEST['NAME'],
	  "LAST_NAME"	=> $_REQUEST['LAST_NAME'],
	  "PERSONAL_PHONE"	=> $_REQUEST['PHONE'],
	  "PERSONAL_CITY"	=> $_REQUEST['CITY'],
	);

	$response = $USER->Update($ID_user, $fields);

	if($response){
		echo json_encode(["success"=>"updated"]);
		exit();
	} else{
		echo json_encode(["error"=>"update_error"]);
		exit();
	}


} else{
	echo json_encode(["error"=>"data_error"]);
	exit();
}

?>