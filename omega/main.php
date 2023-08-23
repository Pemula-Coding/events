<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Project Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
  <div class="container">
    <a class="navbar-brand" href="#">Main Project</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <!-- Tampilkan informasi pengguna dan tautan login/logout -->
        <?php
          session_start();
          if (isset($_SESSION['user_id'])) {
            echo '<li class="nav-item">';
            echo '<span class="nav-link">Welcome, ' . $_SESSION['username'] . '</span>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="logout.php">Logout</a>';
            echo '</li>';
          } else {
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="login.php">Login</a>';
            echo '</li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<section class="welcome">
  <div class="container text-center">
    <?php
      if (isset($_SESSION['user_id'])) {
        echo '<h1>Welcome, ' . $_SESSION['username'] . '!</h1>';
      } else {
        echo '<h1>Welcome to My Website</h1>';
      }
    ?>
  </div>
</section>

<section class="carousel-section"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./media/img1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./media/img3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./media/img5.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</section>

<footer class="footer">
  <div class="container text-center">
    <p>Contact: your-email@example.com</p>
    <p>&copy; 2023 Your Name. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
