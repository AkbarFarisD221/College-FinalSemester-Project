<!doctype html>
<html lang="en">
  <head>
    <title>Zware - Login</title>

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
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="POST" action="<?php echo base_url(); ?>login_cont/login">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  
  <label for="inputEmail" class="sr-only">Email address</label>
  
  <input id="inputEmail" class="form-control" placeholder="Email" type="email" name="email" required autofocus>
  
  <label for="inputPassword" class="sr-only">Password</label>
  
  
  <input id="inputPassword" class="form-control" placeholder="Password" type="password" name="password" required>
  
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>


    
  </body>
</html>
