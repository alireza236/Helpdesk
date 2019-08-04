<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Knowledgebase_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tickets');
			$this->db->like('nama',$keyword);
			return $this->db->get()->result();
		}


		 

    public function getknowledge($aktif) {
			 $this->db->select('*');
			 $this->db->from('tickets');
			 $this->db->join('customers','customers.idcustomer=tickets.idcustomer');
			 $this->db->join('sla','sla.slaid=tickets.sla');
			 $this->db->like('problemsummary',$aktif);
			 $query = $this->db->get();
			 return $query->result();
		}			


	public function getJson() {
          return $this->db->query("SELECT `problemsummary` FROM `tickets` ORDER BY `id` ASC")->result();        
	      


 			// $this->db->select('*');
 			// $this->db->from('tickets');
 			// $this->db->join('customers','customers.idcustomer=tickets.idcustomer');
 			// $this->db->join('sla','sla.slaid=tickets.sla');
 			// $query = $this->db->get();
 			// return $query->result();
	 
 			 
	}

}

/* End of file Knowledgebase_model.php */
/* Location: ./application/models/Knowledgebase_model.php */