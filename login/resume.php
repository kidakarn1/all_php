<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> ประวัติส่วนตัว </title>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>
 <body background="image/b.jpg">
   <?php
  @SESSION_START();
   if (isset($_SESSION['username'])){
      include("menu.php");
     ?>
  <center>
	<table border="3" width="1500px">
		<tr>
			<td bgcolor="#00ff99"><h1><center>
								      <font color="#A52A2A"><b>คติประจำใจ</b></font>
									  <font color="red">ทำดีได้ดี  ทำชั่วได้ชั่ว</font> และ
				                      <font color="blue">ไม่มีอะไรเกินความพยายามของคน</font>  <a href="https://web.facebook.com/dbfkdki11"><img src="image/facebook.png" width="50px"></a></h1>
				                  </center>

			</td>
		</tr>
			<tr>
			<td bgcolor="#FFFF99">
			<p></p>
				<center><img src="image/pofile.jpg" width="500px"></center>
				<h2><font color="#0000ff">ประวัติส่วนตัว</font></h2>
				<h2><font color="red">ชื่อ-สกุล:</font>   นาย กิดาการ อินทปัญญา 6106021420029 1-RA</h2>
				<h2><font color="red">
				อายุ:</font> 20 ปี  เกิดวันที่ 30 มกราคม พ.ศ. 2541
				<h2><font color="red">อาหารที่ชื่อชอบ:</font> ข้าวผัดไม่ใส่ผัก
				<h2><font color="red">อาหารที่ไม่ชอบ:</font>  ไม่ชอบกินไก่				<h2><font color="red">ศาสนา:</font> พุทธ
				<h2><font color="red">ส่วนสูง/น้ำหนัก:</font> 178 cm 67 Kg</h2>
				<h2><font color="red">ที่อยู่ที่สามารถติดต่อได้:</font>ชลบุรี</h2>
				<h2><font color="red">เบอร์โทรศัพท์:</font>083-110-923,095-759-1823</h2>
				<h2><font color="red">E-Mail:</font>kidakarn1@gmail.com </h2>
				<h2><font color="red">งานอดิเรก:</font>เล่นคอมพิวเตอร์ และหาความรู้เพิ่มเติม</h2>
				<h2><font color="#0000ff">การศึกษา:</font></h2>
				<h2><font color="red">มัธยมศึกษาตอนต้น ศึกษาที่:</font>  โรงเรียนบ้านบึง อุตสาหกรรมนุเคราะห์</h2>
				<h2><font color="red">ปวช , และ ปวส  :</font>วิทยาลัยเทคนิคชลบุรี<h2>
				<h2><font color="red">ปัจจุบันศึกษาที่:</font>
				มหาวิทยาลัย เทคโนโลยีพระจอมเกล้าพระนครเหนือ(วิทยาเขต ปราจีนบุรี)<h2>
					</td>
		</tr>
			<tr>
		<td bgcolor="#00ff99"><h1><marquee>ขอบคุณครับที่แว๊บเข้ามารับชม</marquee></h1></td>
		</tr>
	<table>
	</center>
<?php }
else{
header('location:index.php');
}?>
 </body>
</html>
