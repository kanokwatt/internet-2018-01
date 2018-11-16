<?php
  session_start();

  if(!isset($_SESSION['OK']))
    header("Location: login.php");
?>

<html>
  <head>
    <title>ข้อมูลนิสิต</title>
  </head>
  <body>

  <?php
    // retrieve student 
    require("student.php");
    echo "Welcome, " . $_SESSION['OK'];
  ?>
  
  <h1>showStudent.php</h1>
  <form action='addStudent.php' method='get'>
    <table border='1'>
      <tr>
        <td>ชื่อนิสิต:</td>
        <td><input type='text' name='stu_name'></td>
      </tr>
      <tr>
        <td>สาขา:</td>
        <td>
        <?php
          // 1. Connect
          require("connect.php");

          // 2. Select SQL
          $sql = "SELECT DEPT_ID, DEPT_NAME FROM department";

          // 3. Execute SQL
          $result = mysqli_query($conn, $sql);

          // Create Select Box / Dropdown Box of Department
          echo "<select name='dept_id'>";
          while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row['DEPT_ID']."'>".$row['DEPT_NAME']."</option>";
          }
          echo "</select>";
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



