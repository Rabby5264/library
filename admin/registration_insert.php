<?php
include 'connection.php';

    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $password   = $_POST['password'];
    $country    = $_POST['country'];
    $post       = $_POST['post'];
    $birth      = $_POST['birth'];


$sql = "INSERT INTO admins(firstname,lastname,email,phone,address,password,country,post,birth) VALUES ('$firstname','$lastname','$email','$phone','$address','$password','$country','$post','$birth')" ;

$result = $db->query($sql);

if($result){
    header('Location:registrationsuccess.php');
    
}
else{
    echo "Data doesnt insert";
}

?>