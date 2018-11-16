<?php
// connect.php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "company";

// 1. Create connection
$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connect 555!";
?>