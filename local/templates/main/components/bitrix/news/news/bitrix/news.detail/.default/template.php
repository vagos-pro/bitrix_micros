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

<section class="section section-alt">
    <div class="row-fluid">
        <div class="super-hero-unit">
            <figure>
                <img alt="some image" src="<?=SITE_TEMPLATE_PATH?>/assets/img/assets/landscapes/landscape-2-1250x300.jpg">
                <figcaption class="flex-caption">
                    <h1 class="super animated fadeinup delayed">
                        News
                        <span class="lighter">
                    &amp;
                  </span>
                        Posts
                    </h1>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="section section-padded">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <article class="post row-fluid">
                    <div class="span12 post-body">
                        <div class="section-header">
                            <h1>
                                <?$arResult["NAME"]?>
                            </h1>
                        </div>

                        <p class="lead">
                            <?=$arResult["PREVIEW_TEXT"]?>
                        </p>
                        <p>
                            <?=$arResult["DETAIL_TEXT"]?>
                        </p>
                    </div>
                </article>

                <nav class="post-navigation" id="nav-below">
                    <ul class="pager">
                        <li class="previous">
                            <a href="#" rel="prev">
                                <i class="icon-angle-left"></i>
                                Предыдущая
                            </a>
                        </li>
                        <li class="next">
                            <a href="#" rel="next">
                                Следующая
                                <i class="icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</section>

<!-- Related posts News -->
<section class="section section-alt section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                Последние новости
            </h1>
        </div>
        <ul class="unstyled row-fluid">
<?
            $arSelect = Array();
            $arFilter = Array("IBLOCK_ID"=>ID_BLOCK_NEWS, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
            $res = CIBlockElement::GetList
            (
                    Array("ID" => "DESC"),
                    $arFilter,
                    false,
                    Array("nPageSize"=>3),
                    $arSelect
            );
                $arNews = [];
            while($ob = $res->GetNext()) {
                $arNews[] = $ob;

                echo "<pre>";
                print_r($ob);
                echo "</pre>";
            }
            ?>
            <?foreach($arNews as $arItem) {?>
                <?
//                echo "<pre>";
//                print_r($arItem);
//                echo "</pre>";
                ?>
                <?$dt = date("d M Y", $arItem["DATE_CREATE_UNIX"])?>
                <li class="span4">
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="round-box box-small">
                                <a class="box-inner" href="#">
                                    <img alt="some image" class="img-circle" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                                </a>
                            </div>
                            <h5 class="text-center light">
                                <?=$dt?>
                            </h5>
                        </div>
                        <div class="span8">
                            <h3>
                                <a href="#">
                                    <?=$arItem["NAME"]?>
                                </a>
                            </h3>
                            <p>
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </p>
                        </div>
                    </div>
                </li>
            <?}?>
        </ul>
    </div>
</section>
