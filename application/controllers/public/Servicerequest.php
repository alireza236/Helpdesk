<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicerequest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cekUserLogin();
	}

	public function index()
	{
        $this->template->load('templates/admin/template','public/service_req/service_req');
	}

	public function createrequest()
	{
        $this->template->load('templates/admin/template','public/service_req/add_service_req');
	}


	

}

/* End of file Servicerequest.php */
/* Location: ./application/controllers/Servicerequest.php */