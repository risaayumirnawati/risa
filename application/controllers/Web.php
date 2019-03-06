<?php 

class Web extends CI_Controller {

	function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['judul']="Parsing Data Ke View";
		$data['isi']="Ini adalah data dari controller";
		$data['nama']="risa";
		$this->load->view('hello',$data);
	}

}

?>