<?php
/**
 * Description: Class that handles all the back-end database class to the
 * users DB table.
 * 
 * @author Christopher E. Slowley  @ KelownaDesigns.com
 */
require_once "database.php";

/**
 * A specialized DBConnection class specifically for the user table
 * 
 * @author Christopher Slowley 
*/
class UserDataHandler extends DBConnection 
{	
    protected static $userTblName = DB_SETTINGS['USERS_TABLE_NAME'];

	/**
	* Constructor
	*/
	public function __construct()
	{
		$this->setupConnection();        
	}
    
    /**
     * Retrieves the specified user's data from the database using the specified
     * email address.
     * @param string $email The email of the user to retrieve 
     * @return array 
     */
    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM ".self::$userTblName." WHERE user_email = '".$email."' LIMIT 1;";
        $results = $this->runQuery($query);
               
        return $results->fetchAll();
    }
    
    /**
     * Method that returns all the users in the users DB Table
     * @return array
     */
    public function getAllUsers()
    {
        $query = "SELECT * FROM ".self::$userTblName.";";
        $results = $this->runQuery($query);
               
        return $results->fetchAll();
    }
}