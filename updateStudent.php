<?php
/***********************/
// updateStudent.php
/***********************/

// 1. Connect Database
require("connect.php"); 

$stu_id     = $_REQUEST["stu_id"]; 
$stu_name   = $_REQUEST["stu_name"];
$dept_id    = $_REQUEST["dept_id"];

// 2. Select SQL
// UPDATE student SET STU_NAME='CAT', DEPT_ID='IT' WHERE STU_ID = 5
$sql = "UPDATE student SET STU_NAME='$stu_name', DEPT_ID='$dept_id' WHERE STU_ID = $stu_id";

echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect to showStudent.php
header("Location:showStudent.php");

?>