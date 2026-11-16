		<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	</head>
		<div class="col-pd-lr-20 col-pd-bu-10">
		<div class="bg-primary" style="padding-top:1%;padding-bottom:1%;border-radius:10px;">
		<center><h2><?php echo isset($name)? " - $name - ":NULL;?> - Ubah</h2></center>
		</div>
		<?php $this->load->view($tab);?> <!-- load other view to here VIA controller -->
		</div>
</html>