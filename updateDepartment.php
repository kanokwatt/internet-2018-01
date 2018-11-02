<?php
/************************/
// updateDepartment.php"
/************************/
// 1. Connect Database
  require("connect.php"); 

  $dept_id   = $_REQUEST["dept_id"];
  $dept_name = $_REQUEST["dept_name"];

// 2. Select SQL
  //UPDATE `department` SET `DEPT_NAME` = 'COMPUTER SCIENCE1' WHERE `department`.`DEPT_ID` = 'CS';
  $sql = "UPDATE department SET DEPT_NAME ='$dept_name' WHERE DEPT_ID = '$dept_id' ";

  echo $sql;

// 3. Execute SQL
  if (mysqli_query($conn, $sql)) {
      echo "Update record successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  
  // Redirect to showDepartment.php
  header("Location:showDepartment.php");
?>