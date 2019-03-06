<?php 

class biodata extends CI_Controller {

	function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['judul']="biodata";
		$data['bio']="Biodataku";
		$data['nama']="risa";
		$data['alamat']="kediri";
		$data['jenis_kelamin']="perempuan";
		$data['sekolah']="SMK TI PN";
		$this->load->view('profil',$data);
	}

}

?>