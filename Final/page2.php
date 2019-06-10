<?php
session_start();
if (isset($_SESSION["username"])){//ดักหน้า
      echo $_SESSION["FNAME"]." ".$_SESSION["LNAME"];
 ?>
      <a href="page1.php">หน้า1</a> |
      <a href="logout.php">ออกจากระบบ</a>
<?php
}// ปิด ดักหน้า
else{
  header("location: index.html");
}
?>
