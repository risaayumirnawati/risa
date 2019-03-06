<?php 
Class pengurus extends CI_controller{

	function __construct(){
		parent:: __construct();
		$this->load->helper(array('url','form'));
		$this->load->model("Model_pengurus");
	}

	function index(){
		$data['judul']="Database dalam CI";
		$data['isi']="CRUD data pengurus";
		$data['data']=$this->Model_pengurus->get();
		$this->load->view("view_pengurus",$data);
	}

	function addpengurus(){
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$alamat=$this->input->post('alamat',true);
		$gaji=$this->input->post('gaji',true);
		$this->Model_pengurus->simpan($id,$nama,$alamat,$gaji);
		redirect('pengurus');
	}

	function edit(){
		$data['judul']="Database dalam CI";
		$data['isi']="Edit data pengurus";
		$id=$this->uri->segment(3);
		$data['data']=$this->Model_pengurus->edit($id);
		$this->load->view("view_edit",$data);
	}

	function edit_submit(){
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$alamat=$this->input->post('alamat',true);
		$gaji=$this->input->post('gaji',true);
		$this->Model_pengurus->update($id,$nama,$alamat,$gaji);
		redirect('pengurus');
	}

	function delete(){
		$id=$this->uri->segment(3);
		$this->Model_pengurus->delete($id);
		redirect('pengurus');
	}
}


?>