<?php 
Class admin extends CI_controller{

	function __construct(){
		parent:: __construct();
		$this->load->helper(array('url','form'));
		$this->load->model("Model_admin");
	}

	function index(){
		$data['judul']="Database dalam CI";
		$data['isi']="CRUD data pengurus";
		$data['data']=$this->Model_admin->get();
		$this->load->view("view_admin",$data);
	}

	function addadmin(){
		$id=$this->input->post('id',true);
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$this->Model_admin->simpan($id,$username,$password);
		redirect('admin');
	}

	function edit(){
		$data['judul']="Database dalam CI";
		$data['isi']="EDIT DATA ADMIN";
		$id=$this->uri->segment(3);
		$data['data']=$this->Model_admin->edit($id);
		$this->load->view("view_edit_admin",$data);
	}

	function edit_submit(){
		$id=$this->input->post('id',true);
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$this->Model_admin->update($id,$username,$password);
		redirect('admin');
	}

	function delete(){
		$id=$this->uri->segment(3);
		$this->Model_admin->delete($id);
		redirect('admin');
	}
}


?>