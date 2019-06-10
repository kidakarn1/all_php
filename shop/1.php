<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      Number of Star: <input type="number" name="number" min="1">
      <input type="submit">
    </form>
    <?php if (isset($_POST["number"])){
     $number =   $_POST["number"];
     if ($number%2==0){
       for ( $a=1; $a <=$number; $a++) {
         if ($a>1){
           echo "<br>";
         }
         for ($i=$a; $i > 0; $i--) {
          echo "*";
         }
       }
     }
     else{
       for($i=$number; $i>=1; --$i){
         for($j=1; $j<=$i; ++$j){
              echo"*";
          }
          echo"<br>";
        }
     }
    }
     ?>
  </body>
</html>
