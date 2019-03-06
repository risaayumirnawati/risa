<h1>Penjumlahan</h1>

<?php echo form_open('hitung/penjumlahan'); ?>


<?php echo form_input('angka1',$angka1); ?>
+
<?php echo form_input('angka2',$angka1); ?>


<?php echo form_submit('submit','Hitung'); ?>

<?php echo form_close(); ?>

<hr>

<h3>Hasil <?php echo $hasil; ?></h3>