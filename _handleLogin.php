<?php
$showError="false";
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_POST['loginEmail'];
    $pass=$_POST['loginPassword'];

    include "_dbconnect.php";

    $sql="SELECT * FROM `users` WHERE user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if ($numRows==1) {
        $row=mysqli_fetch_assoc($result);
        if (password_verify($pass,$row['password'])) {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['Serial_no']=$row['Serial_no'];
            $_SESSION['useremail']=$email;
            echo "logged in ".$email;
          //  header("Location:/forum prog/index.php");
            //exit();
        }
        else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong>Some thing wrong check you details .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        } 
        header("Location:/forum prog/index.php"); //it will send on the home page of forum to the users if login or not
    }

}
?>