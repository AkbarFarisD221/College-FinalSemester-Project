<!DOCTYPE html>
<html>
<head>

	<meta charshet="utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/easyui.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>00resources/css/body.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/themes/icon.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/themes/color.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>00jqueryresources/demo/demo.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/src/jquery.min.js"/></script>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/src/jquery.easyui.min.js"/></script>
	<script type="text/javascript" src="<?php echo base_url();?>00jqueryresources/jqueryScript/plugin/datagrid-export.js"/></script>
    <script src="<?php echo base_url();?>00resources/java/pdfmake/pdfmake.min.js"/></script>
</head>
<body>

 <div class="col-pd-lt-2">
	<table id="dg" title="Kehadiran" class="easyui-datagrid" style="width:90%;height:450px"
			url="00jqueryresources/jqueryScript/main/kehsis/get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="false" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="npm" width="15">NPM</th>
				<th field="fname" width="40">First Name?</th>
				<th field="lname" width="40">Last Name?</th>
				<!--rush B cyka blyat -->
				<th field="hadir" width="10">Kehadiran</th>
				<th field="tugs" width="10">Tugas/Quiz</th>
				<th field="uts" width="10">UTS</th>
				<th field="uas" width="10">UAS</th>
				<th field="botnin" width="10">Bobot Nilai</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New Student</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit Student</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove Student</a>
		<a href="javascript:;" class="easyui-linkbutton" plain="true" onclick="$('#dg').datagrid('print','DataGrid')">Export PDF</a>
		<a href="javascript:;" class="easyui-linkbutton" plain="true" onclick="$('#dg').datagrid('toExcel','dg.xls')">Export Excel</a>
	</div>
	<br/><br/>
	<a href="<?php echo base_url(); ?>import/kehadiran" type="button" class="btn easyui-linkbutton" iconCls="icon-add">IMPORT</a>
	<div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
		<form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
			<h3>User Information</h3>
			<div style="margin-bottom:10px">
			<input name="npm" class="easyui-textbox" required="true" label="NPM :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="fname" class="easyui-textbox" required="true" label="First Name :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="lname" class="easyui-textbox" required="true" label="Last Name :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="hadir" class="easyui-textbox" label="Kehadiran :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="tugs" class="easyui-textbox" required="false" label="Tugas/Quiz :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="uts" class="easyui-textbox" required="false" label="UTS :" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="uas" class="easyui-textbox" required="false" label="UAS:" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="botnin" class="easyui-textbox" required="false" label="Bobot Nilai :" style="width:100%">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
</div>
	<br><br><br>
	<?php
			$test_text = 'DEJA VU IVE BEEN HERE BEFORE';
	
		$rawr = $this->encryption->encrypt($test_text);
		echo $rawr;
		echo '<br>';
		echo $this->encryption->decrypt($rawr);
	?>
	
	<script type="text/javascript">
		//function importcsv()
		//{
			//$('#dlg2').dialog('open').dialog('center').dialog('setTitle','New User');
			//$('#fm').form('clear');
		//} // test
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('center').dialog('setTitle','New Student');
			$('#fm').form('clear');
			url = '00jqueryresources/jqueryScript/main/kehsis/save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Student');
				$('#fm').form('load',row);
				url = '00jqueryresources/jqueryScript/main/kehsis/update_user.php?id='+row.id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to destroy this student?',function(r){
					if (r){
						$.post('00jqueryresources/jqueryScript/main/kehsis/destroy_user.php',{npm:row.npm},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
		

		
	</script>
</body>
</html>