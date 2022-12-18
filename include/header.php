<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Library</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark fs-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-5 justify-content-between w-100 me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Book</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catagory
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Biography</a></li>
            <li><a class="dropdown-item" href="#">History</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="users.php">Member</a>
        </li>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
        </li>
        </ul>
    </div>
  </div>
</nav>

    </header>
