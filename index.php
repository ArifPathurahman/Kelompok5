<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">




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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="POST" action="login.php">
  <img class="mb-4" src="konoha.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Daftar Ujian Chunin</h1>
  <label for="inputEmail" class="sr-only">NIM Ujian Chunin</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="NIM Ujian Chunin" name="idnim" required autofocus>
  <label for="inputPassword" class="sr-only">Password Ujian</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password Ujian" name="idpw" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
  <p class="mt-5 mb-3 text-muted">Anda Belum Terdaftar? <a href="from_inputdb.php">Daftar Disini!</a></p>
  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>
  </body>
</html>
