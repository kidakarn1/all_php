<?php
ini_set('max_execution_time', 9000);
include("conn.php");
$sql3="select * from CATEGORY";
$res3=oci_parse($conn,$sql3);
oci_execute($res3,OCI_DEFAULT);
?>
db.category.insertMany([
<?php $i=1;while ($row3=oci_fetch_array($res3,OCI_BOTH)){?>
	{CAT_ID:"<?php echo $row3['CAT_ID'];?>",CAT_NAME:"<?php echo $row3['CAT_NAME'];?>",PRICE:"<?php echo $row3['PRICE'];?>",HEIGHT:"<?php echo $row3['HEIGHT']?>",WIDTH:"<?php echo $row3['WIDTH'];?>",NUMBER_ROLL:"<?php echo $row3['NUMBER_ROLL'];?>"},
<br>
<?php $i++;}?>
])
