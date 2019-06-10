<?php
include("connect.php");
$id=$_POST["id"];
$sql="delete from departments where DEP_ID = '$id'";
$res=mysqli_query($conn,$sql);
  if ($res){
    $data['check_del']='OK';
  }
  else{
    $data['check_del']='NO_OK';
  }
  echo json_encode($data);
 ?>
