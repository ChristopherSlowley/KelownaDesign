<?php
/**
 * Description: Class that handles all the back-end database calls to the
 * menuoptions DB table.
 * 
 * @author Christopher E. Slowley  @ KelownaDesigns.com
 */

require_once "database.php";

/**
 * A specialized DBConnection class specifically for the menuoptions table
 * 
 * @author Christopher Slowley 
*/
class MenuDataHandler extends DBConnection
{
    protected static $menuOptTblName = DB_SETTINGS['MENU_OPTIONS_TABLE_NAME'];
    
    public function __construct()
    {
        $this->setupConnection();
    }
    
    /**
     * Retrieves both main and sub-menu options from the DB
     * @param int $menuLevel
     * @param int $parentMenuId
     * @return string a JSON formatted string of menu options
     */
    public function getMenuOptions($menuLevel, $parentMenuId = null)
    {
        if($menuLevel === 0)
        {
            //Query to retrieve top level menu options
            $query = "SELECT * FROM ". self::$menuOptTblName." WHERE menulevel = 0";
        } 
        else 
        {
            //Query to retrieve submenus
            $query = "SELECT * FROM ".self::$menuOptTblName." WHERE menulevel = $menuLevel AND parentMenuId = $parentMenuId";
        }
        return $this->retrieveMenuOptionsJSON($query);
    }
    
    /**
     * Retrieves the menu options and formats them as a JSON string
     * @param string $menuQuery The SQL query to retrieve the menu options
     * @return string
     */
    function retrieveMenuOptionsJSON ($menuQuery)
    {
        try 
        {
            $jsonStr = '{"menuOptions":[';
            foreach($this->runQuery($menuQuery) as $row) 
            {
               $jsonStr.= '{';
               $jsonStr.= '"menuId":'       .$row['menuid' ].',';
               $jsonStr.= '"menuName":"'    .$row['menuname'].'",';
               $jsonStr.= '"menuLink":"'    .$row['menulink'].'",';
               $jsonStr.= '"hasSubMenu":'   .$row['hassubmenu' ].',';
               $jsonStr.= '"parentMenuId":' .$row['parentmenuid' ].',';
               $jsonStr.= '"menuLevel":'    .$row['menulevel'];
               $jsonStr.= '},';
            }//end for loop
            $jsonStr.= '{"menuId":-1,"menuName":"EOD","menuLink":"#","hasSubmenu":0 ,"parentMenuId":0 ,"menuLevel":-1}'; //dummy entry
            $jsonStr.=']}';
            return $jsonStr;
        } 
        catch (PDOException $e) 
        {
            print '{"error":"' . $e->getMessage() .'"}';
            die();
        }
    }
}
