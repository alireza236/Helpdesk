<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emails_model extends CI_Model {

	public $table = 'log_email';
	public $id = 'id';

	public function __construct()
	{
		parent::__construct();
		
	}

	function add_email($data){
		$this->db->insert($this->table,$data);
		 
	}

	function add_sla_remainder($data){
	  $this->db->insert($this->table,$data);	
	}

}

/* End of file Emails_model.php */
/* Location: ./application/models/Emails_model.php */