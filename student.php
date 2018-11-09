<?php
/********************* */
/* student.php         */
/********************* */

// 1. Connect Database
  require("connect.php");

// 2. Select SQL
  $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student";

  //echo $sql;

// 3. Execute SQL
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    echo "<table border='1'>";
        echo "<tr>";
          echo "<td>รหัสนิสิต</td>";
          echo "<td>ชื่อนิสิต</td>";
          echo "<td colspan='3'>สาขา</td>";
          //echo "<td></td>";
        echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        
          echo "<form action='updateStudent.php' method='get'>"; 
          echo "<td>";
          echo "<input type='hidden' name='stu_id' value='" . $row["STU_ID"]. "'>";
          echo $row["STU_ID"];
          echo "</td>";
          echo "<td><input type='text' name='stu_name' value='" . $row["STU_NAME"]. "'></td>";
          echo "<td><input type='text' name='dept_id' value='" . $row["DEPT_ID"]. "'></td>";
          echo "<td>";
          echo "<input type='submit' value='Update'>";
          echo "</td>";
          echo "</form>";  
          echo "<form action='delStudent.php' method='get'>";         
          echo "<td>";
          echo "<input type='hidden' name='stu_id' value='" . $row["STU_ID"]. "'>";
          echo "<input type='submit' value='Delete'>";
          echo "</td>";
          echo "</form>";  

        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

  mysqli_close($conn);
?>  