<?php 
require_once '../models/usermodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_SESSION['username']; 
        $password = $_SESSION['password']; 
        $currentpassword = $_REQUEST['currentpassword'];
        $newpassword = $_REQUEST['newpassword'];
        $retypenewpassword = $_REQUEST['retypenewpassword'];
       


         

            if($newpassword == $retypenewpassword) {

                if (strlen(trim($_REQUEST['newpassword'])) >= 8)
                {
                    $details = ['username'=> $username, 'password'=> $password, 'currentpassword'=> $currentpassword, 'newpassword'=> $newpassword, 'retypenewpassword'=> $retypenewpassword];
                    $status = changepassword($details);
                    if($status){
                        echo "password changed successfully";
                    }else{
                        echo "DB error, try again";
                    }
                }

                else
                {
                    echo "password must be at least 8 character";
                }
            
            
            }
            else
            {
                echo "new password does not match";
            }
            
            
        }
        else{
            echo "current password is wrong";
        }
    

    else{
        echo "invalid request...";
    }
?>
