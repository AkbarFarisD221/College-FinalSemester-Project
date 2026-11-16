<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - ZWare Storage</title>

    <!-- etc CSS -->
	
	<?php $user = $this->session->userdata('user'); extract($user);?>
	<!--<link rel="stylesheet" type="text/css" href="00resources/css/easyui.css"/>-->
	<link rel="stylesheet" type="text/css" href="00resources/css/body.css"/>
	<link rel="stylesheet" type="text/css" href="00jqueryresources/themes/icon.css"/>
	<link rel="stylesheet" type="text/css" href="00jqueryresources/themes/color.css"/>
	<link href="00resources/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="00resources/css/easyui.css"/>

    <!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/dashboard.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/sticky-footer.css" rel="stylesheet" type="text/css" />
	
	<!-- Resources CSS -->
	<link href="00resources/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="00resources/css/layout.css" rel="stylesheet" type="text/css" />
     
	<!-- Resources JS -->
	<script type="text/javascript" src="00jqueryresources/js/jquery-3.6.0.js"/></script>
	

		

     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	 <script type="text/javascript" src="bootstrap/js/dashboard.js"></script>
	<script>
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		} else {
		  dropdownContent.style.display = "block";
		}
	  });
	} 
	</script>

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
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">ZWare Storage</a>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a a href="<?php echo base_url(); ?>login_cont/logout" class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-lg-2 d-md-block bg-dark menubar ">
      <div class="menubar-sticky pt-3">
	  <ul class="menubar nav flex-column">
	  <li class="nav-item">
		    <p class="nav-link" style="opacity:0.5;">
              <i class="fa fa-user fa-5x col-pd-lr-80"></i>
			  </br>
              Welcome Back
				<br>

			<?php echo $fname;?> , <?php echo $lname;?>
				<br>

			<br> Account Level :
			<?php echo $usr_level;?>
			  </p>
			  <hr class="mrg-t-b-5 show" style="border-top: 1px solid rgba(255,255,255,0.1);">
			
            <a class="nav  nav-link" href="maincont">
              <span class="fa fa-home"></span>
              Dashboard <span class="sr-only"></span>
				</button>
            </a>
          </li>
		  <ul class="nav flex-column">
					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-link-parent">
							<i class=" fa fa-th"></i> Warehouse  <i class="fa fa-angle-down"></i>
						</a>
						<ul class="menubar-child nav flex-column">
							<li class="nav-item">
								<a href="brg_dt_cont" class="nav-link active">
									<i class="fa fa-file"></i>Goods Data
								</a>
							</li>
							<li class="nav-item">
								<a href="brg_dt_out" class="nav-link">
									<i class="fa fa-file"></i>Goods Shipped
								</a>
							</li>
						</ul>
					</li>
					<?php
					if($usr_level == "2" || $usr_level == "3")
					{
					?>
					<li class="nav nav-item">
						<a href="user_pg" class="nav-link"><i class="fa fa-user"></i> Users</a>
					</li>
					<?php } ?>
										<li class="nav nav-item">
						<a href="maincont/about" class="nav-link"><i class="fa fa-envelope"></i> About</a>
					</li>
				</ul>
        
        </ul>
      </div>
    </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

	<?php $this->load->view($content);?> <!-- load other view to here VIA controller -->

    </main>
  	<div class="m-footer">
        <p style="margin-right:15px">Copyright © 2021 </p>
	</div>
  </div>

</div>

  </body>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
      

</html>
