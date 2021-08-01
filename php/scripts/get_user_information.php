<?php
require_once "data/UserDataHandler.php";

$userHandler = new UserDataHandler();
if(!empty($_POST))
{
    $data = $_POST;
    //echo "POST: ".print_r($data,true);
    
    if(!empty($data['function']))
    {
        $function = $data['function'];
        $functionArgs = $data['data'];
        switch($function)
        {
            case 'getUserByEmail':                
                if(!empty($functionArgs['user_email']))
                {            
                    $email =  $functionArgs['user_email'];
                    $results = $userHandler->getUserByEmail($email);
                }                    
            break;
            case 'getAllUsers':
                $results = $userHandler->getAllUsers();
                break;
        }
    }
}
else
{
    echo "Post is empty";
}

echo json_encode($results);

