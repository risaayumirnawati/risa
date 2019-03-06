<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>js/materialize.js">
	<meta charset="UTF-8">
	<title>view edit</title>
</head>
<body>
	<div class="container">
	<h4><?php echo $isi; ?></h4>
	<?php echo form_open('admin/edit_submit'); ?>
	<?php foreach($data->result_array() as $row) { ?>
	<div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s6" readonly="yes">
			          <?php echo form_input('id', $row['id'], 'readonly'); ?>
			        
			        </div>
			        <div class="input-field col s12">
			        <?php echo form_input('username',$row['username']); ?>
			      
			        </div>

			        <div class="input-field col s12">
			          <?php echo form_input('password',$row['password']); ?>
			     
			        </div>
			      </div>
		<div align="right" class="waves-effect waves-light btn light-blue accent-3"><?php echo form_submit('submit','Ubah'); ?></div>
		<input class="waves-effect waves-light btn grey lighten-1" style="color: black;" type="button" value="Batal" onclick="self.history.back()">
	<?php } ?>
	<?php echo form_close(); ?>
	</div>
</body>
</html>