<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Root extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cekUserLogin();
	}

	public function index()
	{
		 $this->template->load('templates/admin/v_root','public/root');
	}

}

/* End of file Root.php */
/* Location: ./application/controllers/Root.php */