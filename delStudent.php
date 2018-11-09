<?php
/******************/
// delStudent.php
/*****************/

// 1. Connect Database
require("connect.php"); 

$stu_id   = $_REQUEST["stu_id"];

// 2. Select SQL
$sql = "DELETE FROM student WHERE STU_ID=$stu_id ";

echo $sql;
//exit(0);

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect to showStudent.php
header("Location:showStudent.php");

?>