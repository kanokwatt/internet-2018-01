<?php
/********************* */
/* department.php  */
/********************* */

// 1. Connect Database
  require("connect.php");

// 2. Select SQL
  $sql = "SELECT DEPT_ID, DEPT_NAME FROM department";

  //echo $sql;

// 3. Execute SQL
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    echo "<table border='1'>";
        echo "<tr>";
          echo "<td>รหัสสาขา</td>";
          echo "<td>ชื่อสาขา</td>";
          echo "<td></td>";
          echo "<td></td>";
        echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        
          echo "<form action='updateDepartment.php' method='get'>"; 
          echo "<td>";
          echo "<input type='hidden' name='dept_id' value='" . $row["DEPT_ID"]. "'>";
          echo $row["DEPT_ID"];
          echo "</td>";
          echo "<td><input type='text' name='dept_name' value='" . $row["DEPT_NAME"]. "'></td>";
          echo "<td>";
          echo "<input type='submit' value='Update'>";
          echo "</td>";
          echo "</form>";  
          echo "<form action='delDepartment.php' method='get'>";         
          echo "<td>";
          echo "<input type='hidden' name='dept_id' value='" . $row["DEPT_ID"]. "'>";
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