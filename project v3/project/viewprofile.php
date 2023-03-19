<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
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












                <td  width="300">
                    
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

                        <fieldset>
                                <legend> PROFILE </legend>
                                <table>
                                            <tr>
                                                <td>Name</td>
                                                <td align="left"> :<?php echo $_SESSION['name'] ?>  </td>
                                                
                                                <td colspan="2" rowspan="3"> <img src="profilepicture.png"> </td>
                                            </tr>
                                            <tr>
                                                     <td>email</td>  
                                                     <td>:<?php echo $_SESSION['email'] ?> </td>               
                                            </tr>
                                            <tr>
                                                    <td>Gender</td>  
                                                     <td>:<?php echo $_SESSION['gender'] ?> </td> 
                                            </tr>
                                            <tr>
                                                     <td>Date Of Birth</td>  
                                                     <td>:<?php echo $_SESSION['dob'] ?> </td> 
                                                     <td align="center"><a href="changeprofilepicture.php">Change </a> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"><a href="editprofile.php">Edit Profile </a></td>
                                                
                                            </tr>
                                </table>
                        </fieldset>


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
                <td colspan="2" align="center">Copyright © 2023</td>
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