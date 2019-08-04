<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

	public $table = 'projects';
	public $order = 'ASC';
	public $id = 'projectid';


	public function __construct()
	{
		parent::__construct();
		
	}

	 function add_project($data){
		$this->db->insert($this->table, $data);
	}

	 function project_data($projectid){
		return $this->db->where('projectid',$projectid)
		         		->limit(1)
		         		->get($this->table)
		         		->row();
	}

	 function update_project($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

	function getJson() {
          return $this->db->order_by($this->id, $this->order)
                          ->get($this->table)
                          ->result();
		}

	function delete_project($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_project(){
		 return $this->db->order_by('projectid', $this->order)
                          ->get($this->table)
                          ->result();   
	}

	function get_project_customer($id){
		
		//return $this->db->query("SELECT * FROM `projects` WHERE `idcustomer`= $id ORDER BY `contractstartdate` DESC LIMIT 1")->row();
	    return $this->db->select('*')
                        ->where('idcustomer',$id)
                        ->order_by('contractstartdate','DESC')
                        ->limit(1)
		                ->get($this->table)
		         	    ->row();

	}	

}

/* End of file Project_model.php */
/* Location: ./application/models/Project_model.php */