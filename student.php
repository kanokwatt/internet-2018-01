<?php
/********************* */
/* student.php         */
/********************* */

// 1. Connect Database
  require("connect.php");

  $search_type = 0;

  if(isset($_REQUEST["txt_search"]))
    $txt_search  = $_REQUEST["txt_search"];

  if(isset($_REQUEST["search_type"]))
    $search_type = $_REQUEST["search_type"];

// 2. Select SQL
  if($search_type == 1) // Search from STU_ID
    $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student WHERE STU_ID LIKE '%$txt_search%'";

  else if($search_type == 2) // Search from STU_NAME
    $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student WHERE STU_NAME LIKE '%$txt_search%'";  

  else if($search_type == 3) // Search from DEPT_ID
    $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student WHERE DEPT_ID LIKE '%$txt_search%'";  

  else if($search_type == 4){ // Search ALL FIELD
    $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student WHERE ";
    $sql .= "STU_ID LIKE '%$txt_search%' OR ";
    $sql .= "STU_NAME LIKE '%$txt_search%' OR ";
    $sql .= "DEPT_ID LIKE '%$txt_search%' ";
  }
  else
    $sql = "SELECT STU_ID, STU_NAME, DEPT_ID FROM student";

  echo $sql;

// 3. Execute SQL
  $result = mysqli_query($conn, $sql);
  echo "<form action='student.php' method='get'>";
    echo "<input type='text' name='txt_search'>";
    echo "<select name='search_type'>";
      echo "<option value='1'>รหัสนิสิต</option>";
      echo "<option value='2'>ชื่อ</option>";
      echo "<option value='3'>สาขา</option>";
      echo "<option value='4'>ทั้งหมด</option>";
    echo "</select>";
    echo "<input type='submit' value='Search'>";
  echo "</form>";
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