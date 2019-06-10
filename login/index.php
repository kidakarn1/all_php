<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>กิดาการ อินทปัญญา</title>
  </head>
  <body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
      <?php
      @SESSION_START();
      if (isset($_SESSION['username'])){
          include("menu.php");
          ?>
          <center>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-10" src="image/logo.png"  alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/a.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/b2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/c.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
      <?php
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
  </body>
</html>
