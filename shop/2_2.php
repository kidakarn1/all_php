<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST["sub"])){
      for ($i=1; $i <=5 ; $i++) {
        if ($_POST['num'.$i] != ''){
          $num = $_POST['num'.$i];
          $current = $i-1;
          break;
        }
      }
      $n = array(100,7,107,3,104);
      for ($i=0; $i <5 ; $i++) {
          if ($i==$current)
            echo $result[$i]  = $num;
          else
            echo @$result[$i] = $num * $n[$i];
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
         <?php for ($i=1; $i <=5 ; $i++){?>
         <td><input type="number" name="num[]" value="<?php echo $result[$i]; ?>"></td>
       <?php } ?>
       </tr>
     </table>
     <input type="submit" name="sub" value="GO">
     <a href="">Clear</a>
   </form>
  </body>
</html>
