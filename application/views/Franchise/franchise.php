<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/glider.css'); ?>">

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
						<a class="nav-link" href="<?php base_url() ?>Welcome">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php base_url() ?>Franchise">Franchise</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php base_url(); ?>Profile">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link login" href="<?php base_url() ?>Auth/login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <!-- Navbar End-->

    <!-- Carousel Start -->

    <div class="container px-4 py-5">
      <div class="news-text">
        <h2 class="pb-2 border-bottom title">Food Category</h2>
      </div>
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="px-4 py-5">
          <div class="glider-contain">
            <div class="glider">
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
              <div>your content here</div>
            </div>
          
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer End -->

    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="<?php echo base_url('./assets/js/glider.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>