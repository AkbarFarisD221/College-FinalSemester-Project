<!doctype html>
<!--- SOMEBODY ONCE TOLD ME- -->
<html class="hw-100">
<head>
	<meta charshet="utf-8"/>
	<title><?php echo isset($title)? " - $title - ":NULL;?></title>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/layout.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
		<script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="hw-100 bg-mt" style="background-size:100% 100%;background-repeat:no-repeat; padding:0;">
<div class ="base position-absolute">
<div class="bg-mt">
	<div class="hw-100">
	<div class ="panel-left col-pd-lr-4 position-fixed top-0">
		<div class="position-relative hw-100">
			<!-- show current user -->
			<div style="padding-top:15%;padding-bottom:15%;">
			</div>
			<div class="wel-user show wd-100 pull-left">
			<?php
				$user = $this->session->userdata('user');
				extract($user);
			?>
				<div class ="txt-panel">
				<b>
				<p class="defa-txt"> Welcome back</p>
				<p class="defa-txt"><?php echo $fname; ?> <?php echo $lname; ?></p>
				<p class="defa-txt"><?php echo $email; ?></p>
				</b>
				</div>
			</div>
			<!-- show current user -->
			<div class="mn-l show wd-100 pull-left">
			<hr class="mrg-t-b-5 show">
			<a href="<?php echo base_url(); ?>maincont/home" class="btn btn-1 btn-default"><span class="pull-left glyphicon glyphicon-home pad-lmarg-5"></span><p class="defa-txt txt-l ">Home</p></a>
         	<br/>
   			<a href="<?php echo base_url(); ?>maincont" type="button" class="btn btn-1 btn-default"><span class="pull-left glyphicon glyphicon-triangle-right pad-lmarg-5"></span><p class="defa-txt txt-l ">Data</p></a>
            <br/>
			<a href="<?php echo base_url(); ?>kehadiran" type="button" class="btn btn-1 btn-default"><span class="pull-left glyphicon glyphicon-triangle-right pad-lmarg-5"></span><p class="defa-txt txt-l ">Kehadiran?</p></a>
            <br/>
			</div>
			<!-- placed at botoom my n-word -->
			<div class="bottom-0 show position-absolute wd-100 col-pd-bt-10">
			<hr class="mrg-t-b-0 show">
			<a href="<?php echo base_url(); ?>login_cont/logout" class="btn btn-1 btn-default "><span class="pull-left glyphicon glyphicon-log-out pad-lmarg-5"></span><p class="defa-txt txt-l ">Logout</p></a>
			</div>
			<!-- man fuck you i see you at work -->
		</div>
	</div>
	<div class="base-rad mrg-20-L">
	<div class ="base">  <!-- tis always need to be on right idiot -->
	<?php $this->load->view($content);?> <!-- load other view to here VIA controller -->
	</div>
	</div>
</div>
</div>
</body>
