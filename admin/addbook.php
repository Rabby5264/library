<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>


<div class="container formbold-main-wrapper" id="content">
 <div class="formbold-form-wrapper">
    

    <form action="book_insert.php" method="POST">
      <div class="formbold-form-title">
        <h2 class=""> Add New Book</h2>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="name" class="formbold-form-label">
            NAME
          </label>
          <input
            type="text"
            name="name"
            id="name"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="code" class="formbold-form-label"> Published </label>
          <input
            type="text"
            name="code"
            id="code"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="author" class="formbold-form-label"> AUTHOR </label>
          <input
            type="author"
            name="author"
            id="author"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="categories" class="formbold-form-label"> CATEGORIES </label>
          <input
            type="text"
            name="categories"
            id="categories"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="title" class="formbold-form-label">
          TITLE
        </label>
        <input
          type="text"
          name="title"
          id="title"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="file" class="formbold-form-label"> Upload File </label>
          <input
            type="file"
            name="file"
            id="file"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="image" class="formbold-form-label"> Upload Image </label>
          <input
            type="file"
            name="image"
            id="image"
            class="formbold-form-input"
          />
        </div>
      </div>

      <button type="submit" class="btn btn-success"> SUBMIT </button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>