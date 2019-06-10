<?php
  include('connect.php');
  $sql = "select orderNumber from orders";
  $res = $db->query($sql);
  while ($row = $res->fetch_assoc()) {
    $json[] = $row;
  }
  $data['data'] = $json;
  echo json_encode($data['data']);
 ?>
