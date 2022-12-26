<?php 
include 'connection.php';

$id = $_GET['id'];
$sql = "UPDATE FROM books WHERE id = '$id'";
$result = $db->query($sql);
if ($result){
    header('Location:../addbook.php');
}



?>