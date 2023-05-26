<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<section class="main">
    <div class="container">
        <div class="main__wrapper">
            <div class="main__left">
                <div class="main__big">
                    <div class="main__big-title">
                        Все необходимые<br>
                        вам ресурсы в одном<br> месте
                        
                    </div>
                    <div class="main__big-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/main/icon2.svg" alt="">
                    </div>
                    <div class="main__big-text">
                        Откройте для себя более 4 миллионов качественных ресурсов, созданных художниками в более чем 190 странах по всему миру
                    </div>
                    
                </div>
                <div class="main__small">
                    <a href="#" class="all-btn"><span>Подробнее о нас</span></a>
                    <div class="main__small-inner">
                        <a href="#" class="main__small-svg">Векторы</a>
                        <a href="#" class="main__small-photo">фото</a>
                        <a href="#" class="main__small-text">шрифты</a>
                    </div>
                </div>
            </div>
            <div class="main__right">
                <div class="main__swiper swiper">
                    <div class="main__swiper-wrapper swiper-wrapper">
                        <div  class="main__slide swiper-slide">
                            <a href="#" class="main__slide-content">
                                <div class="main__slide-content-text"><span>Популярное</span></div>
                                <div class="main__slide-content-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/main/img1.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="main__slide swiper-slide">
                            <a href="#" class="main__slide-content">
                                <div class="main__slide-content-text"><span>Популярное</span></div>
                                <div class="main__slide-content-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/main/img2.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="main__slide swiper-slide">
                            <a href="#" class="main__slide-content">
                                <div class="main__slide-content-text"><span>Популярное</span></div>
                                <div class="main__slide-content-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/main/img3.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main__white">
                    <div class="main__white-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/main/abstrakt.png" alt="">
                       
                    </div>
                    <div class="main__white-text">
                        <strong>Популярные<br> иллюстрации</strong>
                        <a href="#">Смотрите всю подборку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-users">
    <div class="container">
        <div class="title">
            <div class="title__words">
                <span>Популярное у пользователей</span>
                <strong>Трендовые категории</strong>
            </div>
            <a href="#" class="link">Смотреть все</a>
        </div>
        <div class="popular-users__wrapper">
            <div class="popular-users__swiper swiper">
                <div class="popular-users__swiper-wrapper swiper-wrapper">
                    <div class="popular-users__slide swiper-slide">
                        <article  class="cat-product">
                            <div class="cat-product__number">
                                3 000+
                            </div>
                            <div class="cat-product__block">
                                
                                <div class="cat-product__image-block">
                                    <div class="cat-product__image">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catproduct/img1.png" alt="">
                                    </div>
                                </div>
                                <div class="cat-product__title">
                                    <strong>Шрифты</strong>
                                    <span>Качественные, свежие шрифты</span>
                                </div>
                            </div>
                            <div class="cat-product__inner">
                                <div class="cat-product__like">
                                    <span>15K</span>
                                </div>
                                <div class="cat-product__views">
                                    <span>20K</span>
                                </div>
                                <a href="#" class="cat-product__arrow">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/arrownext.svg" alt="">
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="popular-users__slide swiper-slide">
                        <article  class="cat-product">
                            <div class="cat-product__number">
                                3 000+
                            </div>
                            <div class="cat-product__block">
                                
                                <div class="cat-product__image-block">
                                    <div class="cat-product__image">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catproduct/img2.png" alt="">
                                    </div>
                                </div>
                                <div class="cat-product__title">
                                    <strong>Фотографии</strong>
                                    <span>Качественные, свежие шрифты</span>
                                </div>
                            </div>
                            <div class="cat-product__inner">
                                <div class="cat-product__like">
                                    <span>15K</span>
                                </div>
                                <div class="cat-product__views">
                                    <span>20K</span>
                                </div>
                                <a href="#" class="cat-product__arrow">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/arrownext.svg" alt="">
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="popular-users__slide swiper-slide">
                        <article  class="cat-product">
                            <div class="cat-product__number">
                                3 000+
                            </div>
                            <div class="cat-product__block">
                                
                                <div class="cat-product__image-block">
                                    <div class="cat-product__image">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catproduct/img3.png" alt="">
                                    </div>
                                </div>
                                <div class="cat-product__title">
                                    <strong>Векторы</strong>
                                    <span>Качественные, свежие шрифты</span>
                                </div>
                            </div>
                            <div class="cat-product__inner">
                                <div class="cat-product__like">
                                    <span>15K</span>
                                </div>
                                <div class="cat-product__views">
                                    <span>20K</span>
                                </div>
                                <a href="#" class="cat-product__arrow">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/arrownext.svg" alt="">
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="popular-users__slide swiper-slide">
                        <article  class="cat-product">
                            <div class="cat-product__number">
                                3 000+
                            </div>
                            <div class="cat-product__block">
                                
                                <div class="cat-product__image-block">
                                    <div class="cat-product__image">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catproduct/img4.png" alt="">
                                    </div>
                                </div>
                                <div class="cat-product__title">
                                    <strong>Мокапы</strong>
                                    <span>Качественные, свежие шрифты</span>
                                </div>
                            </div>
                            <div class="cat-product__inner">
                                <div class="cat-product__like">
                                    <span>15K</span>
                                </div>
                                <div class="cat-product__views">
                                    <span>20K</span>
                                </div>
                                <a href="#" class="cat-product__arrow">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/arrownext.svg" alt="">
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination popular-users__pagination">
            <div class="pagination__bullets popular-users__bullets">

            </div>
            
        </div>
    </div>
</section>
<section class="popular-fonts">
    <div class="container">
        <div class="title">
            <div class="title__words">
                
                <strong>Популярные шрифты</strong>
            </div>
            <a href="#" class="link">Смотреть все</a>
        </div>
        <div class="popular-fonts__wrapper">
            <div class="popular-fonts__swiper swiper">
                <div class="popular-fonts__swiper-wrapper swiper-wrapper">
                    <div class="popular-fonts__slide swiper-slide">
                       <article class="c-font">
                            <div class="c-font__block">
                                <div class="c-font__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cfont/img1.png" alt="">
                                </div>
                                <div class="c-font__rhombus">01</div>
                            </div>
                            <div class="c-font__inner">
                                <div class="c-font__title">
                                    <strong>Wild Mango | Modern Serif</strong>
                                    <span>by KA Designs</span>
                                </div>
                                <div class="c-font__price">
                                    <span>1200</span>
                                </div>
                            </div>
                       </article>
                    </div>
                    <div class="popular-fonts__slide swiper-slide">
                        <article class="c-font">
                             <div class="c-font__block">
                                 <div class="c-font__image">
                                     <img src="<?=SITE_TEMPLATE_PATH?>/img/cfont/img2.png" alt="">
                                 </div>
                                 <div class="c-font__rhombus">02</div>
                             </div>
                             <div class="c-font__inner">
                                 <div class="c-font__title">
                                     <strong>Wild Mango | Modern Serif</strong>
                                     <span>by KA Designs</span>
                                 </div>
                                 <div class="c-font__price">
                                     <span>1200</span>
                                 </div>
                             </div>
                        </article>
                     </div>
                     <div class="popular-fonts__slide swiper-slide">
                        <article class="c-font">
                             <div class="c-font__block">
                                 <div class="c-font__image">
                                     <img src="<?=SITE_TEMPLATE_PATH?>/img/cfont/img3.png" alt="">
                                 </div>
                                 <div class="c-font__rhombus">03</div>
                             </div>
                             <div class="c-font__inner">
                                 <div class="c-font__title">
                                     <strong>The Awesome Serif Family</strong>
                                     <span>by Nicky Laatz</span>
                                 </div>
                                 <div class="c-font__price">
                                     <span>1200</span>
                                 </div>
                             </div>
                        </article>
                     </div>
                </div>
            </div>
        </div>
        <div class="pagination popular-fonts__pagination">
            <div class="pagination__bullets popular-fonts__bullets">

            </div>
            
        </div>
    </div>
</section>
<section class="popular-graph">
    <div class="container">
        <div class="title">
            <div class="title__words">
                
                <strong>Популярная графика</strong>
            </div>
            <a href="#" class="link">Смотреть все</a>
        </div>
        <div class="popular-graph__wrapper">
            <div class="popular-graph__swiper swiper">
                <div class="popular-graph__swiper-wrapper swiper-wrapper">
                    <div class="popular-graph__slide swiper-slide">
                       <article class="c-graph">
                            <div class="c-graph__block">
                                <div class="c-graph__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cgraph/img1.png" alt="">
                                </div>
                                <div class="c-graph__rhombus">01</div>
                            </div>
                            <div class="c-graph__inner">
                                <div class="c-graph__title">
                                    <strong>Wild Mango | Modern Serif</strong>
                                    <span>by KA Designs</span>
                                </div>
                                <div class="c-graph__price">
                                    <span>1200</span>
                                </div>
                            </div>
                       </article>
                    </div>
                    <div class="popular-graph__slide swiper-slide">
                        <article class="c-graph">
                             <div class="c-graph__block">
                                 <div class="c-graph__image">
                                     <img src="<?=SITE_TEMPLATE_PATH?>/img/cgraph/img2.png" alt="">
                                 </div>
                                 <div class="c-graph__rhombus">02</div>
                             </div>
                             <div class="c-graph__inner">
                                 <div class="c-graph__title">
                                     <strong>Wild Mango | Modern Serif</strong>
                                     <span>by KA Designs</span>
                                 </div>
                                 <div class="c-graph__price">
                                     <span>1200</span>
                                 </div>
                             </div>
                        </article>
                     </div>
                     <div class="popular-graph__slide swiper-slide">
                        <article class="c-graph">
                             <div class="c-graph__block">
                                 <div class="c-graph__image">
                                     <img src="<?=SITE_TEMPLATE_PATH?>/img/cgraph/img3.png" alt="">
                                 </div>
                                 <div class="c-graph__rhombus">03</div>
                             </div>
                             <div class="c-font__inner">
                                 <div class="c-graph__title">
                                     <strong>The Awesome Serif Family</strong>
                                     <span>by Nicky Laatz</span>
                                 </div>
                                 <div class="c-graph__price">
                                     <span>1200</span>
                                 </div>
                             </div>
                        </article>
                     </div>
                </div>
            </div>
        </div>
        <div class="pagination popular-graph__pagination">
            <div class="pagination__bullets popular-graph__bullets">

            </div>
            
        </div>
    </div>
</section>
<section class="author">
    <div class="container">
        <div class="author__wrapper">
            <div class="author__image">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/author/img.png" alt="">
            </div>
            <div class="author__image-mob">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/author/pic.png" alt="">
            </div>
            <div class="author__title">
                <strong>Станьте автором и начните зарабатывать с ArtLovers!</strong>
                <span>Продавайте свои проекты и привлекайте миллионы покупателей или продвигайте других художников на креативном рынке, чтобы заработать деньги!</span>
            </div>
            <button class="all-btn"><span>Зарегистрироваться</span></button>
        </div>
    </div>
</section>
<section class="collections">
    <div class="container">
        <div class="title">
            <div class="title__words">
                <strong>Тематические коллекции</strong>
            </div>
        </div>
        <div class="collections__wrapper">
            <div class="collections__left">
                <a href="#" class="collections__one">
                    <div class="collections__one-rub">
                        <span>Популярное</span>
                    </div>
                    <div class="collections__one-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/collections/image1.png" alt="">
                    </div>
                    <div class="collections__one-title">
                        <span>Фотографии, векторы</span>
                        <strong>Месяц женской истории</strong>
                    </div>
                </a>
            </div>
            <div class="collections__right">
                <a href="#" class="collections__two">
                    <div class="collections__two-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/collections/image2.png" alt="">
                    </div>
                    <div class="collections__two-title">
                        <span>Фотографии, векторы</span>
                        <strong>Сюрреализм</strong>
                    </div>
                </a>
                <a href="#" class="collections__three">
                    <div class="collections__three-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/collections/image3.png" alt="">
                    </div>
                    <div class="collections__three-title">
                        <span>Фотографии, векторы</span>
                        <strong>Лица разнообразия</strong>
                    </div>
                </a>


                <a href="#" class="collections__four">
                    <div class="collections__four-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/collections/image4.png" alt="">
                    </div>
                    <div class="collections__four-rub">
                        <span>Популярное</span>
                    </div>
                    <div class="collections__four-title">
                        <span>Фотографии, векторы</span>
                        <strong>Спортивная тематика</strong>
                    </div>
                </a>

                <a href="#" class="collections__five">
                    <div class="collections__five-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/collections/image5.png" alt="">
                    </div>
                   
                    <div class="collections__five-title">
                        <span>Фотографии, векторы</span>
                        <strong>Неон</strong>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="advice">
    <div class="container">
        <div class="title">
            <div class="title__words">
                <span>Наш блог</span>
                <strong>Советы и рекомендации</strong>
            </div>
            <a href="#" class="link">Смотреть все</a>
        </div>
        <div class="advice__wrapper">
            <div class="advice__swiper swiper">
                <div class="advice__swiper-wrapper swiper-wrapper">
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img1.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img1.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Представляем наш цвет сезона: голографично-сиренивый
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img2.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img2.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Как превратить дизайн 
                                        в потрясающий продукт
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img3.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img3.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Руководство для начинающих по дизайну упаковки продукта
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img4.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img4.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        коллекция шрифтов 
                                        с засечками для создания элегантности
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img1.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img1.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Представляем наш цвет сезона: голографично-сиренивый
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img2.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img2.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Как превратить дизайн 
                                        в потрясающий продукт
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img3.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img3.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        Руководство для начинающих по дизайну упаковки продукта
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="advice__slide swiper-slide">
                        <a href="#" class="advice-c">
                            <div class="advice-c__block">
                                <div class="advice-c__block-image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img4.png" alt="">
                                </div>
                            </div>
                            <div class="advice-c__inner">
                                <div class="advice-c__image">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/img4.png" alt="">
                                    
                                </div>
                                <div class="advice-c__content">
                                    <div class="advice-c__content-inner">
                                        <div class="advice-c__content-face">
                                            <div class="advice-c__content-face-img">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/advice/face.png" alt="">
                                            </div>
                                        </div>
                                        <div class="advice-c__content-name">by Laura Busche</div>
                                    </div>
                                    <!-- inner -->
                                    <div class="advice-c__title">
                                        коллекция шрифтов 
                                        с засечками для создания элегантности
                                    </div>
                                    <div class="advice-c__date">
                                        Январь 14, 2023
                                    </div>
                                    <div class="advice-c__white">
                                        <strong><b>2</b>мин</strong>
                                        <span>на чтение</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination advice__pagination">
            <div class="pagination__fraction advice__fraction">

            </div>
            <div class="pagination__arrows advice__arrows">
                <div class="pagination__prev advice__prev">
                    <svg  viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292961 8.70711C-0.0975647 8.31658 -0.0975647 7.68342 0.292961 7.29289L6.65692 0.928932C7.04745 0.538408 7.68061 0.538408 8.07113 0.928932C8.46166 1.31946 8.46166 1.95262 8.07113 2.34315L2.41428 8L8.07113 13.6569C8.46166 14.0474 8.46166 14.6805 8.07113 15.0711C7.68061 15.4616 7.04745 15.4616 6.65692 15.0711L0.292961 8.70711ZM32.6189 9H1.00007V7H32.6189V9Z" fill="#383742"/>
                    </svg>
                </div>
                <div class="pagination__next advice__next">
                    <svg viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.707 8.70711C33.0976 8.31658 33.0976 7.68342 32.707 7.29289L26.3431 0.928932C25.9526 0.538408 25.3194 0.538408 24.9289 0.928932C24.5383 1.31946 24.5383 1.95262 24.9289 2.34315L30.5857 8L24.9289 13.6569C24.5383 14.0474 24.5383 14.6805 24.9289 15.0711C25.3194 15.4616 25.9526 15.4616 26.3431 15.0711L32.707 8.70711ZM0.381104 9H31.9999V7H0.381104V9Z" fill="#383742"/>
                        </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>