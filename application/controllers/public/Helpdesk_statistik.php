<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helpdesk_statistik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cekUserLogin();
	}

	public function index()
	{
		 $this->template->load('templates/admin/template','public/stats/helpdesk_stats');
	}

}

/* End of file Helpdesk_statistik.php */
/* Location: ./application/controllers/Helpdesk_statistik.php */