<?php

require 'connection.php';
$current=md5($_POST['current']);
$new=md5($_POST['new']);
$email=$_POST['email'];

$checkUser="SELECT * FROM users WHERE email='$email',password='$current'";
$result=mysqli_query($con,$checkUser);

if($result>0){

    $updatePass=mysqli_query($con,"UPDATE users SET password='$new' WHERE email='$email'");

    if($updatePass>0){
        $response['error']="200";
        $response['message']="password update success";

    }
    else{
        $response['error']="400";
        $response['message']="password update fail";
    }

}
else{
    $response['error']="";
    $response['message']="user not exist";
}
echo json_encode($response);

?>