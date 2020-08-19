<?php

/**
* @author Christopher E. Slowley
* @date June 25, 2017
* @purpose Stores all the site settings
*/

define("PUBLIC_FOLDER","/websites/KelownaDesigns.com-April2017/public_html/");

/*
define("BASE_SETTINGS", [
    "ABSOLUTE_ROOT_LOCATION" =>  $_SERVER['DOCUMENT_ROOT']."/websites/KelownaDesigns.com-April2017/public_html/",
    "ABSOLUTE_ROOT_URL" => "http://".$_SERVER['SERVER_NAME']."/websites/KelownaDesigns.com-April2017/public_html/"
]);
*/

define("BASE_SETTINGS", [
    "ABSOLUTE_ROOT_LOCATION" =>  $_SERVER['DOCUMENT_ROOT'].PUBLIC_FOLDER,
    "ABSOLUTE_ROOT_URL" => "http://".$_SERVER['SERVER_NAME'].PUBLIC_FOLDER
]);


define("BASE_URLS", [
    "CSS" =>  BASE_SETTINGS['ABSOLUTE_ROOT_URL']."css/",
    "JS" => BASE_SETTINGS['ABSOLUTE_ROOT_URL']."js/",
    "JS_SCRIPTS" => BASE_SETTINGS['ABSOLUTE_ROOT_URL']."js/scripts/",
    "PHP_SCRIPTS" => BASE_SETTINGS[ABSOLUTE_ROOT_URL]."php/scripts/"
]);

define("BASE_LOCATIONS", [
    "PHP_SEGMENTS" =>  BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']."php/segments/",
    "PHP_SCRIPTS" => BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']."php/scripts/",
    "PHP_DATA_SCRIPTS" => BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']."php/scripts/data/"
]);
?>