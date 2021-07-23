<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>
<?
if(CModule::IncludeModule("iblock"))
{
    $arSelect = Array("ID", "DATE_CREATE_UNIX", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE");
    $arFilter = Array("IBLOCK_ID"=>ID_BLOCK_NEWS, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList (
        Array("ID" => "DESC"),
        $arFilter,
        false,
        Array("nPageSize"=>3),
        $arSelect
    );
    while($ob = $res->fetch()) {
        $arItem = $ob;
        $arResult[] = $ob;
    }
echo "<pre>";
print_r($arResult);
echo "</pre>";
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>