<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Headline_news extends Admin_Controller {

  public $timestamp;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('public/Headlinenews');
    $this->load->library('form_validation');    
    $this->auth->cekUserLogin();
    //$this->auth->cekRules('admin');
	}

	  public function index()
    {
        $this->template->load('templates/admin/template','public/headlinenews/headline_list');
    }

    public function getTimestamp(){
      date_default_timezone_set('Asia/Jakarta');
      $this->timestamp = date('d-M-Y H:i:s');
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
            $this->template->load('templates/admin/template','public/headlinenews/headline_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/headline_news'));
        }
    }


    public function create() {
        $data = array(
              'action' => site_url('public/Headline_news/addnews'),
              'id' => set_value('id'),
              'newsdate' => set_value('newsdate'),
              'title' => set_value('title'),
              'detail' => set_value('detail'),
              'expired' => set_value('expired'),
           );
         
         $this->template->load('templates/admin/template','public/headlinenews/headline_add',$data);
    
    }

    public function addnews(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
          $this->getTimestamp();
            $data = array(
                  'newsdate' => strtotime($this->input->post('newsdate',TRUE)),
                  'title' => $this->input->post('title',TRUE),
                  'detail' => $this->input->post('detail',TRUE),
                  'createdby' =>  strtotime($this->input->post('newsdate',TRUE)), //->ini masih temporari
                  'createdon' => $this->timestamp,
                  'expired' => strtotime($this->input->post('expired',TRUE)),
                );

            $this->Headlinenews->addnews($data);
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public'));
        }
    }


    public function edit_news($id){
      $row = $this->Headlinenews->news_data($id);
      if ($row) {
        $data = array(
            'action'=> site_url('public/Headline_news/action_edit_news'),
            'id' => set_value('id',$row->id),
            'newsdate' => set_value('newsdate',date('d-M-Y',$row->newsdate)),
            'title' => set_value('title',$row->title),
            'detail' => set_value('detail',$row->detail),
            'expired' => set_value('expired',date('d-M-Y',$row->expired)),
        );
            $this->template->load('templates/admin/template','public/headlinenews/headline_add',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/Headline_news'));
        }
    }

    public function action_edit_news() {
        $this->form_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit_news($this->input->post('id', TRUE));
        } else {
            $this->getTimestamp();
            $id = $this->input->post('id', TRUE);
            $row = $this->Headlinenews->news_data($id);
    
            $data = array(
              'newsdate' => strtotime($this->input->post('newsdate',TRUE)),
              'title' => $this->input->post('title',TRUE),
              'detail' => $this->input->post('detail',TRUE),
              'createdby' => $this->session->userdata('user_username'), //->ini masih temporari
              'createdon' => $this->timestamp,
              'expired' => strtotime($this->input->post('expired',TRUE)),
               );

            $this->Headlinenews->update_news($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/Headline_news'));
        }
    }

     public function delete_news($id) {
        $row = $this->Headlinenews->news_data($id);

        if ($row) {
            $this->Headlinenews->delete_news($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('public/Headline_news'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/Headline_news'));
        }
    }

    function form_rules() {
        $this->form_validation->set_rules('newsdate', ' ', 'trim|required');
        $this->form_validation->set_rules('title', ' ', 'trim|required');
        $this->form_validation->set_rules('detail', ' ', 'trim|required');
        $this->form_validation->set_rules('expired', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    

	public function getHeadlineNews(){
      $data['row'] = $this->Headlinenews->get_headline_news();
      $this->template->load('templates/admin/template','public/headlinenews/headline_list',$data);
    }

    	public function getJson() {

        $no = 1;
        foreach ($this->Headlinenews->getJson() as $rw) {
                    $data[]= array(
                        $no++,
                        date('d-M-Y',$rw->newsdate),
                        $rw->title,
                        $rw->createdby,
                        $rw->createdon,
                        date('d-M-Y',$rw->expired),
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/Headline_news/edit_news')."/$rw->id><i class=\"icon-wrench3\"></i>Update</a></li><li><a href=".base_url('public/Headline_news/delete_news')."/$rw->id onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-trash\"></i>Hapus</a></li></ul></li></ul>",
                       );

         $row = array(
                     'aaData' => $data
                     );
         //echo  print_r($row);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
     }
  }      
  
}


