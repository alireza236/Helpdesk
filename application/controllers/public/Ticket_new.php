<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Ticket_new extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		public function index()
		{
			$this->template->load('templates/admin/template','public/Tickets/ticket_list');
		}


		
	
	}
	
	/* End of file Ticket_new.php */
	/* Location: ./application/controllers/Ticket_new.php */	