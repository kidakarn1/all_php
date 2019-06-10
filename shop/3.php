<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // $array1_code = array("101","102","103");
      // $array1_name = array("AAA","BBB","CCC");
      // // $array2_city = array("Bangkok","Tokyo","Singapore");
      $a1 =array(101=>'AAA',102=>'BBB',103=>'CCC',104=>'DDD',105=>'EEE');
      $a2 = array(103=>"Singapore",102=>"Tokyo",101=>"Bangkok",104=>'London',106=>'abc',105=>'Def',107=>'test');
      // $a1 =array(101=>'AAA',102=>'BBB',103=>'CCC');
      // $a2 = array(103=>"Singapore",102=>"Tokyo",101=>"Bangkok");
     ?>
     <table border="1">
       Array1
       <tr>
         <th>Code</th>
         <th>Name</th>
       </tr>
       <?php foreach($a1 as $x => $x_value) { ?>
       <tr>
         <td><?php echo $x; ?></td>
         <td><?php echo $x_value; ?></td>
       </tr>
     <?php } ?>
   </table>
     <br>
     <table border="1">
       Array2
       <tr>
         <th>Code</th>
         <th>City</th>
       </tr>
       <?php
       for($i=0;$i<count($a2);$i++) {
        $key  = array_keys($a2)[$i]; ?>
       <tr>
         <td><?php echo(array_keys($a2)[$i]); ?></td>
         <td><?php echo $a2[$key]; ?></td>
       </tr>
     <?php } ?>
   </table>
   <br>
 </table>
 <hr>
   <br>
   <table border="1">
     Output
     <tr>
       <th>Code</th>
       <th>Name</th>
       <th>City</th>
     </tr>
     <?php
      $ca1 = count($a1);
      $ca2 = count($a2);
     if ($ca1>$ca2){
       $count = $ca1;
       echo "if";
     }
     elseif ($ca1==$ca2) {
       $count = $ca2;
       echo "elese if";
     }
     else {
        $count = $ca2;
        echo "else";
     }
     for($i=0;$i<$count;$i++) { //loop
       if (!empty(array_keys($a1)[$i])){
         if (!empty(array_keys($a1)[$i])){
           $key  = array_keys($a1)[$i];
         }
         elseif (!empty(array_keys($a2)[$i])) {
           $key = array_keys($a2)[$i];
         }

       }
       else {
         $key=array_keys($a2)[$i-1];
       }
       if (!empty(array_keys($a2)[$i])){
         $key_city  = array_keys($a2)[$i];
       }
       else {
         $key_city = " ";
       }
       // echo $count;
       ?>
     <tr>
       <td><?php echo $key;
       $name = (!empty($a1[$key])) ? $a1[$key] : "ไม่มีค่า";
       $city = (!empty($a2[$key])) ? $a2[$key] : "ไม่มีค่า";
       ?></td>
       <td><?php echo $name; ?></td>
       <td><?php echo $city; ?></td>
     </tr>
   <?php
 } ?>
 </table>
  </body>
</html>
