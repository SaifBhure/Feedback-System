<?php
    session_start();
    include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div class="home">
        <h1>Welcome to the homepage!</h1>
        <p>This page is created to record the feedback given by the students and staff for the development of the college.</p>
        <p>If you are already registered please log in or else create your account.</p>
    
        <a href="signup.php">Click to sign up</a>
        <br>
        <a href="login.php">Click to log in</a>
</div>
</body>
</html>