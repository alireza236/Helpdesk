<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket_model extends CI_Model {

	public $table = 'tickets';
	public $id = 'id';
	public $order = 'DESC';
	public $logticket = 'log_tickets';

 
	
	public function __construct()
	{
		parent::__construct();

		 date_default_timezone_set('Asia/Jakarta');
	}

        function get_ticket($data) {
             return $this->db->get($this->table)->result();
    	}

    	function get_last_ticket(){
    		return $this->db->query("SELECT * FROM `tickets` ORDER BY id ASC LIMIT 1")->row();
    	}

      function add_ticket($data){
        $this->db->insert('tickets', $data);
        return $this->db->insert_id();
      }




       function log_ticket($data){
        $this->db->insert('log_tickets', $data);
      }

      function tickets_by_assignee($id){
          return $this->db->where('assignee', $id)
                         ->order_by('ticketnumber',$this->order)
                         ->get($this->table)
                         ->result();
      }

        function tickets_by_resolver($username){
          return $this->db->where('resolvedby', $username)
                         ->order_by('id',$this->order)
                         ->get($this->table)
                         ->result();
      }


        function get_opened_tickets(){

          $this->db->where('ticketstatus <>', 'Closed'); // Produces: WHERE name != 'Joe' AND id < 45
          $this->db->order_by('ticketnumber',$this->order);
          $query = $this->db->get($this->table);
          return $query->result(); 
        }


        function tickets_by_resolver_not_closed($username){
         
           /* $this->db->where('resolvedby', $username);
            $this->db->where('ticketstatus !=', 'Closed'); // Produces: WHERE name != 'Joe' AND id < 45
            $this->db->order_by('ticketnumber',$this->order);
            $query = $this->db->get($this->tickets);
            return $query->result();*/
            $this->db->query("SELECT * FROM tickets WHERE resolvedby = ".$username." AND ticketstatus <> Closed ORDER BY ticketnumber DESC")
            ->result();  
        }

 

        function get_audit_trail($id){
          return $this->db->query("SELECT * FROM `log_tickets` WHERE `id`= '".$id."' ORDER BY `changedate` DESC")->result();
        }

       function getJson() {
              return $this->db->order_by('id', $this->order)
                              ->get($this->table)
                              ->result();      
        }

       function ticket_delete($id) {
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
        }

 

        function update_ticket($id, $data){
            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);
            return $this->db->affected_rows();
        }


        function update_log_ticket($data){
          $this->db->insert($this->logticket, $data);
          return $this->db->insert_id();
        }

 
      public function by_request($user_id){
         return $this->db->where('documentedby', $user_id)
                     ->order_by('ticketnumber',$this->order)
                     ->get($this->table)
                     ->result();
      }


   
        public function ticket_data($id){
          return $this->db->where($this->id,$id)
                          ->limit(1) 
                          ->get($this->table)
                          ->row();
        }

        public function count_tickets_by_status(){
          return $this->db->query("SELECT ticketstatus, count(*) as total FROM `tickets` GROUP BY ticketstatus ASC LIMIT 1")->result();
        }

         public function count_resolved_tickets_by_month(){
          return $this->db->query("SELECT Month(FROM_UNIXTIME(`documenteddate`)) as Bulan, Count(*) as Total FROM `tickets` WHERE (`ticketstatus`='Resolved' OR `ticketstatus`='Closed') AND FROM_UNIXTIME(`documenteddate`) >= CURDATE() - INTERVAL 1 YEAR GROUP BY Month(FROM_UNIXTIME(`documenteddate`))")->result();
        }



  }

/* End of file Ticket_model.php */
/* Location: ./application/models/Ticket_model.php */








 
