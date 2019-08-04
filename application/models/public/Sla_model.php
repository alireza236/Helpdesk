<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sla_model extends CI_Model {

	public $table = "sla";
	public $order = "ASC";
	public $id = "slaid";


	public function __construct()
	{
		parent::__construct();
		
	}

	 function sla_data($slaid){
		/*return $this->db->where('slaid',$slaid)
		                ->get($this->table)
		                ->row();*/

		$this->db->from($this->table);
        $this->db->where('slaid',$slaid);
        $query = $this->db->get();
        return $query->row();
	}

	function getJson(){
		 return $this->db->order_by('slaid', $this->order)
                          ->get($this->table)
                          ->result();   
	}

	function get_sla(){
		 return $this->db->order_by('slaid', $this->order)
                          ->get($this->table)
                          ->result();   
	}

	function update_sla($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

	function sla_id_exist($slaid){
		 $query = $this->db->query("SELECT COUNT(`slaid`) FROM `sla` WHERE `slaid`= '".$slaid."'");
		 if ($query->row()) {
		 	return TRUE;
		 } else {
		 	return FALSE;
		 }
	}

	function sla_nama_exist($namasla){
		 $query = $this->db->query("SELECT COUNT(`slaid`) FROM `sla` WHERE `namasla`= '".$namasla."'");
		 if ($query->row()) {
		 	return TRUE;
		 } else {
		 	return FALSE;
		 }
	}

	function addsla($data){
		$this->db->insert($this->table, $data);
	}

}

/* End of file Sla_model.php */
/* Location: ./application/models/Sla_model.php */