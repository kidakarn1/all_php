<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_GET["id"])){
        include("connect.php");
        $id=$_GET["id"];
        $sql="select * from departments where DEP_ID='$id'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo $row["DEP_ID"];
      ?>
      <input type="hidden" name="DEP_ID" value="<?php echo $row["DEP_ID"];?>">
      <input type="text" name="DEP_NAME" value="<?php echo $row["DEP_NAME"];?>">
      <button type="button" onclick="update()">อัฟเดช</button>
      <?php
      }
     ?>
     <script language="JavaScript" type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
     <script language="JavaScript" type="text/javascript" src="js/index.js"></script>
    </body>
</html>
