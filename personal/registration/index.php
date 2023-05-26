<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<section class="lk-register">
    <div class="container">
        <div class="lk-register__wrapper">
            <div class="lk-register__left">
                <div class="lk-register__image">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/willkommensfenster/img1.png" alt="">
                </div>
            </div>
            <div class="lk-register__right">
              
                
                <div class="lk-register__content">
                    <div class="lk-register__title">
                        <strong>Создать учетную запись</strong>
                        
                    </div>
                    <form action="javascript:void(0)">
	                    <div class="lk-register__form">
	                    	<?=bitrix_sessid_post()?>
	                        <div class="lk-register__form-wrap">
	                            <div class="lk-register__form-inner">
	                                <label for="FIO">Имя Фамилия</label>
	                                <input type="text" id="FIO" name="FIO">
	                            </div>
	                            <div class="lk-register__form-inner">
	                                <label for="NICKNAME">Название профиля (канала)</label>
	                                <input type="text" id="NICKNAME" name="NICKNAME">
	                            </div>
	                        </div>
	                        <div class="lk-register__form-wrap lk-register__form-wrap--type">
	                            <div class="lk-register__form-inner lk-register__form-inner--type">
	                                <label for="EMAIL">Электронная почта</label>
	                                <input type="text" id="EMAIL" name="EMAIL">
	                            </div>
	                        </div>
	                        <div class="lk-register__form-wrap">
	                            <div class="lk-register__form-inner">
	                                <label for="PASSWORD">Пароль</label>
	                                <input type="password" id="PASSWORD" name="PASSWORD">
	                            </div>
	                            <div class="lk-register__form-inner">
	                                <label for="PASSWORD_CONFIRM">Повторите пароль</label>
	                                <input type="password" id="PASSWORD_CONFIRM" name="PASSWORD_CONFIRM">
	                            </div>
	                        </div>
	                        <div class="lk-register__desk">
	                            Не менее 8 символов. Пароль должен содержать хотя бы одно: заглавную букву, строчную букву,
	                            цифру и символ
	                        </div>
	                    </div>
	                    <div class="lk-register__btns">
	                        <button id="reg-form-button" class="red-btn"><span>Зарегистрироваться</span></button>
	                        <div class="lk-register__faq">
	                            <span >Уже зарегестрированы? </span>
	                            <a href="/personal/auth/">Войти</a>
	                        </div>
	                    </div>
                	</form>
                    <div class="lk-register__policy">
                        Нажимая на кнопку, вы соглашаетесь с <a href="#">Условиями обработки персональных данных</a>
                    </div>
                    <div class="lk-ex__content-title">Или продолжить с</div>
                    <div class="lk-ex__social">
                        <a href="#">
                          <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/apple.svg" alt="">
                                
                        </a>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/vk.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/google.svg" alt="">
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<div class="modal thanks-reg">
    <div class="modal__container">
        <button class="modal__close thanks-reg__close">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/close.svg" alt="">
        </button>
        <div class="modal__box thanks-reg__box">
            <div class="thanks-reg__box-icon">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/galkawhite.svg" alt="">
            </div>
            <div class="thanks-reg__box-title">
                <strong>Спасибо за регистрацию!</strong>
                <span>Письмо с подтверждением отправлено<br>
                    на электронную почту</span>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>