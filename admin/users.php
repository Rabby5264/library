<?php
 include 'header.php'; 
 include 'connection.php'; 
 $sql="SELECT * FROM users";
 $result=$db->query($sql);


?>

<div class=container id="content">
  <dib class="m-5">
  <table class="table table-bordered mt-5">
    <thead>
      <tr class="text-center">
        <th>id</th>
        <th>first Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php while($row = $result->fetch_assoc()):   ?>
    <tbody>
      <tr>
        <th><?php echo $row['id'];  ?></th>
        <th><?php echo $row['firstname'];  ?></th>
        <th><?php echo $row['lastname'];  ?></th>
        <th><?php echo $row['email'];  ?></th>
        <th><?php echo $row['password'];  ?></th>
        <th><?php echo $row['mobile'];  ?></th>
        <th>
          <button class="btn btn-dark">
            <a href="user_block.php?id=<?php echo $row['id']; ?>">Block</a>
          </button>
          <button class="btn btn-danger text-dark">
            <a href="user_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
          </button>
        </th>
        
      </tr>
    </tbody>
    <?php endwhile;  ?>
  </table>
  </dib>
</div>




<?php include 'footer.php'; ?>