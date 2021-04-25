<?php
/**
 * 
 */ 
class Model_katagori extends CI_model{
	
	public function data_bahanKue(){
		return $this->db->get_where("barang",array('katagori' => 'Bahan-bahan Kue'));
	}

	public function data_plastik(){
		return $this->db->get_where("barang",array('katagori' => 'plastik'));	
	}

	public function data_kerupuk(){
		return $this->db->get_where("barang",array('katagori' => 'kerupuk'));	
	}

	public function data_bumbu(){
		return $this->db->get_where("barang", array('katagori' => 'Bumbu-bumbu Masak'));
	}
}