<?php
$showError="false";
//$method=$_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include "partial/_dbconnect.php";
    $user_email=$_POST['signupEmail'];
    $pass=$_POST['password'];
    $cpass=$_POST['confirmPassword'];

    //include "partial/_dbconnect.php";
    //Check whether email is exits or not
    $exitSql="SELECT * FROM `users` WHERE user_email='$user_email'";
    $result=mysqli_query($conn,$exitSql);
    $numRows=mysqli_num_rows($result);
    if ($numRows>0) {
        $showError="Email already in use";
        echo $showError;
        
    }
    else {
        if ($pass == $cpass) {
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`user_email`, `password`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if ($result) {
               $showError=true;
               header("Location: /forum prog/index.php?signupsuccess=true");
                exit();
            }
        }
        else {
           $showError="Password not match";
            //echo $showError;

        }
    }
    header("Location:/forum prog/index.php?signupsuccess=false&error=$showError");
}

?>