<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(isset($_REQUEST["confirm_code"]) && 
	$_REQUEST['confirm_code'] && 
	isset($_REQUEST['confirm_user_id']) && 
	$_REQUEST['confirm_user_id'] &&
	isset($_REQUEST["confirm_registration"]) &&
	$_REQUEST["confirm_registration"] === "yes"){

	if($arResult["MESSAGE_CODE"] === "E06"){
		?><div id="confirm"><p>Регистрация завершена</p><p>Почта успешно подтверждена</p></div><?
	}
	else if ($arResult["MESSAGE_CODE"] === "E03"){
		?><div id="confirm"><p>Почта уже подтверждена</p></div><?
	}
	else{
		?><div id="confirm"><p>Регистрация не завершена</p><p>Почта не подтверждена</p></div><?	
	}
	?><script>
		BX.ready(function(){
			var addToCollectionPopup = new BX.PopupWindow('call_confirm', null, {
				content: BX('confirm'),
				closeIcon: true,
			});

			addToCollectionPopup.show();
		});
	</script>><?
}