<?php

/****************************************************************************
* @author: Christopher E. Slowley
* @date: June 25, 2017
* @lastupdated: Aug 19, 2020
* @purpose: Stores all the site settings
*****************************************************************************/

/****************************************************************************
* For local development environment purposes only
* Comment below before upload to webserver 
*****************************************************************************/
define("PUBLIC_FOLDER","/websites/KelownaDesigns.com-April2017/public_html/");

/****************************************************************************
* For remote production environment
* Uncomment below before upload to webserver
*****************************************************************************/
//define("PUBLIC_FOLDER","/public_html/");

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