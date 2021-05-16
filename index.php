<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>iDiscuss- Forum for Coding & Code Learners</title>
</head>

<body>
  <?php
       include "partial/_dbconnect.php"; 
       include "partial/_header.php";
       
  ?>

        <!--Slider start here -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="partial/img/cr.jpg" height="580px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="partial/img/slider-2.jpg" height="580px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="partial/img/slider-3.jpg" height="580px" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- Category start here-->

  <div class="container">
    <h2 class="text-center my-3">iDiscuss - Categories</h2>
    <div class="row">

    <!-- To fetch the category We will itrate it through  loop -->
    <?php
      $sql="SELECT * FROM `category`";
      $result=mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['category_no'];
        // echo $row['category_name'];
        $category_no=$row['category_no'];
        $category=$row['category_name'];
        $discription=$row['category_discription'];
        echo ' <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="https://source.unsplash.com/500x300/?'.$category.',coding
          " class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a href="thread.php?cat_no='. $category_no.'">'.$category.'</a></h5>
            <p class="card-text">'.substr ($discription, 0, 90).'...</p>
            <a href="thread.php?cat_no='. $category_no.'" class="btn btn-primary">Explore Threads</a>
          </div>
        </div>
      </div>';
      }
    ?>
      

  <?php   include "partial/_footer.php"; ?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>