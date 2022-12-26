<?php
 include 'header.php'; 
 include 'connection.php'; 
 $sql="SELECT * FROM admins";
 $result=$db->query($sql);


?>



<div class=container id="content">
  <div class="position-absolute mt-3 mr-5 end-0">
    <a href="registration.php"><button class="btn btn-primary">ADD NEW ADMIN</button></a>
  </div>
  <dib class="m-5">
  <table class="table table-bordered mt-5">
    <thead>
      <tr class="text-center">
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Country</th>
        </tr>
      </thead>
    <?php while($row = $result->fetch_assoc()):   ?>
    <tbody>
      <tr>
          <td><?php echo $row['firstname']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['country']; ?></td>
      </tr>
    </tbody>
    <?php endwhile;  ?>
  </table>
  </dib>
</div>




<?php include 'footer.php'; ?> 