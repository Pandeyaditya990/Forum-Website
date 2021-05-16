<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']=="true") {
  # code...
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/forum prog">iDiscuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum prog">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
        $sql="SELECT category_no, category_name FROM `category` LIMIT 3";
        $result=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($result)) {

          echo '<li><a class="dropdown-item" href="thread.php?cat_no='.$row['category_no'].'">'.$row['category_name'].'</a></li>';
         
        }
        echo '</ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']=="true") {
      echo '<form class="d-flex" method="get" action="search.php">
      <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      <p class="mb-0 my-0 mx-2 text-light text-center">Welcome '.$_SESSION['useremail'].'</p>
      <a href="partial/logout.php" class="btn btn-outline-success"  data-bs-target="#loginmodal">Logout</a>
  </form>  ';
    }
    
    else{  
    echo '<form class="d-flex ">
    <input class="form-control me-2 mr-ms-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>
    <div class="mx-2">      
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginmodal">login</button>
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
    </div>';
    }
    echo '
  </div>
</div>
</nav>';
include "partial/_loginmodal.php";
include "_signupmodal.php";

//to check user login or not
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible my-0 fade show" role="alert">
  <strong>Success!</strong> Now you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
/*
else {
  echo '<div class="alert alert-danger alert-dismissible my-0 fade show" role="alert">
  <strong>Error!</strong> your signup failed you go signup again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
*/
?>