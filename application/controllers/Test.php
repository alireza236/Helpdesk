<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('public/hdnews');
		$this->template->load('templates/admin/template','public/user/user_add');
	}

    

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */

