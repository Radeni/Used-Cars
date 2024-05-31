<?php
declare(strict_types=1);
require_once 'core/init.php';
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>UsedCars</title>
        <link rel="icon" type="image/x-icon" href="./images/icons/car-icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <!-- Include Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Custom CSS -->
  
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <!-- Include Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <style>
    .navbar {
      background-color: #212529;
    }

    .navbar-brand {
      color: #f8f9fa;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #f8f9fa;
    }

    .navbar-nav .nav-link:hover {
      color: #adb5bd;
    }

    .navbar-nav .active {
      font-weight: bold;
    }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Used Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cars.php">Find Cars</a>
        </li>
        <?php
        if(!$user->isLoggedIn()) { 
            echo '<a class="nav-link" href="login.php">Login</a>';
            echo '<a class="nav-link" href="register.php">Register</a>';
        }
        else {
            
            if($user->permissionLevel()==2)
            {
              echo '<a class="nav-link" href="admin_cars.php">Car list</a>';
            } else
            {
              echo '<a class="nav-link" href="addcar.php">Add Car</a>';
              echo '<a class="nav-link" href="cars_user.php">My Cars</a>';
              echo '<a class="nav-link" href="searches.php">Saved Searches</a>';
            }
            echo '<a class="nav-link" href="logout.php">Logout</a>';
            
        }
        
        
        ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>