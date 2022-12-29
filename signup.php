<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
        $email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{
			$query = "insert into user (name,email,password) values ('$name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Please enter your details</h1>
        <form >
        <input type="text" name="name" id="name" placeholder="Enter your name " >
        <br>
        <input type="email" name="email" id="email" placeholder="Enter your email-id">
        <br>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br>
        <button class="btn">Sign up</button>
        </form>
  </div>
</body>
</html>
