<html>
  <head>
    <title>ข้อมูลนิสิต</title>
  </head>
  <body>

  <?php
    // retrieve student 
    require("student.php");
  ?>
  
  <form action='addStudent.php' method='get'>
    <table border='1'>
      <tr>
        <td>ชื่อนิสิต:</td>
        <td><input type='text' name='stu_name'></td>
      </tr>
      <tr>
        <td>สาขา:</td>
        <td>
            <input type='text' name='dept_id'>
        <?php
          // 1. Connect
          require("connect.php");

          // 2. Select SQL
          $sql = "SELECT DEPT_ID, DEPT_NAME FROM department";

          // 3. Execute SQL
          $result = mysqli_query($conn, $sql);


        ?>
        </td>
      </tr>  
      <tr>
        <td colspan='2'><input type='submit' value='ADD STUDENT'></td>
      </tr>            
    </table>
  </form>
  
  </body>
</html>



