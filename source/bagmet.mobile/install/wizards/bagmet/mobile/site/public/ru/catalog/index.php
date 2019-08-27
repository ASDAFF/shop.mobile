<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
	"BASKET_URL" => "#SITE_DIR#personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#catalog/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"DISPLAY_PANEL" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "",
	"FILTER_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "MANUFACTURER",
		1 => "COLOR",
		2 => "MODULE_3G",
		3 => "GPS",
		4 => "DISPLAY_SIZE",
		5 => "BATTERY_CAPACITY",
		6 => "MEMORY_SIZE",
		7 => "RAM",
		8 => "OS",
		9 => "MEMORY_CARD",
		11 => "VIDEO_SIZE",
		12 => "PHOTO_SIZE",
		13 => "CPU_CLOCK",
		14 => "ACCESSORIES",
		15 => "SAME_GOODS",
		16 => "",
	),
	"FILTER_PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_REVIEW" => "Y",
	"FORUM_ID" => "#FORUM_ID#",
	"USE_COMPARE" => "Y",
	"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
	"COMPARE_FIELD_CODE" => array(
		0 => "PREVIEW_TEXT",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"COMPARE_PROPERTY_CODE" => array(
		0 => "MODULE_3G",
		1 => "GPS",
		2 => "DISPLAY_SIZE",
		3 => "BATTERY_CAPACITY",
		4 => "MEMORY_SIZE",
		5 => "RAM",
		6 => "OS",
		7 => "MEMORY_CARD",
		8 => "",
	),
	"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "MEMORY_SIZE",
			1 => "GSM",
			2 => "",
		),
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"ELEMENT_SORT_FIELD_BOX" => "name",
	"ELEMENT_SORT_ORDER_BOX" => "asc",
	"COMPARE_ELEMENT_SORT_FIELD" => "sort",
	"COMPARE_ELEMENT_SORT_ORDER" => "asc",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"PAGE_ELEMENT_COUNT" => 20,
	"LINE_ELEMENT_COUNT" => "1",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "SPECIALOFFER",
		2 => "SALELEADER",
	),
	"LIST_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "SORT",
		2 => "",
	),
	"LIST_OFFERS_PROPERTY_CODE" => array(
		0 => "MEMORY_SIZE",
		1 => "GSM",
		3 => "",
	),
	"OFFERS_CART_PROPERTIES" => array(
		0 => "MEMORY_SIZE",
		1 => "GSM",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "UF_KEYWORDS",
	"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",
	"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",
	"SECTION_COUNT_ELEMENTS" => "N",
	"SECTION_TOP_DEPTH" => "1",
	"DETAIL_META_KEYWORDS" => "META_KEYWORDS",
	"DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",
	"DETAIL_BROWSER_TITLE" => "BROWSER_TITLE",
	"DETAIL_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "SORT",
		2 => "",
	),
	"DETAIL_OFFERS_PROPERTY_CODE" => array(
		0 => "MEMORY_SIZE",
		1 => "GSM",
		3 => "",
	),
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_STORE" => "Y",
	"MAIN_TITLE" => "Наличие на складах",
	"STORE_PATH" => "#SITE_DIR#store/#store_id#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "3",
	"ALSO_BUY_MIN_BUYES" => "2",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "arrows",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"DISPLAY_IMG_WIDTH" => "220",
	"DISPLAY_IMG_HEIGHT" => "280",
	"DISPLAY_DETAIL_IMG_WIDTH" => "520",
	"DISPLAY_DETAIL_IMG_HEIGHT" => "400",
	"DISPLAY_MORE_PHOTO_WIDTH" => "280",
	"DISPLAY_MORE_PHOTO_HEIGHT" => "280",
	"SHARPEN" => "2",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>