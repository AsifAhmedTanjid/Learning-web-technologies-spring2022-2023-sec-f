<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $rememberme = isset($_REQUEST['rememberme']);

        if($username == "" && $password == "") {
            
            header('location: login.php');
        }
        else{
            $file = fopen('user.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                
                if($username == trim($user[0]) && $password == trim($user[1]))
                {
                    $_SESSION['username']=$user[0];
                    $_SESSION['password']=$user[1];
                    $_SESSION['name']=$user[2];
                    $_SESSION['email']=$user[3];
                    $_SESSION['gender']=$user[4];
                    $_SESSION['dob']=$user[5];
                    $_SESSION['role']=$user[6];
                    //$_SESSION['flag'] = "true";
                    //header('location: viewprofile.php');

                    if ($rememberme) {
                        
                        setcookie('flag', 'asif', time()+86400*30, '/');
                    }
                    else{
                       
                        setcookie('flag', 'asif', time()+300, '/');
                    }
    
                  
                    if (trim($_SESSION['role'])=="admin")
                    {
                        header('location: admindashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        
                        header('location: vendordashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        header('location: customerdashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        header('location: deliverymandashboard.php');
                    }
                   

                }
                
                
            }
            
                
                    echo "invalid credentials!!";
                
        }
    }else{
        echo "invalid request...";
    }
?>