<?php
include('connect.php');
  if(!empty($_GET['id'])) {
    $fp = fopen("..\simple.txt","w+");
    $txt = "<table border='1'>";
    $txt = $txt."<thead>";
    $txt = $txt."<tr>";
    $txt = $txt."<th>";
    $txt = $txt."Products_Name";
    $txt = $txt."</th>";
    $txt = $txt."<th>";
    $txt = $txt."Quantity_Ordered";
    $txt = $txt."</th>";
    $txt = $txt."<th>";
    $txt = $txt."Buy_Price";
    $txt = $txt."</th>";
    $txt = $txt."<th>";
    $txt = $txt."Price_Each";
    $txt = $txt."</th>";
    $txt = $txt."</tr>";
    $txt = $txt."<tbody>";

    $id = $_GET['id'];
    $sql = "select * from orderdetails o ,products p where orderNumber = '$id' and o.productCode = p.productCode";
    $res = $db->query($sql);
    while ($row = $res->fetch_assoc()) {
      $json[] = $row;
      $txt = $txt."<tr>";
      $txt = $txt ."<td>".$row['productName']."</td>";
      $txt = $txt ."<td>".$row['quantityOrdered']."</td>";
      $txt = $txt ."<td>".$row['buyPrice']."</td>";
      $txt = $txt ."<td>".$row['priceEach']."</td>";
      $txt = $txt."</tr>";
    }
    $data['data'] = $json;
    echo json_encode($data);
    $txt = $txt."</tbody>";
    $txt = $txt."</table>";
    fputs($fp,$txt);
    fclose($fp);

  }

 ?>
