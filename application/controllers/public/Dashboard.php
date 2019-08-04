<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('public/Headlinenews');
		$this->auth->cekUserLogin();
    //$this->auth->cekRules('admin');
	}

	public function index()
	{
		$data['row'] = $this->Headlinenews->get_headline_news();
        $this->template->load('templates/admin/template','public/dashboard/dashboard_user',$data);
	}

	 public function read_news($id){
        $row = $this->Headlinenews->news_data($id);
        if ($row) {
            $data = array(
              'createdby' => $row->createdby,
              'createdon' => $row->createdon,
              'title' => $row->title,
              'detail' => $row->detail,
           );
            $this->template->load('templates/admin/template','public/dashboard/dashboard_user', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/headline_news'));
        }
    }



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */