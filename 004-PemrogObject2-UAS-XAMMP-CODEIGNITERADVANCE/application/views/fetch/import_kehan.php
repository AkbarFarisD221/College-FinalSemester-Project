<!DOCTYPE html>
<html>
<head>
<!-- smash my.. Watermelon. No, real watermelon not something kinky. Go to horny jail if you think it was.-->

		<meta charshet="utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/easyui.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/body.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/themes/icon.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/themes/color.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/demo/demo.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/src/jquery.min.js"/></script>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/src/jquery.easyui.min.js"/></script>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/plugin/datagrid-export.js"/></script>
</head>
<body>
		<div class="col-pd-lt-2">
				<a href="kehadiran" style="margin-top:1%;margin-bottom:1%;" class="easyui-linkbutton" iconCls="icon-cancel">RETURN BACK TO DATA</a>
		<br>
		<div class ="col-pd-lr-4" style="width:25%;padding-top:2%;padding-bottom:2%;border:solid 1px grey;">
            <h2>Import</h2>
             <?php echo form_open_multipart($action_2); ?>
			<input type="file" name="kehansis" accept="text/csv">
			<br>
			<br>
			<button type="submit" name="import">Import Data</button>
		<?php echo form_close(); ?>
		</div>
		</div>
	</body>
</html>