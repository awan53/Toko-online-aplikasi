<?php
/**
 * 
 */
class Katagori extends CI_Controller
{
	
	public function bahanKue()
	{
		$data['bahanKue'] = $this->model_katagori->data_bahanKue()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('bahanKue', $data);
		$this->load->view('template/footer');
	}

	public function plastik()
	{
		$data['plastik'] = $this->model_katagori->data_plastik()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('plastik', $data);
		$this->load->view('template/footer');
	}

	public function kerupuk()
	{
		$data['kerupuk'] = $this->model_katagori->data_kerupuk()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kerupuk', $data);
		$this->load->view('template/footer');
	}

	public function bumbu()
	{
		$data['bumbu'] = $this->model_katagori->data_bumbu()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('bumbu', $data);
		$this->load->view('template/footer');
	}
}