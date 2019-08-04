<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public $table = 'menu';
    public $id = 'id';
    public $order = 'DESC';

	public function __construct()
	{
		parent::__construct();
		
	}

	 // get all
    function get_json()
    {
        return $this->db->order_by($this->id, $this->order)->get($this->table)->result();
        
    }

     // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */