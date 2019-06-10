<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    @SESSION_START();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if ($username == 'admin' && $password == 'admin'){
      $_SESSION['username'] = $username;
      $_SESSION['name'] = "กิดาการ อินทปัญญา";
      //echo $_SESSION['name'];
      header('location: index.php');
    ?>
      <!--<a href="logout.php">ออกจากระบบ</a>-->
      <?php
      }
      else{
        header('location: index.php');
      }
      ?>
  </body>
</html>
