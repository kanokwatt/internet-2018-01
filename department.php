<?php
/********************* */
/* showDepartment.php  */
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
        echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
          echo "<td>" . $row["DEPT_ID"]. "</td>";
          echo "<td>" . $row["DEPT_NAME"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

  mysqli_close($conn);
?>  