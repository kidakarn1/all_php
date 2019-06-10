<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if (isset($_POST["sub"])){
  $one = $_POST["one"];
  $two = $_POST["two"];
  $three = $_POST["three"];
  $flow = $_POST["flow"];
  $fi = $_POST["fi"];
  if ($one!=null || $one!=''){
    $kun = ($one>100)?2:1;
    $two=7*$kun;
    $three=107*$kun;
    $flow=3*$kun;
    $fi=104*$kun;
  }
  elseif ($two!=null || $two!='') {
    $kun = ($two>7)?2:1;
    $one=$one*$kun;
    $three=$three*$kun;
    $flow=$flow*$kun;
    $fi=$fi*$kun;
  }
  elseif ($three!=null || $three!='') {
    $kun = ($three>107)?2:1;
    $one=$one*$kun;
    $two=$two*$kun;
    $flow=$flow*$kun;
    $fi=$fi*$kun;
  }
  elseif ($flow!=null || $flow!='') {
    $kun = ($flow>3)?2:1;
    $one=$one*$kun;
    $two=$two*$kun;
    $three=$three*$kun;
    $fi=$fi*$kun;
  }
  elseif ($fi!=null || $fi!='') {
    $kun = ($flow>104)?2:1;
    $one=$one*$kun;
    $two=$two*$kun;
    $three=$three*$kun;
    $flow=$flow*$kun;
  }
}
     ?>
    <form method="post" action="">
    <table border="1">
      <tr>
        <th>100</th>
        <th>7</th>
        <th>107</th>
        <th>3</th>
        <th>104</th>
      </tr>
      <tr>
        <td><input type="number" name="one" min="100" value="<?php echo $one; ?>"></td>
        <td><input type="number" name="two" min="7" value="<?php echo $two; ?>"></td>
        <td><input type="number" name="three" min="107" value="<?php echo $three; ?>"></td>
        <td><input type="number" name="flow" min="3" value="<?php echo $flow; ?>"></td>
        <td><input type="number" name="fi" min="104" value="<?php echo $fi; ?>"></td>
      </tr>
    </table>
    <input type="submit" name="sub" value="GO">
    <a href="">Clear</a>
  </form>
  </body>
</html>
