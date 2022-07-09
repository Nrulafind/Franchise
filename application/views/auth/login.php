<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('./assets/css/access.css'); ?>">

  <title>FriendChise</title>
</head>

<body class="text-center">

  <!-- Login Start -->

  <main class="form-signin">
    <form action="<?php echo site_url('Auth/login_user') ?>" method="post">
      <img class="mb-4" src="<?php echo base_url('./assets/images/Logo-xl.png'); ?>" alt="" width="250" height="145">
      <br><br><br><br>


      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <a href="<?php base_url(); ?>Homepage/homepage"><button class="w-100 btn btn-lg button" type="submit">Sign in</button></a>
      <br><br>
      <p>Don't have an account ? <a href="<?php echo site_url('Auth/register_user'); ?>" class="sgp">Sign Up</a></p>


      <p class="mt-5 mb-3 text-muted">&copy; 2022 - FriendChise</p>
    </form>
  </main>

  <!-- Login End -->

  <!-- Footer End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>