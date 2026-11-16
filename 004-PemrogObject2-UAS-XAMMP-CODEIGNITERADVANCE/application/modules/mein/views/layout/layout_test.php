<!doctype html>
<html>

<title><?php echo isset($title)?"-- $title --":NULL;?></title>
<head>
	<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/layout.css"/>
</head>
<body class="hw-100" style="background-size:100% 100%;background-repeat:no-repeat;">
<div class="base">
	<div style ="width:100%; background-color:blue; padding-bottom:3px;padding-top:3px;">
	<p style="color:white; font-size:50px;">REEEEE, idk..</p>
	</div>

	<div class="col-pd-bu-10">
	<?php $this->load->view($content);?>
	</div>
</div>
</body>
</html>
