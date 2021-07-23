<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta content="Bootsrap based theme" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon.ico" rel="shortcut icon">
    <link href="apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/bootstrap.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/responsive.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/font-awesome-all.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/fancybox.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/theme.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/fonts.css")?>
    <?$APPLICATION->ShowHead()?>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<?/*$APPLICATION->IncludeFile(
        $APPLICATION->GetTemplatePath(SITE_DIR."include_areas/modal.php"),
        array(),
        array("MODE"=>"html", "SHOW_BORDERS"=>"N")
)*/?>

<div class="wrapper">
    <!-- Page Header -->
    <header id="masthead">
        <nav class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1 class="brand">
                        <?    $APPLICATION->IncludeFile(
                            			$APPLICATION->GetTemplatePath(SITE_DIR."include_areas/main_logo.php"),
                            			Array(),
                            			Array("MODE"=>"html")
                            );?>
                    </h1>
                    <div class="nav-collapse collapse">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "super_top", Array(
	    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "super_top"
	),
	false
);
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main Content -->
    <div id="content" role="main">

