<?php
session_start();
if(isset($_SESSION['flag'])){
?>



<html>
    <head>
        <title>Admin Dashboard</title>
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












                <td width="300">
                    
                <ul>
                    <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                    <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                    </ul>

                </td>




                <td>

                        <fieldset>
                                <legend> Vendor list </legend>
                                <table border="1">
                                    <tr> 
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Date Of Birth</th>
                                        <th>Address</th>
                                        <th>Action</th>

                                    </tr>
                                    <tr>
                                        <td>V01</td>
                                        <td>Tanjid</td>
                                        <td>tanjid01</td>
                                        <td>tanjid@gmail.com</td>
                                        <td>Male</td>
                                        <td>1998-01-03</td>
                                        <td>Sonirakhra</td>
                                        <td><input type="button" name="delete" value="Delete"/></td>

                                    </tr>
                                    <tr>
                                        <td>V02</td>
                                        <td>Tanjid</td>
                                        <td>tanjid01</td>
                                        <td>tanjid@gmail.com</td>
                                        <td>Male</td>
                                        <td>1998-01-03</td>
                                        <td>Sonirakhra</td>
                                        <td><input type="button" name="delete" value="Delete"/></td>

                                    </tr>
                                    <tr>
                                        <td>V03</td>
                                        <td>Tanjid</td>
                                        <td>tanjid01</td>
                                        <td>tanjid@gmail.com</td>
                                        <td>Male</td>
                                        <td>1998-01-03</td>
                                        <td>Sonirakhra</td>
                                        <td><input type="button" name="delete" value="Delete"/></td>

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