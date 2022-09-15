<?php
require_once "data/UserDataHandler.php";

class Controller 
{
    static protected $userHandler;
    static protected $callData;

    public function __construct($data) 
    {
        $this->init();
        self::$callData =  $data;
    }
    
    public static function init()
    {
        self::$userHandler = new UserDataHandler();
            //echo "POST: ".print_r($data,true);
    }
    
    public static function runFunction($callData = [])
    {
        $data = (!empty($callData))?$callData:(!empty(self::$callData))?self::$callData:[];
        
        if(!empty($data['function']))
        {
            $function = $data['function'];
            $functionArgs = $data['data'];
            //self::runFunction($function, $data);
            switch($function)
            {
                case 'getUserByEmail':                
                    if(!empty($functionArgs['user_email']))
                    {            
                        $email =  $functionArgs['user_email'];
                        $results = self::$userHandler->getUserByEmail($email);

                        if(!empty($functionArgs['source']) && $functionArgs['source'] === 'login' )
                        {
                            session_start();
                            $userRecord = $results[0];
                           // echo "\nUserRecord:".print_r($userRecord,true);

                            $_SESSION['user']['id']     = $userRecord['user_id'];
                            $_SESSION['user']['name']   = $userRecord['user_firstname'].' '.$userRecord['user_lastname'];
                            $_SESSION['user']['email']  = $userRecord['user_email'];
                            $_SESSION['user']['type']   = $userRecord['user_type'];

//                            echo "Your session id# is ".session_id().
//                                    "\nSession User information: ".print_r($_SESSION,true);
                        }
                    }                    
                break;
                case 'getAllUsers':
                    $results = self::$userHandler->getAllUsers();
                    break;
            }
            echo json_encode($results);
        }
        else 
        {
            echo "Error: No function or data supplied";
        }
    }
}


if(!empty($_POST))
{
    $controller = new Controller($_POST);
    $controller->runFunction();
}
else
{
    echo "Post is empty";
}

