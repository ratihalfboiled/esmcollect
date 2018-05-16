<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EsmModel extends CI_Model {
	parent::__construct();
	
	public function readukm(){
		$dataukm = $this->db->query('select ukm_id, nama_ukm, alamat, kontak from umkm');
		return $dataukm->result_array();
	}
	
}