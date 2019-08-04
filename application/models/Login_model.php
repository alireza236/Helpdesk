<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function cek_superadmin($username, $password){
		$this->db->select('*');
        $this->db->where('user_username', $username);
        $this->db->where('user_password', $password);
        $this->db->where('status', 'aktif');
        $query = $this->db->get('user_admin', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
	}

	
	public function cek_user($username, $password){
		$this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
	}

	public function cek_admin($username, $password){
		$this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 'aktif');
        $query = $this->db->get('users', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
	}


	public function last_login($id){
		$this->db->where('id', $id);
		$this->db->update('users',array("user_token" => md5(time())));
	}	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */