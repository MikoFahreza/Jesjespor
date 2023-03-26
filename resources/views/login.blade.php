
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
     <nav id="navbar" class="navbar">
      <ul>
        <a href="home" class="active"><h3 class="d-flex align-items-center">JESJESPOR</h3></a> 
        {{-- <a href="register" class="active">Register</a>  --}}
      </ul>
      </nav>
  </head>

  <body class="text-center">
    <div class="container">
    <form class="form-signin">
      
        <br><br><br>
        <div class="row justify-content-center">
          <div class="col-xl-4">

            <h3 class="align-items-center">LOGIN JESJESPOR</h1>
              <br>
      <label for="inputEmail" class="sr-only" >Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <br>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <br>
      <a href="register" class="active">Belum Punya Akun? Register</a>
    </form>
    </div> 
    
  </body>
</html>
