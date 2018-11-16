<?php
//*********************************
// checkLogin.php
//*********************************
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// 1. Connect Database
require("connect.php");

// 2. Select SQL
$sql = "SELECT member_id, member_name, user_name, password FROM member ";
$sql .= " WHERE user_name ='$username' AND password = '$password'";

echo $sql;
//exit(0);

// 3. Execute 
$result = mysqli_query($conn, $sql);

// Found Username and Password
if (mysqli_num_rows($result) > 0) {

    $_SESSION['OK'] = $username;

    header("Location: showStudent.php");

} else {
    header("Location: login.php");
}
    

?>