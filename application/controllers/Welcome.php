<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','user');
	}

	public function index(){

		if ($this->session->set_userdata('user_is_login')) {
			redirect(site_url('public/dashboard'),'refresh');
		}else{
			if ($this->input->post()) {

			    $username = $this->input->post('username');
				$password = $this->input->post('password');
				$is_login = $this->user->cek_user($username,$password);

				if (!empty($is_login)) {
                    $data_session  = array(
                    	'user_is_login' => TRUE, 
                    	'user_id' => $is_login['id'], 
                    	'user_username' => $is_login['username'], 
                    	'user_level' => $is_login['level'], 
                    	'user_fullname' => $is_login['fullname'], 
                    	'user_rules' =>  "user", 
                    	);

				    $this->session->set_userdata($data_session);
				    $this->user->last_login($this->session->userdata('user_id'));
					$this->session->set_flashdata('message_text', 'Selamat Datang Kembali '.$this->session->userdata('user_username'));
					redirect(site_url('public'));
				  
				  }else{
					
					    $username = $this->input->post('username');
						$password = $this->input->post('password');
						$is_login = $this->user->cek_superadmin($username,$password);
						
						if (!empty($is_login)) {
							$data_session  = array(
                    	       'user_is_login' => TRUE, 
                    	       'user_id' => $is_login['id'], 
                    	       'user_username' => $is_login['user_username'], 
                    	       'user_level' => $is_login['level'], 
                    	       'user_fullname' => $is_login['user_fullname'], 
                    	       'user_rules' =>  "root",
                    	    );

					        $this->session->set_userdata($data_session);
					        $this->user->last_login($this->session->userdata('user_id'));
							$this->session->set_flashdata('message_text', 'Selamat Datang Kembali '.$this->session->userdata('user_username'));
							redirect(site_url('super_admin'),'refresh');
						}else{
							$username = $this->input->post('username');
							$password =  $this->input->post('password');
							$is_login = $this->user->cek_admin($username,$password);

							if (!empty($is_login)) {
								  $data_session  = array(
                    	             'user_is_login' => TRUE, 
                    	             'user_id' => $is_login['id'], 
                    	             'user_username' => $is_login['username'], 
                    	             'user_level' => $is_login['level'], 
                    	             'user_fullname' => $is_login['fullname'], 
                    	             'user_rules' =>  "admin",
                    	           );
								
						        $this->session->set_userdata($data_session);
						        $this->user->last_login($this->session->userdata('user_id'));
								$this->session->set_flashdata('message_text', 'Selamat Datang Kembali '.$this->session->userdata('user_username'));
								redirect(site_url('public'));
							}else{
	        				 $this->session->set_flashdata('message_text','Username dan Password Yang Anda Masukan Tidak Sesuai!');
						}
					} ///END CHECK RULESS..
				}
			}

			$this->load->view('welcome_message');
		}
	}

	public function logout() {
        $this->session->sess_destroy();
        redirect('welcome');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */