<?php
  include 'connect.php';
  $sql="select * from  departments";
  $res=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($res)) {
    $json[]=$row;
  }
  $data['data'] = $json;
  echo json_encode($data);
?>
