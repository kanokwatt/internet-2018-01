<?php
/*****************/
// addStudent.php
/*****************/

// 1. Connect Database
require("connect.php"); 

$stu_name = $_REQUEST["stu_name"];
$dept_id   = $_REQUEST["dept_id"];

// 2. Select SQL
$sql = "INSERT INTO student (STU_NAME, DEPT_ID) VALUES ('$stu_name', '$dept_id')";

echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect to showStudent.php
header("Location:showStudent.php");
?>