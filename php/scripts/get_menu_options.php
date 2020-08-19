<?php
    require_once "data/database.php";

    $menuLevel = $_GET['menuLevel'];
    $parentMenuId = $_GET['parentMenuId'];
    $menuOptTblName = DB_SETTINGS['MENU_OPTIONS_TABLE_NAME'];

    if ($menuLevel == 0){
      //Query to retrieve top level menu options
      $query = "SELECT * FROM $menuOptTblName WHERE menulevel = 0";
    } else {
      //Query to retrieve submenus
      $query = "SELECT * FROM $menuOptTblName WHERE menulevel = $menuLevel AND parentMenuId = $parentMenuId";
    }
    getMenuOptions ($query);

/* ******************************* Function definitions ******************************* */

   function getMenuOptions ($menuQuery)
   {
        try {
            $dbCon = new DBConnection(DB_SETTINGS['DATABASE_NAME']);
            $jsonStr = '{"menuOptions":[';
            foreach($dbCon->runQuery($menuQuery) as $row) {
               $jsonStr.= '{';
               $jsonStr.= '"menuId":'	    .$row['menuid' ].',';
               $jsonStr.= '"menuName":"'   .$row['menuname'].'",';
               $jsonStr.= '"menuLink":"'   .$row['menulink'].'",';
               $jsonStr.= '"hasSubMenu":'  .$row['hassubmenu' ].',';
               $jsonStr.= '"parentMenuId":'.$row['parentmenuid' ].',';
               $jsonStr.= '"menuLevel":'	 .$row['menulevel'];
               $jsonStr.= '},';
         }//end for loop
         $jsonStr.= '{"menuId":-1,"menuName":"EOD","menuLink":"#","hasSubmenu":0 ,"parentMenuId":0 ,"menuLevel":-1}'; //dummy entry
         $jsonStr.=']}';
         echo $jsonStr;
       } catch (PDOException $e) {
           print '{"error":"' . $e->getMessage() .'"}';
           die();
       }
   }
?>