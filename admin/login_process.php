<?php
include "connection.php";

$email      =$_POST['email'];
$password   =$_POST['password'];

$sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
$result =$db->query($sql);
$data   = $result->fetch_assoc();



if($data){
    session_start();
    $_SESSION['id'] = $data['id'];
}

if(mysqli_num_rows($result)){
    header('Location:deshboard.php');
}
else{
    echo "You are not a Registared member";
}

?>
