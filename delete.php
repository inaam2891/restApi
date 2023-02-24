<?php

require 'connection.php';
$id=$_POST['id'];

$deleteuser=mysqli_query($con,"DELETE FROM users WHERE id='$id'");

if($deleteuser>0){

    $response['error']="400";
    $response['message'] = "Account deleted succesfully";
}else
{
    $response['error']="200";
    $response['message'] = "Account not deleted";
}
echo json_encode($response);

?>