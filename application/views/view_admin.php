<!DOCTYPE html>
<html>
<head>
	<title>pengurus</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>js/materialize.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
	<?php echo form_open('admin/addadmin'); ?>
	<div class="container">
		<h4>TAMBAH ADMIN</h4>
			<div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s6">
			          <?php echo form_input('id'); ?>
			          <label for="last_name">ID</label>
			        </div>
			        <div class="input-field col s12">
			          <?php echo form_input('username'); ?>
			          <label for="password">Username</label>
			        </div>
			        <div class="input-field col s12">
			          <?php echo form_input('password'); ?>
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div align="right"><a class="waves-effect waves-light btn light-blue accent-3"><?php echo form_submit('submit','simpan'); ?></a> <input class="waves-effect waves-light btn grey lighten-1" style="color: black;" type="reset" value="Batal"></div>
	<br>
	<?php echo form_close(); ?>
	
	<br>
	
	<table border="1"> 
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>AKSI</th>
		</tr>
		<?php 
		$id=0;
		foreach($data->result_array()as $row){
			$id++;
		?>

		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><!-- <a href="</?php echo site_url('pengurus/edit/'.$row['id']); ?>">EDIT</a> |  -->
				<?php echo anchor('admin/edit/'.$row['id'],'Edit') ?>
				<!-- <a href="</?php echo site_url('pengurus/hapus'.$row['id']); ?>" onclick="return confirm('yakin hapus?');">DELETE</a> -->
				<?php echo anchor('admin/delete/'.$row['id'],'Hapus') ?>
				</td>
		</tr>
		<?php } ?>
	</table>
	</div>

</body>
</html>