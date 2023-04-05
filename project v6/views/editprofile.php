<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a href="../controllers/logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300">
                    
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
                        
                        <li> <a href="../controllers/logout.php"> Logout</a></li> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        ?>

                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="../controllers/logout.php"> Logout</a></li>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                         <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="../controllers/logout.php"> Logout</a></li>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        ?>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="../controllers/logout.php"> Logout</a></li>
                        <?php
                    }

                    ?>
                    </ul>

                </td>




                <td>

                        <form action="../controllers/editprofilehandler.php" method="POST" >
                        <fieldset>
                                <legend> EDIT PROFILE </legend>
                                <table>
                                            <tr>
                                                <td>Name</td>
                                                <td> :<input type="text" name="name" value="<?php echo $_SESSION['name'];?>"/>   </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                     <td>Email</td>  
                                                     <td>:<input type="email" name="email" value="<?php echo $_SESSION['email'];?>"/></td>               
                                            </tr>
                                            <tr>
                                                    <td>Gender</td>  
                                                     <td>:   
                                                    <input type="radio" name="gender" value="Male" 
                                                     <?php 
                                                     if($_SESSION['gender']=="Male")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>
                                                     /> Male
                                                             <input type="radio" name="gender" value="Female"
                                                             <?php 
                                                     if($_SESSION['gender']=="Female")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>
                                                     /> Female
                                                             <input type="radio" name="gender" value="Other"
                                                             <?php 
                                                     if($_SESSION['gender']=="Other")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>/> Other
                                                            
                                                    </td> 
                                            </tr>
                                            <tr>
                                                     <td>Date Of Birth</td>  
                                                     <td>: <input type="date" name="dob" value="<?php echo $_SESSION['dob'];?>"/> </td> 
                                                     
                                            </tr>
                                            <tr>
                                                     <td>Phone Number</td>  
                                                     <td>: <input type="number" name="phonenumber" value="<?php echo $_SESSION['phonenumber'];?>"/> </td> 
                                                     
                                            </tr>
                                            
                                </table>
                                <fieldset>
                                    <Legend>Address</Legend>
            
                                         <textarea name="address" id="" cols="50" rows="5"><?php echo $_SESSION['address'];?></textarea>
                                        
                </fieldset>
                <h1></h1>
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