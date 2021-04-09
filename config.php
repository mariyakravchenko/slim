<?php

define('LANDING_DIR', '');

$apiKey = 'CUeKhra60cQHf6V6zqpmFnmKbaHi9JyXUrF6DTBmp5yhtyJAYc12';          // Ключ доступа к API
$offer_id = 4695;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = 'r86tY0ll';     // id потока

$landKey = 'f5af7a6a3556daf10c145f26d0041f37';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"19159":{"id":19159,"name":"Beewax","country":{"code":"RO","name":"\u0420\u0443\u043c\u044b\u043d\u0438\u044f"},"price":"139","price2":"278","currency":{"code":"RON","name":"RON"}},"21535":{"id":21535,"name":"Beewax","country":{"code":"BG","name":"\u0411\u043e\u043b\u0433\u0430\u0440\u0438\u044f"},"price":"69","price2":"138","currency":{"code":"BGN","name":"\u043b\u0435\u0432"}},"21536":{"id":21536,"name":"Beewax","country":{"code":"HU","name":"\u0412\u0435\u043d\u0433\u0440\u0438\u044f"},"price":"11900","price2":"23800","currency":{"code":"HUF","name":"Ft"}},"22602":{"id":22602,"name":"Beewax","country":{"code":"MD","name":"\u041c\u043e\u043b\u0434\u0430\u0432\u0438\u044f"},"price":"369","price2":"738","currency":{"code":"MDL","name":"\u043b\u0435\u0438"}},"23624":{"id":23624,"name":"Beewax","country":{"code":"CZ","name":"\u0427\u0435\u0445\u0438\u044f"},"price":"790","price2":"1580","currency":{"code":"CZK","name":"K\u010d"}}}';
$dataOffer = '{"id":23624,"name":"Beewax","country":{"code":"CZ","name":"\u0427\u0435\u0445\u0438\u044f"},"price":"790","price2":"1580","currency":{"code":"CZK","name":"K\u010d"}}';
$is_geo_detect = '';
$productName = 'Beewax';
$invoice = 'index.php';
$language = 'cz';
$push_link = '';

$keitaro_postback = '';

$companyInfo = array('address' => '603140, Нижегородская область, г. Нижний Новгород, пер. Мотальный, д. 4, офис 301', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "РК-ТРЕЙД" ОГРН: 1215200002918 ИНН: 5260476009 КПП: 525801001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika'
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
