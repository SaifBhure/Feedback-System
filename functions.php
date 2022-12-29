<?php

function check_login($con)
{
  if(isset($_SESSION['email'])){
    $id = $_SESSION['email'];
    $querry = "select * from user where email = '$id'";
    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($reult)>0)
    {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
    }
  }
     header("Location : login.php");
     die;
}