<?php
session_start();
if(isset($_COOKIE['flag'])){
    $_SESSION['pp']="profilepicture.png";
?>

<?php 
if(isset($_POST['submit']))
{
    //$file = $_FILES['file'];
    $filename = $_FILES['file']['name'];

   $tempname = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($tempname,$filename);
    $_SESSION['pp']=$filename;
    //header('location: changeprofilepicture.php?success'); 
}
?>


<html>
    <head>
        <title>Change Profile Picture</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="logo.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300">
                    
                <ul>
                <ul>
                    <!-- <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                    <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> -->

                     <?php
                        if (trim($_SESSION['role'])=="admin")
                    {
                        ?>
                        <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        ?>

                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                         <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        ?>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }

                    ?>
                    </ul>

                </td>




                <td>
                <form action="" method="POST" enctype="multipart/form-data">
                      <fieldset>
                        <legend>PROFILE PICTURE</legend>
                        <img height="250" width="250" src="<?php echo $_SESSION['pp'];?>"> <br>
                        <input type="file" name="file" value=""/> <br>
                        <hr>
                        <input type="submit" name="submit" value="Submit"/>
                            
                      </fieldset>
                </form>
                </td>





            </tr>


            <tr>
                <td colspan="2" align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>


            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023 </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>