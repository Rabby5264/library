<?php
include 'connection.php';

    $name        = $_POST['name'];
    $categories  = $_POST['categories'];
    $title       = $_POST['title'];
    $author      = $_POST['author'];
    $image       = $_POST['image'];
    $file        = $_POST['file'];
    $code        = $_POST['code'];

$sql = "INSERT INTO books(xfname,categories,title,author,image,file,code) VALUES ('$name','$categories','$title','$author','$image','$file','$code')" ;


$result = $db->query($sql);

if($result){
    header('Location:bookinserted.php');
    
}
else{
    echo "Data doesnt insert";
}

?>