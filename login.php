<?php

require 'connection.php';
$email=$_POST['email'];
$password=md5($_POST['password']);

$checkUser="SELECT * FROM users WHERE email='$email' && password='$password'";
$result=mysqli_query($con,$checkUser);

if(mysqli_num_rows($result)>0){

    $response['error'] = "000";
    $response['message'] = "login success";
}else
{
    $response['error'] = "001";
    $response['message'] = "login fail";
}
echo json_encode($response);
?>