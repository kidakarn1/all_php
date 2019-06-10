<?php 
ini_set('max_execution_time', 9000);
include("conn.php");
$sql="select * from CUSTOMER";
$res=oci_parse($conn,$sql);
oci_execute($res,OCI_DEFAULT);
$sql1="select * from STAFF";
$res1=oci_parse($conn,$sql1);
oci_execute($res1,OCI_DEFAULT);
$sql2="select * from LABLE";
$res2=oci_parse($conn,$sql2);
oci_execute($res2,OCI_DEFAULT);
$sqlcat="select * from CATEGORY";
$rescat=oci_parse($conn,$sqlcat);
oci_execute($rescat,OCI_DEFAULT);
$sqlde="select * from DEPArTMENTS";
$resde=oci_parse($conn,$sqlde);
oci_execute($resde,OCI_DEFAULT);
?>
db.staff.insertMany([
<?php $i=1;while ($row1=oci_fetch_array($res1,OCI_BOTH)){?>
	{STAFF_ID:"<?php echo $row1['STAFF_ID']?>",USERNAME:"<?php echo $row1['USERNAME']?>",PASSWORD:"<?php echo $row1['PASSWORD']?>",FNAME:"<?php echo $row1['FNAME']?>",LNAME:"<?php echo $row1['LNAME']?>",PHONE:"<?php echo $row1['PHONE']?>",EMAIL:"<?php echo $row1['EMAIL']?>",ADDRESS:"<?php echo $row1['ADDRESS']?>",SALARY:"<?php echo $row1['SALARY']?>",DEP_ID:"<?php echo $row1['DEP_ID']?>",IMG:"<?php echo $row1['IMG']?>"},
<br>
<?php $i++;}?>
])
<br>
<br>
<br>
db.lable.insertMany([
<?php $i=1;while ($row2=oci_fetch_array($res2,OCI_BOTH)){?>
	{LABLE_ID:"<?php echo $row2['LABLE_ID'];?>",STAFF_ID:"<?php echo $row2['STAFF_ID'];?>",CUS_PHONE:"<?php echo $row2['CUS_PHONE'];?>",LABLE_HEIGHT:"<?php echo $row1['LABLE_HEIGHT'];?>",LABLE_WIDTH:"<?php echo $row2['LABLE_WIDTH'];?>",CAT_ID:"<?php echo $row2['CAT_ID'];?>",LABLE_NUMBER:"<?php echo $row2['LABLE_NUMBER'];?>",DESCRIPTION:"<?php echo $row1['DESCRIPTION'];?>",TOTAL:"<?php echo $row2['TOTAL'];?>",ORDER_DAY:"<?php echo $row2['ORDER_DAY'];?>",PICK_UP_DATE:"<?php echo $row2['PICK_UP_DATE'];?>",IMG:"<?php echo $row2['IMG'];?>",STATUS:"<?php echo $row2['STATUS'];?>"},
<br>
<?php $i++;}?>
])
<br>
<br>
<br>

db.customer.insertMany([
<?php while ($row=oci_fetch_array($res,OCI_BOTH)){
?>
	{CUS_FNAME:"<?php echo $row['CUS_FNAME'];?>",CUS_LNAME:"<?php echo $row['CUS_LNAME'];?>",CUS_ADDRESS:"<?php echo $row['CUS_ADDRESS'];?>",CUS_EMAIL:"<?php echo $row['CUS_EMAIL'];?>",CUS_PHONE:"<?php echo $row['CUS_PHONE'];?>"},	
	<br>
	<?php
}?>
	])
	<br>
	<br>
	<br>
db.departments.insertMany([
<?php while ($rowde=oci_fetch_array($resde,OCI_BOTH)){
?>
	{DEP_ID:"<?php echo $rowde['DEP_ID'];?>",DEP_NAME:"<?php echo $rowde['DEP_NAME'];?>"},	
	<br>
	<?php
}?>
	])
	<br>
	<br>
	<br>

