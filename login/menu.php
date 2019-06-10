<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
    <style>
    .ITI_FAMILY{
      color:#FF851B;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php" ><span class="glyphicon glyphicon-home ITI_FAMILY"><div class="ITI_FAMILY">ว่าที่ITI23</div></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class='fas fa-archway'>หน้าหลัก</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resume.php"><span class="fa fa-child">ประวัติส่วนตัว</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.kmutnb.ac.th"><span class="fa fa-child">มหาวิทยาลัยพระนครเหนือ</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-desktop">อื่นๆ</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://web.facebook.com/dbfkdki11">facebook</a>
            <a class="dropdown-item" href="https://www.youtube.com/watch?v=R0nmTlUxiqo&index=22&list=RDhJvwZ1TDeLI">เพลงที่ชอบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><span class="fa fa-child">ออกจากระบบ</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <?php echo "<font color='#7FFF00'>"."ยินดีต้อนรับคุณ ".$_SESSION['name']."&nbsp"."</font>";?>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
      </form>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
