<html>
  <head>
    <title>ข้อมูลสาขาวิชา</title>
  </head>
  <body>

  <?php
    // retrieve department 
    require("department.php");
  ?>
  
  <form action='addDepartment.php' method='get'>
    <table border='1'>
      <tr>
        <td>รหัสสาขา:</td>
        <td><input type='text' name='dept_id' size='5'></td>
      </tr>
      <tr>
        <td>ชื่อสาขา:</td>
        <td><input type='text' name='dept_name'></td>
      </tr>  
      <tr>
        <td colspan='2'><input type='submit' value='ADD DEPARTMENT'></td>
      </tr>            
    </table>
  </form>
  
  </body>
</html>



