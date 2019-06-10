<?php
session_start();
include("connect.php");
if(isset($_POST["username"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  $sql="select * from  staff where USERNAME='$username' and PASSWORD= '$password'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);
  if ($row){
    $_SESSION["username"]=$row['USERNAME'];
    $_SESSION["FNAME"]=$row['FNAME'];
    $_SESSION["LNAME"]=$row['LNAME'];
      echo "<script>
              alert('Login_success');
              window.location.href='page1.php';
      </script>";
  }
  else{
      echo "<script>
              alert('UNKNOW');
              window.location.href='index.html';
      </script>";
  }
}
 ?>
