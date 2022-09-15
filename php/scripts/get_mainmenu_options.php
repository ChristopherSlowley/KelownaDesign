<?php
 require_once "data/database.php";

$menuLevel = $_GET['menuLevel'];
$parentMenuId = $_GET['parentMenuId'];

if ($menuLevel == 0){
    getTopLevelMenuOptions();
} else {
    getSubmenuOptions($menuLevel,$parentMenuId);
}

 function getTopLevelMenuOptions ()
 {
    try {
        $mainMenu = new DBConnection("kelownadesignsdb");
        $query = "SELECT * FROM menuoptions WHERE menulevel = 0"; 
        $jsonStr = '{"menuOptions":[';	    
        foreach($mainMenu->runQuery($query) as $row) {
			$jsonStr.= '{';
			$jsonStr.= '"menuId":'	    .$row['menuid' ].',';
			$jsonStr.= '"menuName":"'	.$row['menuname'].'",';
            $jsonStr.= '"menuLink":"'	.$row['menulink'].'",';
            $jsonStr.= '"hasSubMenu":'  .$row['hassubmenu' ].',';
            $jsonStr.= '"parentMenuId":'.$row['parentmenuid' ].',';
			$jsonStr.= '"menuLevel":'	.$row['menulevel'];
			$jsonStr.= '},';
		}//end for loop
		$jsonStr.= '{"menuId":-1,"menuName":"EOD","menuLevel":-1}'; //dummy entry
		$jsonStr.=']}';
		echo $jsonStr;
    } catch (PDOException $e) {
        print '{"error":"' . $e->getMessage() .'"}';
        die();
    }
 }

 function getSubmenuOptions ($level,$parentMenuId) {
    try {
        $mainMenu = new DBConnection("kelownadesignsdb");
        $query = "SELECT * FROM menuoptions WHERE menulevel = ".$level." AND parentMenuId = ".$parentMenuId; 
        $jsonStr = '{"menuOptions":[';	    
        foreach($mainMenu->runQuery($query) as $row) {
			$jsonStr.= '{';
			$jsonStr.= '"menuId":'	    .$row['menuid' ].',';
			$jsonStr.= '"menuName":"'	.$row['menuname'].'",';
            $jsonStr.= '"menuLink":"'	.$row['menulink'].'",';
            $jsonStr.= '"hasSubMenu":'  .$row['hassubmenu' ].',';
            $jsonStr.= '"parentMenuId":'.$row['parentmenuid' ].',';
			$jsonStr.= '"menuLevel":'	.$row['menulevel'];
			$jsonStr.= '},';
		}//end for loop
		$jsonStr.= '{"menuId":-1,"menuName":"EOD","menuLevel":-1}'; //dummy entry
		$jsonStr.=']}';
		echo $jsonStr;
    } catch (PDOException $e) {
        print '{"error":"' . $e->getMessage() .'"}';
        die();
    }
 }
?>