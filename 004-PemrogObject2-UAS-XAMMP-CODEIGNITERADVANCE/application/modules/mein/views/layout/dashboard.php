<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Template · Bootstrap v4.6</title>

    

    <!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/dashboard.css" rel="stylesheet" type="text/css" />
	
	<!-- Resources CSS -->
	<link href="00resources/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="00resources/css/layout.css" rel="stylesheet" type="text/css" />
        
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap/js/bootstrap.bundle.min.js"></script>


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
    
  </head>
 <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">POST A3</a>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarmenu" class="col-md-3 col-lg-2 bg-light sidebar">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
		<li class="nav-item">
            <a class="nav-link" href="#">
              <span class="fa fa-home"></span>
              Welcome Back
			  <?php echo $fname $lname;?>
			  <?php echo $email;?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="fa fa-home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="fa fa-file"></span>
              Data Surat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="fa fa-file"></span>
              Data Daerah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="fa fa-users"></span>
              User
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto inline-block float-left col-lg-10 px-md-4 ">
	<?php $this->load->view($content);?> <!-- load other view to here VIA controller -->
    </main>
  </div>
</div>

  </body>

      

</html>
