<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Just another day</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
	<style type="text/css">
		#jrs{ font-size: 19px; }
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="panel panel-default">
	    <div class="panel-heading"><div class="text-center">Daftar Tanaman</div></div>
	    <div class="panel-body">
		    <div class="page-header">
			  <p>Input Data Tanaman dengan data yang lengkap dan benar.</p>
			</div>
			<div class="row">
		    <div class="col-lg-4">
			<form class="form-horizontal" action="<?php echo site_url('tanaman/eksekusi_edit'); ?>" method="post" enctype="multipart/form-data">
				<?php foreach($data as $a):?>
				<input type="hidden" name="id_tanaman" value="<?php echo($a->id_tanaman);?>"/>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Nama</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" value="<?php echo $a->nama_tanaman;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Suhu</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="sensor_suhu" name="sensor_suhu" value="<?php echo $a->sensor_suhu;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">PH</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="sensor_ph" name="sensor_ph" value="<?php echo $a->sensor_ph;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Kelembaban</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="sensor_kelembaban" name="sensor_kelembaban" value="<?php echo $a->sensor_kelembaban;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Cahaya</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="sensor_cahaya" name="sensor_cahaya" value="<?php echo $a->sensor_cahaya;?>">
					</div>
				</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
				<?php endforeach; ?> 
			</form>
			</div>

			</div>
						<div class="col-lg-8">
				<table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th class="text-center">No.</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Suhu</th>
						<th class="text-center">PH</th>
						<th class="text-center">Kelembaban</th>
						<th class="text-center">Cahaya</th>
						<th class="text-center" colspan="2">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					  <?php 
						if($c_tanaman>0){
							$no = 0;
							foreach($tanaman as $list){
					  ?>
					  <tr>
						<td class="text-center"><?php echo ++$no;?></td>
						<td class="text-center"><?php echo $list->nama_tanaman;?></td>
						<td class="text-center"><?php echo $list->sensor_suhu;?></td>
						<td class="text-center"><?php echo $list->sensor_ph;?></td>
						<td class="text-center"><?php echo $list->sensor_kelembaban;?></td>
						<td class="text-center"><?php echo $list->sensor_cahaya;?></td>
						<td class="text-center">
							<a class="btn btn-primary btn-xs" href="<?php echo site_url('tanaman/edit_data/'.$list->id_tanaman)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php echo site_url('tanaman/hapus_data/'.$list->id_tanaman)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Hapus
							</a>
						</td>
					  </tr>
					  <?php 
							}
						}else{
					  ?>
					  <tr>
						<td colspan="5"><center>Data Tanaman Kosong</center></td>
					  </tr>
					  <?php 
						}
					  ?>
					</tbody>
				</table>
			</div>
	    </div>
	</div>
  
	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>