<?php
include("connect.php");
$dep_id=$_POST["dep_id"];
$dep_name=$_POST["dep_name"];
$sql="update departments set DEP_NAME = '$dep_name' where DEP_ID='$dep_id'";
$res=mysqli_query($conn,$sql);
if ($res){
  $data['check_update']='update_ok';
}
else{
  $data['check_update']='no_update';
}
echo json_encode($data);
 ?>
