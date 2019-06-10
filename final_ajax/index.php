<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("connect.php");

     ?>
     <table border="1">
       <tr>
         <th>รหัส</th>
         <th>ชื่อแผนก</th>
         <th>แก้ไข</th>
         <th>ลบ</th>
       </tr>
       <tbody id="show">

       </tbody>
     </table>
     id:<input type="text" name="dep_id"><br><br>
     name:<input type="text" name="dep_name">
    <button type="button" onclick="add()">add</button>
    <script language="JavaScript" type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/index.js">
    </script>

  </body>
</html>
