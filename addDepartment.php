<?php
// 1. Connect Database
  require("connect.php"); 

  $dept_id   = $_REQUEST["dept_id"];
  $dept_name = $_REQUEST["dept_name"];

// 2. Select SQL
  $sql = "INSERT INTO department (DEPT_ID, DEPT_NAME) VALUES ('$dept_id', '$dept_name')";

  echo $sql;

// 3. Execute SQL
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  
  // Redirect to showDepartment.php
  header("Location:showDepartment.php");
?>