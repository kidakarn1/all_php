<?php
$host="localhost";
$user="root";
$pass="12345678";
$db="shop_label";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn){
  echo "NO_CONNECT_ERROR";
}
mysqli_set_charset($conn,"utf8");
 ?>
