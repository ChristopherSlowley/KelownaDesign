<?php
   require_once BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']."php/scripts/sitesettings.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title> <?php  echo GENERAL_SETTINGS['SITE_TITLE']?></title>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."cssreset.css"); ?> rel="stylesheet">
   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."layout-styles.css"); ?> rel="stylesheet">
   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."main-style.css"); ?> rel="stylesheet">
   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."menus.css"); ?> rel="stylesheet">
   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."enhanced-tables.css"); ?> rel="stylesheet">
   <link type="text/css" href= <?php echo (BASE_URLS['CSS']."output-sections.css"); ?> rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <script src= <?php echo (BASE_URLS['JS']."jquery-3.2.1.min.js");?> ></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src= <?php echo (BASE_URLS['JS']."angular.min.js"); ?> ></script>
   <script src= <?php echo (BASE_URLS['JS_SCRIPTS']."GUIUtil.js"); ?> type="text/javascript"></script>
   <script src= <?php echo (BASE_URLS['JS_SCRIPTS']."getMenuOptions.js"); ?> type="text/javascript"></script>
</head>