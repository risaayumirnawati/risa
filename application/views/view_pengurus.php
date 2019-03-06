<!DOCTYPE html>
<html>
<head>
	<title>pengurus</title>
</head>
<body>
	<?php echo form_open('pengurus/addpengurus'); ?>
	<table border="0">
		<tr>
			<td>ID</td><td><?php echo form_input('id'); ?></td></tr>
			<tr><td>NAMA</td><td><?php echo form_input('nama'); ?></td></tr>
			<tr><td valign="top">ALAMAT</td><td><textarea name="alamat" rows="3" cols="40"></textarea></td></tr>
			<tr><td>GAJI</td><td><?php echo form_input('gaji'); ?></td></tr>
			<tr><td> </td><td><?php echo form_submit('submit','simpan'); ?> <input type="reset" value="Batal"></td></tr>
	</table>
	<?php echo form_close(); ?>
	<hr>
	<table border="1"> 
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>GAJI</th>
			<th>AKSI</th>
		</tr>
		<?php 
		$id=0;
		foreach($data->result_array()as $row){
			$id++;
		?>

		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['gaji']; ?></td>
			<td><!-- <a href="</?php echo site_url('pengurus/edit/'.$row['id']); ?>">EDIT</a> |  -->
				<?php echo anchor('pengurus/edit/'.$row['id'],'Edit') ?>
				<!-- <a href="</?php echo site_url('pengurus/hapus'.$row['id']); ?>" onclick="return confirm('yakin hapus?');">DELETE</a> -->
				<?php echo anchor('pengurus/delete/'.$row['id'],'Hapus') ?>
				</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>