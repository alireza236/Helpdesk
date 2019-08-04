<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Customer_model extends CI_Model {
	
		public $table = 'customers';
	    public $id = 'idcustomer';
	    public $order = 'ASC';
	
		public function __construct()
		{
			parent::__construct();
			
		}


		// get total rows
    function total_rows() {
          $this->db->from($this->table);
          return $this->db->count_all_results();
        }

	function getJson() {
          return $this->db->order_by($this->id, $this->order)
                          ->get($this->table)
                          ->result();
		}

	function customer_data($id){
		return $this->db->where('idcustomer', $id)
		                ->limit(1)
		                ->get($this->table)
		                ->row();
	   }

	function customer_add($data) {
		 return $this->db->insert($this->table, $data);
	}

	 function update_customer($id, $data) {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }


	function index_limit($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function customer_delete($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_customer(){
		 return $this->db->order_by('idcustomer', $this->order)
                          ->get($this->table)
                          ->result();   
	}


	  function get_customer_by($term, $column='*') {
	    $this->db->select($column);
	    $this->db->like('no_register',$term);
	    $data = $this->db->from($this->table)->get();
	    return $data->result_array();
	 }
	
}
	
	/* End of file Public_model.php */
	/* Location: ./application/models/Public_model.php */	