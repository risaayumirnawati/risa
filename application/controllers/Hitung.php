<?php 
	class Hitung extends CI_Controller {

		function __construct() {
			parent::__construct();
			//load helper URL dan FORM
			$this->load->helper(array('url','form'));
		}

		function index() {
			$this->load->view('menu_hitung');
		}

		function perkalian(){
			$data['angka1']=(int)$this->input->post('angka1',true);
			$data['angka2']=(int)$this->input->post('angka2',true);
			$data['hasil']=$data['angka1']*$data['angka2'];
			$this->load->view('perkalian',$data);
		}

		function penjumlahan(){
			$data['angka1']=(int)$this->input->post('angka1',true);
			$data['angka2']=(int)$this->input->post('angka2',true);
			$data['hasil']=$data['angka1']*$data['angka2'];
			$this->load->view('penjumlahan',$data);
		}

		function pengurangan(){
			$data['angka1']=(int)$this->input->post('angka1',true);
			$data['angka2']=(int)$this->input->post('angka2',true);
			$data['hasil']=$data['angka1']*$data['angka2'];
			$this->load->view('pengurangan',$data);
		}

		function pembagian(){
			$data['angka1']=(int)$this->input->post('angka1',true);
			$data['angka2']=(int)$this->input->post('angka2',true);
			$data['hasil']=$data['angka1']*$data['angka2'];
			$this->load->view('pembagian',$data);
		}

	}
 ?>