<?php

global $dir_name, $offers, $offer;
$dir_name = dirname(__FILE__);
require_once( $dir_name .'/config.php');

$offers = json_decode($dataOffers, true);
$offer = json_decode($dataOffer, true);

$newPrice = 790;
$oldPrice = 1580;
$currencyDisplay = 'Kč';

require($dir_name . '/app.php');

$dbg_mod = is_debug($_debug, True);

$ip_address = (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
if ( $is_geo_detect ) {
    $offer = get_offer_by_ip($ip_address, $offers, $offer);
}

$countryDetect = $offer['country']['code'];
$currencyDisplay = $offer['currency']['name'];
$newPrice = $offer['price'];
$oldPrice = $offer['price2'];


$utm = [
    "utm_source" => '',
    "utm_medium" => '',
    "utm_campaign" => '',
    "utm_content" => '',
    "utm_term" => '',

    "sub1" => '',
    "sub2" => '',
    "sub3" => '',
    "sub4" => '',
    "sub5" => '',

    'fb_pixel' => '',
    'ya_pixel' => '',
    'tiktok_pixel' => '',
    'mail_pixel' => '',
    'google_pixel' => '',
    'google_adw_pixel' => '',
    'vk_pixel' => '',

    'formFields' => '',
];
$data_get = $_GET;
if (isset($formFields)) {
    $data_get['formFields'] = urlencode(json_encode($formFields));
}
foreach($utm as $key => $val) {
    $utm[$key] = clear_value(array_get($data_get, $key));
}

$GLOBALS['utm'] = $utm;

$newPriceHtml = '<x-newprice>' . $newPrice . '</x-newprice>';
$oldPriceHtml = '<x-oldprice>' . $oldPrice. '</x-oldprice>';
$currencyDisplayHtml = '<x-currency>'. $currencyDisplay .'</x-currency>';

$newPrice = $newPriceHtml;
$oldPrice = $oldPriceHtml;

$renderCallback = new BeforeRenderCallback([], getcwd());

$render_context = ['pixels' => $pixels];

$js_injector = new JsInjector($data_get, $render_context);
$renderCallback->addCallback($js_injector);

register_shutdown_function(function() use($renderCallback) {
    $renderCallback->prepare();
});

$data_get = $_GET;
