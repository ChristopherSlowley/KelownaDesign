<?php
    require_once "data/MenuDataHandler.php";
    
    error_log("Test", 3, 'log\get_menu_options.log');

    $menuLevel = $_GET['menuLevel'];
    $parentMenuId = $_GET['parentMenuId'];
    
    $menuHandler = new MenuDataHandler();
    
    echo $menuHandler->getMenuOptions($menuLevel, $parentMenuId);

?>