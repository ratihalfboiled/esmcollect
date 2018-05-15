<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesm extends CI_Controller {

	public function index()
	{
		$this->load->view('v_dashboard');
	}
	
	public function penjualan(){
		$this->load->view('v_penjualan');
	}
	
	public function sentraumkm(){
		$this->load->view('v_umkm');
	}
}
