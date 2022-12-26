<?php
 include 'header.php'; 
 include 'connection.php'; 
 $sql="SELECT * FROM books";
 $result=$db->query($sql);


?>



<div class=container id="content">
  <div class="position-absolute mt-3 mr-5 end-0">
    <a href="addbook.php"><button class="btn btn-primary">ADD NEW BOOK</button></a>
  </div>
  <dib class="m-5">
  <table class="table table-bordered mt-5">
    <thead>
      <tr class="text-center">
          <th>name</th>
          <th>categories</th>
          <th>title</th>
          <th>author</th>
          <th>image</th>
          <th>file</th>
          <th>Published</th>
          <th>action</th>
        </tr>
      </thead>
    <?php while($row = $result->fetch_assoc()):   ?>
    <tbody>
      <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['categories']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['author']; ?></td>
          <td><?php echo $row['image']; ?></td>
          <td><?php echo $row['file']; ?></td>
          <td><?php echo $row['code']; ?></td>
        <th>
          <button class="btn btn-dark">
            <a href="button/books_edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
          </button>
          <button class="btn btn-danger text-dark">
            <a href="button/books_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
          </button>
        </th>
        
      </tr>
    </tbody>
    <?php endwhile;  ?>
  </table>
  </dib>
</div>




<?php include 'footer.php'; ?> 