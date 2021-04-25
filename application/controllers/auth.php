<?php 

/**
 * 
 */
class Auth extends CI_Controller
{
	
	public function login()
	{
		$this->form_validation->set_rules('username','Username', 'required', ['required' => 'Username Wajib di isi']);
		$this->form_validation->set_rules('password','Password', 'required', ['required' => 'Password Wajib di isi']);
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('template/header');
			$this->load->view('form_login');
			$this->load->view('template/footer');
			# code...
		}else{
			$auth = $this->model_auth->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username atau Password Anda salah
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('auth/login');
				# code...
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1 : redirect('admin/dashboard');
						# code...
						break;
					case 2 : redirect('welcome');
						# code...
						break;
					
					default:
						# code...
						break;
				}

			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}