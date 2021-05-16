<?php
//Script to connect to the data base
$server="localhost";
$username="root";
$password="";
$database="idiscuss";

$conn=mysqli_connect($server,$username,$password,$database);

if (!$conn) {
    die("connection is not done");
}
else {
//    echo "Connection is done successful";
}
?>