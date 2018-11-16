<?php
//*********************************
// login.php
//*********************************

session_start();
session_destroy();
?>
<html>
    <head>
        <title>Login.php</title>
    </head>
    <body>
    
    <form action="checkLogin.php" method='get'>
        Username: <input type='text' name='username'><br>
        Password: <input type='password' name='password'><br>
        <input type='submit' value='Login'>
    </form>

    </body>
</html>