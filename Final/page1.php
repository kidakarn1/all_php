<?php
session_start();
if (isset($_SESSION["username"])){//ดักหน้า
      echo $_SESSION["FNAME"]." ".$_SESSION["LNAME"];
 ?>
      <a href="page2.php">หน้า2</a> |
      <a href="logout.php">ออกจากระบบ</a>
<?php
}// ปิด ดักหน้า
else{
  header("location: index.html");
}
?>
