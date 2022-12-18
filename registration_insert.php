<?php
include 'connection.php';

$firstname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile  = $_POST['mobile'];

$sql = "INSERT INTO users (firstname,lastname,email,password,mobile) VALUES ('$firstname','$lastname','$email','$password','$mobile')" ;

$result = $db->query($sql);

if($result){
    echo "Data insert successful!";
}
else{
    echo "Data doesnt insert";
}

?>