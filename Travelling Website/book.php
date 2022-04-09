<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/book.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>Booking</title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Travelling Website/home.php"><img src="/Travelling Website/images/logo.png" alt="" style="max-width: 8%;">Wanderer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="packages.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="book.php">Book</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<?php include 'navbar.php';?>

<div class="heading">
  <img src="/Travelling Website/images/header-bg-3.png" alt="">
</div>

<div class="booking">

   <h1 class="heading-title">Book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name</span>
            <input type="text" placeholder="Enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="Enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Phone</span>
            <input type="number" placeholder="Enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>To</span>
            <input type="text" placeholder="Place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>How many</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivals</span>
            <input type="date" name="arrival">
         </div>
         <div class="inputBox">
            <span>Departure</span>
            <input type="date" name="departure">
         </div>
      </div>

      <input type="submit" value="Submit" class="button" name="send">
      
   </form>

</div>


<footer class="bg-dark text-center text-white my-3">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4 mx-auto">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/nitin.sinha.142/" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/nitin_sinha008?t=dq0E5dyvcTsY3uayH_hXMg&s=08" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.co.in/" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/sinha_008/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/nitinsinhaa/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/nitinsinhaa" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="/Travelling Website/home.php">Wanderer</a>
  </div>
  <!-- Copyright -->
</footer>

    
</body>
</html>