<?php
include("connect.php");
$dep_id=$_POST["dep_id"];
$dep_name=$_POST["dep_name"];
$sql="INSERT INTO `departments`(`DEP_ID`, `DEP_NAME`) VALUES ('$dep_id','$dep_name')";
$res=mysqli_query($conn,$sql);
if ($res){
  $data['check_insert']='inser_OK';
}
else{
  $data['check_insert']= $sql;
}
echo json_encode($data);
 ?>
