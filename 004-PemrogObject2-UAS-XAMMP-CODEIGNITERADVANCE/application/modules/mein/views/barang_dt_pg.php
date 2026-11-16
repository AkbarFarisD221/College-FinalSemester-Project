<!DOCTYPE html>
<html>
<head>

	<meta charshet="utf-8"/>
	
	<!--<link rel="stylesheet" type="text/css" href="00resources/css/easyui.css"/>-->



    <!-- Bootstrap core CSS -->


	<link href="00resources/css/font-awesome.css" rel="stylesheet" type="text/css" />
	
	<!-- Resources CSS -->
	
     
	<!-- Resources JS -->

	<script type="text/javascript" src="00jqueryresources/js/jquery.easyui.min.js"/></script>
	<script type="text/javascript" src="00jqueryresources/plugin/datagrid-export.js"/></script>
    <script src="00resources/js/pdfmake/pdfmake.min.js"/></script>
	

</head>
<body>

 <div class="col-pd-lt-2">
 	<div  style="padding-top:20px;padding-bottom:20px;">
		<a href="javascript:void(0)" class="easyui-linkbutton" plain="false" onclick="newUser()">New Data</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" plain="false" onclick="editUser()">Edit Data</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" plain="false" onclick="destroyUser()">Remove Data</a>
		<a href="javascript:;" class="easyui-linkbutton" plain="false" onclick="$('#dg').datagrid('print','DataGrid')">Export PDF</a>
		<a href="javascript:;" class="easyui-linkbutton" plain="false" onclick="$('#dg').datagrid('toExcel','dg.xls')">Export Excel</a>
	</div>
	<table id="dg" class="easyui-datagrid" style="width:700px;height:400px;"
			url="00jqueryresources/php/obj/get_dat.php"
			rownumbers="false" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="id_barang" width="10">ID</th>
				<th field="nama_barang" width="30">Name</th>
				<th field="id_lokasi" width="40">Location ID</th>
			</tr>
		</thead>
	</table>

	<br/><br/>
	<div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
		<form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
			<h3>User Information</h3>
			<div style="margin-bottom:10px">
			<input name="id_barang" class="easyui-textbox" required="true" label="ID" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				<input name="nama_barang" class="easyui-textbox" required="true" label="Name" style="width:100%">
			</div>
			<div style="margin-bottom:10px">
				 <input class="easyui-combobox"
				 name="id_lokasi"
				 data-options="
					   url:'00jqueryresources/php/obj/get_sekt.php',
					   loader: cloader,
					   valueField:'id_lokasi',
					   textField:'id_lokasi',
					   panelHeight:'auto'"
					   label="ID Lokasi:"
					   required="true"
						style="width:100%"
				 >
			</div>
		</form>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
</div>
	<br><br><br>
	
	<script type="text/javascript">
		//function importcsv()
		//{
			//$('#dlg2').dialog('open').dialog('center').dialog('setTitle','New User');
			//$('#fm').form('clear');
	
		var url;
		var cloader = function(param, success, error){
	var opts = $(this).combobox('options');
	if (!opts.url) return false;
	$.ajax({
		type: opts.method,
		url: opts.url,
		data: param,
		dataType: 'json',
		success: function(data){
			if (data.rows){
				success(data.rows);  // used the data.rows array to fill combobox list
			} else {
				success(data);
			}
		},
		error: function(){
			error.apply(this, arguments);
		}
	});
}
		function newUser(){
			$('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = '00jqueryresources/php/obj/save_dat.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = '00jqueryresources/php/obj/update_dat.php?id_barang='+row.id_barang;
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
				$.messager.confirm('Confirm','Are you sure you want to destroy this data?',function(r){
					if (r){
						$.post('00jqueryresources/php/obj/destroy_dat.php',{id_barang:row.id_barang},function(result){
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