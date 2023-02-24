<?php

require 'connection.php';
$id=$_REQUEST['id'];
$username=$_POST['username'];
$email=$_POST['email'];

$update_query="UPDATE users SET username='$username', email='$email' WHERE id='$id' ";
$result=mysqli_query($con,$update_query);

if($result>0){

    $response['error']="400";
    $response['message']="update success";
}else{
    
    $response['error']="200";
    $response['message']="update fail";
}
echo json_encode($response);

?>