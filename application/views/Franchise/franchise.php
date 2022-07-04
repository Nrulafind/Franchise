<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.css">

    <title>FriendChise</title>
  </head>
  <body>
     
    <!-- Navbar Start-->

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top ">
      <div class="container">
        <a class="navbar-brand" href="index.html">
            <h4>FriendChise</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link " href="<?php base_url() ?>Welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="<?php base_url() ?>Franchise">Franchise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url() ?>Profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link login" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End-->

    <!-- Carousel Start -->

    <div class="owl-carousel owl-theme">
      <div class="item"><img src="assets/images/Food.png" alt=""></div>
      <div class="item"><img src="assets/images/Food.png" alt=""></div>
  </div>

    <!-- Carousel End -->

    <!-- Footer Start -->

    <div class="container footer">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-3 d-flex align-items-center footer copyright">
          <span class="copyright"> &copy;<script>document.write(new Date().getFullYear())</script> - FriendChise</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex footer sosmed">
          <li class="ms-3"><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
          <li class="ms-3"><a href="#"><i class="fa-brands fa-tiktok fa-lg"></i></svg></a></li>
          <li class="ms-3"><a href="#"><i class="fa-brands fa-twitter fa-lg"></i></a></li>
        </ul>
      </footer>
    </div>

    <!-- Footer End -->

    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>