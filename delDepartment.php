<?php
/********************/
// delDepartment.php
/********************/

// 1. Connect Database
  require("connect.php"); 

  $dept_id   = $_REQUEST["dept_id"];
  
// 2. Select SQL
  $sql = "DELETE FROM department WHERE DEPT_ID='$dept_id' ";

  echo $sql;

// 3. Execute SQL
  if (mysqli_query($conn, $sql)) {
      echo "Delete successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  
  // Redirect to showDepartment.php
  header("Location:showDepartment.php");
?>