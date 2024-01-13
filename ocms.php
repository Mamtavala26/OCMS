<?php
$server = 'localhost';
$user = 'root';
$password = '';
$ocms = 'ocms';
//$token = $_GET['token'];

$con = mysqli_connect("localhost","root","","ocms");

if($con)
  {
    //echo "connection successfully";
  }else{
    echo "No Connection";

  }
?>