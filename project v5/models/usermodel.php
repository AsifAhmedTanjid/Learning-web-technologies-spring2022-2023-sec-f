<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                //print_r($row); echo "<br>";
    
                       $_SESSION['username']= $row['username'];
                       $_SESSION['password']= $row['password'];
                       $_SESSION['role']= $row['role'];
                       $_SESSION['name']= $row['name'];
                       $_SESSION['email']= $row['email'];
                       $_SESSION['gender']= $row['gender'];
                       $_SESSION['dob']= $row['dob'];
                       $_SESSION['phonenumber']= $row['phonenumber'];
                       $_SESSION['address']= $row['address'];
                       $_SESSION['profilepicture']= $row['profilepicture'];
                       $_SESSION['joiningdate']= $row['joiningdate'];
                       
            }
            return true;
        }else{
            return false;
        }
    }

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into user values('','{$user['username']}','{$user['password']}','{$user['role']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}','{$user['phonenumber']}','{$user['address']}','{$user['joiningdate']}','{$user['profilepicture']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function changepassword ($details){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET password = '{$details['newpassword']}'
        WHERE username = '{$details['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editprofile ($user){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET name = '{$user['name']}', email = '{$user['email']}', gender = '{$user['gender']}', dob = '{$user['dob']}', phonenumber = '{$user['phonenumber']}', address = '{$user['address']}'
        WHERE username = '{$user['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editprofilepicture ($user){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET profilepicture = '{$user['profilepicture']}'
        WHERE username = '{$user['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }

    


?>