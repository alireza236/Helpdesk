<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $table = 'users';
	public $id = 'id';

	public function __construct()
	{
		parent::__construct();
		
	}

	function user_data($id){
		/*return $this->db->where($this->id, $id)
		                ->get($this->table)
		                ->row();*/

            $this->db->select('*');
		    $this->db->from($this->table);
		    $this->db->where($this->id, $id);
		    $query = $this->db->get();
		    if ($query!=null) {
		      return $query->row();
		    } else {
		      return false;
		    }	
	}

	function get_user(){
		return $this->db->order_by('time','DESC')
                          ->get($this->table)
                          ->result();  
	}

	function getJson(){
		return $this->db->order_by('time','DESC')
                          ->get($this->table)
                          ->result();  
	}

	function get_user_by_level($level){
		return $this->db->where('level',$level)
		                ->limit(1)
		                ->get($this->table)
		                ->row();
	}

	function register_user($username,$password,$level,$fullname,$status,$email,$Telp,$email_code){
        $data = array(
        	  'username' => $username,
        	  'password' => $password,
        	  'level' => $level,
        	  'fullname' => $fullname,
        	  'status' => $status,
        	  'email' => $email,
        	  'Telp' => $Telp,
        	  'email_code' => $email_code,
        	  'time' => time(),
        	  'ip' => $_SERVER['REMOTE_ADDR'],
        	);
		
		$this->db->set($data);	
		$this->db->insert($this->table);

		 if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
	    }	
	}

	function update_user($id,$data){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
	    }	
	}


	function update_akses_user($user_id){
		//$id_user    = $this->input->post('id');
        $sql1 = "UPDATE users SET users.status = 'aktif' WHERE users.id = '".$user_id."'";
        $sql2 = "UPDATE users SET users.status = 'blokir' WHERE users.id != '".$user_id."'";

        // lakukan update dengan metode transaksi
        // memastikan 2 operasi berjalan semua
        $this->db->trans_start();
        $this->db->query($sql1);
        $this->db->query($sql2);
        $this->db->trans_complete();

        if ($this->db->trans_status() === TRUE){
            return TRUE;
        }else{
            return FALSE;
	    }
     }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */