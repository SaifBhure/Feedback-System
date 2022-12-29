<?php
$conn = mysqli_connect("localhost","root","","student");
if(!$conn){
    die("Connection  failed". mysqli_connect_error());
}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO info (name, age, gender, email, phone, other) VALUES ('$name','$age','$gender','$email','$phone','$other')"; 

$result = mysqli_query($conn,$sql);
if(!$result){
    echo "Query issue".mysqli_error($conn);
}
else{
    echo "<script>
    alert('Successfully registered');
    window.location.replace('main.php');
    
    </script>";
}

?>
