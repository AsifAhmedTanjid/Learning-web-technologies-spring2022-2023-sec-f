<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Change Password</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            
                        </td>
                        <td align="right">
                        
                                    <a href="../controllers/logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300" >
                   
            

                </td>




                <td>

                      <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <form action="../controllers/changepasswordhandler.php" method="POST">
                                            <tr>
                                                <td>Current Password</td>
                                                <td> :<input type="password" name="currentpassword" value=""/>   </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                            <td>New Password</td>
                                                <td> :<input type="password" name="newpassword" value=""/>   </td>               
                                            </tr>
                                            <tr>
                                            <td>Retype New Password</td>
                                                <td> :<input type="password" name="retypenewpassword" value=""/>   </td>
                                            </tr>
                                          
                                            
                                </table>
                                <hr>
                                <input type="submit" name="submit" value="Submit"/>
                         </form>
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