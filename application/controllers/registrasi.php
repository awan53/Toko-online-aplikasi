<?php 

class Registrasi extends CI_Controller 
{
	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Wqjib di isi namanya ']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required'=> 'wajib di isi usernya']);
		$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'password wajib Isi',
						   'matches ' => 'password tidak cocok']);
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('registrasi');
			$this->load->view('template/footer');
		} else {
			$data = array(
				'id'   => '',
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_1'),
				'role_id' => 2,

			);

			$this->db->insert('user', $data);
			redirect('auth/login');
		}
		
	}


}