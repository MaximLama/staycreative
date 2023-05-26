<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<form id="feedback_form" action="javascript:void(0)">
	<?=bitrix_sessid_post()?>
	<label for="FIO">Имя Фамилия</label>
	<input type="text" name="FIO" id="FIO">
	<label for="EMAIL">E-mail</label>
	<input type="text" name="EMAIL" id="EMAIL">
	<label for="QUESTION">Ваш вопрос</label>
	<textarea name="QUESTION" id="QUESTION"></textarea>
	<button id="feedback_form_btn">Отправить</button>
</form>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>