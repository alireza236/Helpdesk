<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Headlinenews extends CI_Model {

	var $table = 'news';
	var $id = 'id';


	public function __construct()
	{
		parent::__construct();
		
	}

	function news_data($id){
		return $this->db->where('id', $id)
		                ->limit(1)
		                ->get($this->table)
		                ->row();
	}

	 function update_news($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }


	function addnews($data){
		return $this->db->insert($this->table,$data);
	}

	function get_headline_news(){
	return $this->db->query("SELECT * FROM `news` WHERE UNIX_TIMESTAMP( curdate( ) ) < `expired` ORDER BY `newsdate` ASC")->result();
	
	}

	function getJson() {
          return $this->db->query("SELECT * FROM `news` ORDER BY `newsdate` ASC")->result();        
	}

	function delete_news($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }


}

/* End of file HDnews.php */
/* Location: ./application/models/HDnews.php */