<?php
  $fp = fopen("simple.txt","r");
  if ($fp) {
      while (!feof($fp)) {
          $file = fgets($fp, 4096);
          echo $file."<br>";
      }
      fclose($fp);
  }
?>
<a href="index.php">Back</a>
