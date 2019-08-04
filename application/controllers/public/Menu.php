<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('public/Menu_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        /*
        $this->general->cekRules('super_admin');
        */
	}

	public function index()
	{
		$this->template->load('templates/admin/template','public/menu/menu_list');
	}

	public function create(){
        $data = array(
              'action' => site_url('public/menu/add_menu'),
              'posisi' => set_value('posisi'),
              'nama_menu' => set_value('nama_menu'),
              'icon' => set_value('icon'),
              'link' => set_value('link'),
              'parent' => set_value('parent'),
              'rules' => set_value('rules'),
              'aktif' => set_value('aktif'),
           );
         
         $this->template->load('templates/admin/template','public/menu/menu_form',$data);
    
	}

	public function add_customer(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                  'posisi' => $this->input->post('posisi',TRUE),
                  'nama_menu' => $this->input->post('nama_menu',TRUE),
                  'icon' => $this->input->post('icon',TRUE),
                  'link' => $this->input->post('link',TRUE),
                  'parent' => $this->input->post('parent',TRUE),
                  'rules' => $this->input->post('rules',TRUE),
                  'aktif' => $this->input->post('aktif',TRUE),
                );

            $this->menu_model->insert($data);
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public/menu'));
        }
    }

	public function getJson() {

        $no = 1;
        foreach ($this->Menu_model->get_json() as $rw) {
                    $data[]= array(
                        $no++,
                        $rw->posisi,
                        $rw->nama_menu,
                        $rw->icon,
                        $rw->link,
                        $rw->parent,
                        $rw->rules,
                        $rw->aktif,
                        "<a href='".base_url('public/menu/read')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('public/menu/update')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('public/menu/delete')."/$rw->id' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
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

     function form_rules() {
        $this->form_validation->set_rules('posisi', ' ', 'trim|required');
        $this->form_validation->set_rules('nama_menu', ' ', 'trim|required');
        $this->form_validation->set_rules('icon', ' ', 'trim|required');
        $this->form_validation->set_rules('link', ' ', 'trim|required');
        $this->form_validation->set_rules('parent', ' ', 'trim|required');
        $this->form_validation->set_rules('rules', ' ', 'trim|required');
        $this->form_validation->set_rules('aktif', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */