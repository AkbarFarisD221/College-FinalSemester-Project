      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
		</div>
	<div class="row">
	<div class="col-lg-3 col-6">
		<div class="small-box bg-danger">
		<a href="#" class="small-box-footer">Total Goods Ships</a>
			<div class="inner">
						<b><h3>
				<?php

			echo $this->db->count_all('barangdt_out');
			
			?>
			</h3></b>
			<hr>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-info">
		<a href="#" class="small-box-footer">Total Data Goods</a>
			<div class="inner">
						<b><h3>
			<?php

			echo $this->db->count_all('barangdt');
			
			?>
			</h3></b>
			<hr>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-secondary">
		<a href="#" class="small-box-footer">Total Pengguna</a>
			<div class="inner">
			<b><h3>
				<?php

			echo $this->db->count_all('users');
			
			?>
		</h3></b>
			<hr>
			</div>
		</div>
	</div>
	</div>
	
		

	</div>
		<div class="col-lg-3 col-6">
	</div>
	<div class="col-lg-3 col-6">
	</div>
	
