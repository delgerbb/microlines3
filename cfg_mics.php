<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/", true);
define("APP_ROOT", DOC_ROOT . "microlines3/", true);
define("WEB_ROOT", "http://localhost:8080/microlines3/", true);
define("SEC_ROOT", APP_ROOT . "sections/", true);
define("INC_ROOT", APP_ROOT . "includes/", true);
define("PAGE_ROOT", APP_ROOT . "pages/", true);

define("JS_PATH", WEB_ROOT . "assets/js/", true);
define("CSS_PATH", WEB_ROOT . "assets/css/", true);
define("IMG_PATH", WEB_ROOT . "assets/images/", true);
define("FONT_PATH", WEB_ROOT . "assets/fonts/", true);
define("EXTRA_PATH", WEB_ROOT . "assets/extras/", true);

// include the php script
include(INC_ROOT . "geoip.php");

// open the geoip database
$gi = geoip_open(INC_ROOT . "GeoIP.dat", GEOIP_STANDARD);
// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
//echo "Your country code is: $country_code \n";
// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
//echo "Your country name is: $country_name \n";
// close the database
geoip_close($gi);
