<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into user values('','{$user['username']}','{$user['password']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function changepassword ($details){
        $con = getConnection();
        //$sql = "insert into specifications values('','{$specs['name']}','{$specs['role']}','{$specs['defination']}','{$specs['story']}','{$specs['criteria']}','{$specs['ui']}','{$specs['tags']}')";
        $sql = "UPDATE user
        SET password = '{$details['newpassword']}'
        WHERE username = '{$details['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }

    


?>