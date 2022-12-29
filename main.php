<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome students!!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
        <h1> This platform is managed by KJSIT</h1>
        <p> Please enter your feedback for the academic year 2022-2023:</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name " >
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email-id">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter your feedback"></textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
        </form>
    </div>
    <script src="index.js"> </script>
    <a href="logout.php">Logout</a>
    <?php
    echo "Success";
    ?>
</body>
</html>
