<html>
<head>
<title>กิดาการ อินทปัญญา</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <?php
  @SESSION_START();
  if (isset($_SESSION['username'])){
      include("menu.php");
  }
  else{
?>
  <center><h2>ระบบส่วนตัว</h2></center>
  <div class="container-fluid">
    <div class="row">
      <div class="offset-md-4 col-md-5">
        <form method="post" action="check_login.php">
          <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-md-6">
              <input type="text" class="form-control" id="inputUsername" placeholder="Username"  name="username" required>
            </div>
          </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-md-6">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
        </div>
      </div>
      <div class="form-group row">
          <div class="offset-md-3 col-sm-7">
            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            <button type="reset" class="btn btn-danger">ยกเลิก</button>
          </div>
        </div>
    </form>
    </div>
    </div>
  </div>
<?php }?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
