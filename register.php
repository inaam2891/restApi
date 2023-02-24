<?php

require 'connection.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);

$checkUser="SELECT * from users WHERE email='$email'";
$checkQuery=mysqli_query($con,$checkUser);

if(mysqli_num_rows($checkQuery)>0){
    
    $response['error']="002";
    $response['message']="user already exist";
}
else{
    $insertQuery="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    $result=mysqli_query($con,$insertQuery);
    
    if($result)
    {
        $response['error']="001";
        $response['message']="resister successfull";
    }
    else{
        $response['error']="000";
        $response['message']="resister fail";
    }
}

echo json_encode($response);
?>