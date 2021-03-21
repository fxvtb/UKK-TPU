<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Floating labels example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form method="post" action="cek_login.php" class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Selamat Datang</h1>
    <p>Silahkan login untuk mengakses <code>daftar spp</code> SMK MUDA <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, Firefox, and IE 10/11 (prefixed).</a></p>
  </div>

  <div class="form-label-group">
    <input name="username" type="text" id="inputEmail" class="form-control"  required autofocus>
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group">
    <input name="password" type="password" id="inputPassword" class="form-control"  required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <!--<a href="media.php?module=home" class="btn btn-lg btn-primary btn-block">Sign In</a>-->
  <input name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="LOGIN">
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
</form>
</body>
</html>
