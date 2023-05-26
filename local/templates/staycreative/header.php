<? if (!CModule::IncludeModule("iblock")) die(); 

use \Bitrix\Main\Loader;
CJSCore::Init(array("popup"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=3a00483f-b438-4df6-92d8-51c72bf2398d&lang=ru_RU" type="text/javascript"> </script>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.min.css"); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $APPLICATION->ShowTitle() ?></title>
	<?=$APPLICATION->ShowHead();?>
</head>

<body>
	<?$APPLICATION->ShowPanel();?>
	<header class="header">
	    <div class="container">
	        <div class="header__wrapper">
	            <div class="header__burger">
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
	            <div class="header__wrap-logo">
	                <a href="/" class="header__logo">
	                    <img src="<?=SITE_TEMPLATE_PATH?>/img/header/logo.svg" alt="">
	                </a>
	            </div>
	            <nav class="header__nav">
	                <ul class="header__lists">
	                    <li class="header__item header__item--slide"><a href="#">Категории</a></li>
	                    <li class="header__item"><a href="">Векторы</a></li>
	                    <li class="header__item"><a href="">Шрифты</a></li>
	                    <li class="header__item"><a href="">Фото</a></li>
	                    <li class="header__item"><a href="">Коллекции</a></li>
	                    <li class="header__item"><a href="">Стоимость</a></li>
	                    <li class="header__item"><a href="">О нас</a></li>
	                </ul>
	            </nav>
	            <button class="header__search">
	                <img src="<?=SITE_TEMPLATE_PATH?>/img/header/search.svg" alt="">
	            </button>
	            <button class="header__user">
	                <img src="<?=SITE_TEMPLATE_PATH?>/img/header/user.svg" alt="">
	            </button>
	            <button class="header__like">
	                <img src="<?=SITE_TEMPLATE_PATH?>/img/header/heart.svg" alt="">
	            </button>
	            <button class="header__bag">
	                <img src="<?=SITE_TEMPLATE_PATH?>/img/header/bag.svg" alt="">
	            </button>
	        </div>
	    
	    </div>
	</header>
	<main>