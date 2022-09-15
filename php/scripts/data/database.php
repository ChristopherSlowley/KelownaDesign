<?php 

require_once "../scripts/sitesettings.php";

/**
* Definition of the base Database Connection class 
 * 
*/

class DBConnection {
    private     $url        =   DB_SETTINGS['HOST_NAME'];
    private     $username   =   DB_SETTINGS['USER_NAME'];
    private     $password   =   DB_SETTINGS['PASSWORD'];
    private     $database   =   DB_SETTINGS['DATABASE_NAME'];
    protected   $databaseHandle;

    public function __construct($dbName)
    {
        $this->database = $dbName;
        $this->setupConnection();
    }

    public function __construct2($dbURL, $dbName, $dbUserName, $dbPassword)
    {
        $this->database = $dbName;
        $this->url = $dbURL;
        $this->username = $dbUserName;
        $this->password = $dbPassword;
        $this->setupConnection();
    }

    public function getConnection()
    {
        return $this->getDBHandlle();
    }

    public function getDBHandlle()
    {
        return $this->databaseHandle;
    }

    public function runQuery($query)
    {
        return ($this->databaseHandle->query($query));
    }

    public function __destruct()
    {
        $this->databaseHandle = null;
    }

    public function setupConnection()
    {
        try 
        {
            $this->databaseHandle = new PDO('mysql:host='.$this->url.';dbname='.$this->database, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "[DBConnection.setupConnecion()]<br/>";
            die();
        }
    }//end method setupConnection
} // end class definition
?>