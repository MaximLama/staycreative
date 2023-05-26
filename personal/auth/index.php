<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if($USER->IsAuthorized()) LocalRedirect('/personal/');
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:system.auth.confirmation",
    "confirm_reg",
    Array(
        "CONFIRM_CODE" => "confirm_code",
        "LOGIN" => "login",
        "USER_ID" => "confirm_user_id"
    )
);?>
<section class="lk-ex">
    <div class="container">
        <div class="lk-ex__wrapper">
            <div class="lk-ex__left">
                <div class="lk-ex__image">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/lk-ex/img1.png" alt="">
                </div>
            </div>
            <div class="lk-ex__right" id="form-wrapper">
                <div class="lk-ex__content">
                    <div class="lk-ex__title">
                        Войти
                    </div>
                    <form action="javascript:void(0)" id="form-auth">
	                    <div class="lk-ex__form">
	                    	<?=bitrix_sessid_post()?>
	                        <div class="lk-ex__form-inner">
	                            <label for="email">Электронная почта</label>
	                            <input type="text" id="email" name="EMAIL">
	                        </div>
	                        <div class="lk-ex__form-inner">
	                            <label for="password">Пароль</label>
	                            <input type="password" id="password" name="PASSWORD">
	                            <button class="lk-ex__see">
	                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                    <path d="M21.2496 9.14906C20.7596 8.36906 20.1996 7.66906 19.6196 7.03906L15.8496 10.8091C15.9696 11.1791 16.0396 11.5791 16.0396 11.9991C16.0396 14.2391 14.2296 16.0391 11.9996 16.0391C11.5796 16.0391 11.1796 15.9691 10.8096 15.8491L7.34961 19.3091C8.80961 20.1291 10.3896 20.5591 11.9996 20.5591C13.7796 20.5591 15.5096 20.0391 17.0896 19.0691C18.6696 18.0891 20.0896 16.6591 21.2496 14.8391C22.2496 13.2791 22.2496 10.7191 21.2496 9.14906Z" fill="#A0A1A4"/>
	                                    <path d="M14.0196 9.98062L9.97965 14.0206C9.46965 13.5006 9.13965 12.7806 9.13965 12.0006C9.13965 10.4306 10.4196 9.14062 11.9996 9.14062C12.7796 9.14062 13.4996 9.47062 14.0196 9.98062Z" fill="#A0A1A4"/>
	                                    <path d="M18.25 5.74969L14.86 9.13969C14.13 8.39969 13.12 7.95969 12 7.95969C9.76 7.95969 7.96 9.76969 7.96 11.9997C7.96 13.1197 8.41 14.1297 9.14 14.8597L5.76 18.2497H5.75C4.64 17.3497 3.62 16.1997 2.75 14.8397C1.75 13.2697 1.75 10.7197 2.75 9.14969C3.91 7.32969 5.33 5.89969 6.91 4.91969C8.49 3.95969 10.22 3.42969 12 3.42969C14.23 3.42969 16.39 4.24969 18.25 5.74969Z" fill="#A0A1A4"/>
	                                    <path d="M14.8601 12.0001C14.8601 13.5701 13.5801 14.8601 12.0001 14.8601C11.9401 14.8601 11.8901 14.8601 11.8301 14.8401L14.8401 11.8301C14.8601 11.8901 14.8601 11.9401 14.8601 12.0001Z" fill="#A0A1A4"/>
	                                    <path d="M21.7699 2.23086C21.4699 1.93086 20.9799 1.93086 20.6799 2.23086L2.22988 20.6909C1.92988 20.9909 1.92988 21.4809 2.22988 21.7809C2.37988 21.9209 2.56988 22.0009 2.76988 22.0009C2.96988 22.0009 3.15988 21.9209 3.30988 21.7709L21.7699 3.31086C22.0799 3.01086 22.0799 2.53086 21.7699 2.23086Z" fill="#A0A1A4"/>
	                                </svg>
	                                    
	                            </button>
	                        </div>
	                    </div>
	                    <div class="lk-ex__content-btns">
	                        <a href="#" class="lk-ex__content-btns-link">Забыли пароль?</a>
	                        <label class="checkbox" for="save_cookie">Оставаться в системе
	                            <input type="checkbox" id="save_cookie" name="SAVE_COOKIE" checked="checked">
	                            <span class="checkmark"></span>
	                        </label>
	                    </div>
	                </form>
                    <div class="lk-ex__content-bottom">
                        <div class="lk-ex__content-bottom-inner">
                            <button class="red-btn" id="form-auth_btn"><span>Продолжить</span></button>
                            <div class="lk-ex__content-bottom-inner-text">
                                <span>Новый пользователь?</span>
                                <a href="/personal/registration/">Создать учетную запись</a>
                            </div>
                        </div>
                        <div class="lk-ex__content-bottom-policy">
                            Нажимая на кнопку, вы соглашаетесь с <a href="#">Условиями обработки персональных данных</a>
                        </div>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>