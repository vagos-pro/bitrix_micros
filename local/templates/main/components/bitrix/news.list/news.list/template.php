<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
    <!-- Promo Section -->
    <section class="section section-alt">
        <div class="row-fluid">
            <div class="super-hero-unit">
                <figure>
                    <img alt="some image" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/landscapes/landscape-1-1250x300.jpg">
                    <figcaption class="flex-caption">
                        <h1 class="super animated fadeinup delayed">
                            Work
                            <span class="lighter">
                    &amp;
                  </span>
                            More
                        </h1>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="section section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Последние новости
                </h1>
            </div>

            <div class="row-fluid">
                <ul class="thumbnails portfolio">

        <?foreach($arResult["ITEMS"] as $arItem) {?>
                    <li class="span3 filter-forest">
                        <figure class="round-box box-huge no-rounded">
                            <a class="box-inner fancybox" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" rel="group" title="Thats a nice landscape">
                                <img alt="some image" class="img-circle" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                                <i class="plus-icon"></i>
                            </a>
                            <figcaption>
                                <h4>
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <?=$arItem["NAME"]?>
                                    </a>
                                </h4>
                                <p>
                                    <?=$arItem["PREVIEW_TEXT"]?>
                                </p>
                            </figcaption>
                        </figure>
                    </li>
<!--            <pre>-->
<!--            --><?//$arResult["ITEMS"]["NAME"]?>
<!--            </pre>-->
    <?}?>

                </ul>
            </div>
        </div>
    </section>
    <!-- Our Clients -->
    <section class="section section-alt section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Наши клиенты
                </h1>
            </div>
            <div class="flexslider fadein-links" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions-position="outside" data-flex-directions-type="fancy" data-flex-itemwidth="250" data-flex-slideshow="false" id="client">
                <ul class="slides">
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client1.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client2.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client3.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client4.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client5.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client6.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client7.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client1.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client2.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img alt="client" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/clients/client3.png">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>