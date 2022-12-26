<?php include 'header.php'; 
session_start();
if($_SESSION['id']):
?>

<div class="container">
    <div class="col-4">
            <span class="border border-primary">BOOK</span>
    </div>
</div>


<?php include 'footer.php'; 
else:
    header("Location:index.php");
  
  endif;
?>