<?php  
Class Model_pengurus extends CI_Model {

	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function get(){
		$data=$this->db->query("SELECT * FROM pengurus");
		return $data;
	}

	function simpan($id,$nama,$alamat,$gaji){
		$query="INSERT INTO pengurus VALUES ('$id','$nama','$alamat','$gaji')";
		$this->db->query($query);
	}

	function edit($id){
		$data=$this->db->query("SELECT * FROM pengurus WHERE id=$id");
		return $data;
	}

	function update($id,$nama,$alamat,$gaji){
		$query="UPDATE pengurus SET nama='$nama', alamat='$alamat', gaji='$gaji' WHERE id='$id'";
		$this->db->query($query);
	}

	function delete($id){
		$data=$this->db->query("DELETE FROM pengurus WHERE id=$id");
		return $data;
	}

}


?>