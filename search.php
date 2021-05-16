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
<style>
  .maincontainer{
    min-height: 80vh;
  }
</style>
</head>

<body>
  <?php
       include "partial/_dbconnect.php"; 
       include "partial/_header.php";
       
  ?>


<!-- Category start here-->
<div class="container maincontainer">
        <?php
       $noresult=true;
       $query=$_GET['query'];
       $sql="SELECT * FROM threadlist WHERE MATCH (thread_title, thread_discription) against ('$query')";
       $result=mysqli_query($conn,$sql);
       while ($row=mysqli_fetch_assoc($result)) {
      
           $thread_title=$row['thread_title'];
           $thread_discription=$row['thread_discription'];
           $thread_cat_id=$row['thread_cat_id'];
           $url='thread.php?cat_no='.$thread_cat_id;
           $noresult=false;

           //Displya the search result
           echo '<div class="result">
           <h3><a href="'.$url.'">This is search result for '.$thread_title.'</a></h3>
           <p>'.$thread_discription.'</p>
           ';
       }
       if ($noresult) {
         echo '<div class="container">         
         <p class=""><b>Suggestion</b></p>
         <p><ul>
         <li>Make sure that all words are spelled correctly.</li>
         <li>Try different keywords.</li>
         <li>Try more general keywords.</li>
         <li>Try fewer keywords. </ul></p>
         </div>';
       }

        ?>
</div>
      

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