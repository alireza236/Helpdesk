<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('public/project_model');
    $this->load->model('public/customer_model');
		$this->load->library('form_validation');
    $this->auth->cekUserLogin();
    //$this->auth->cekRules('admin');
	}

	public function index(){
		$this->template->load('templates/admin/template','public/project/project_read');
	}

    public function create() {
        $data = array(
              'action' => site_url('public/project/add_project'),
              'projectid' => set_value('projectid'),
              'idcustomer' => set_value('idcustomer'),
              'namacustomer' => set_value('namacustomer'),
              'projectname' => set_value('projectname'),
              'idcustomer' => set_value('idcustomer'),
              'deliverybegin' => set_value('deliverybegin'),
              'deliveryend' => set_value('deliveryend'),
              'installbegin' => set_value('installbegin'),
              'installend' => set_value('installend'),
              'uatbegin' => set_value('uatbegin'),
              'uatend' => set_value('uatend'),
              'billstartdate' => set_value('billstartdate'),
              'billduedate' => set_value('billduedate'),
              'warrantyperiod' => set_value('warrantyperiod'),
              'contractstartdate' => set_value('contractstartdate'),
              'contractperiod' => set_value('contractperiod'),

           );
         
         $this->template->load('templates/admin/template','public/project/project_form',$data);
    
    }

    public function get_customer() {
       
    }

    public function add_project(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                  'projectname' => $this->input->post('projectname',TRUE),
                  'idcustomer' => $this->input->post('idcustomer',TRUE),

                  'deliverybegin' => strtotime($this->input->post('deliverybegin',TRUE)),
                  'deliveryend' => strtotime($this->input->post('deliveryend',TRUE)),
                  
                  'installbegin' => strtotime($this->input->post('installbegin',TRUE)),
                  'installend' => strtotime($this->input->post('installend',TRUE)),
                  
                  'uatbegin' => strtotime($this->input->post('uatbegin',TRUE)),
                  'uatend' => strtotime($this->input->post('uatend',TRUE)),
                  
                  'billstartdate' => strtotime($this->input->post('billstartdate',TRUE)),
                  'billduedate' => strtotime($this->input->post('billduedate',TRUE)),
                  
                  'warrantyperiod' => $this->input->post('billduedate',TRUE),
                  
                  'contractstartdate' => strtotime($this->input->post('contractstartdate',TRUE)),
                  'contractperiod' => $this->input->post('contractperiod',TRUE),
                );

            $this->project_model->add_project($data);
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public/project'));
        }
    }


    public function edit_project($id){
        $row = $this->project_model->project_data($id);
        $cust = $this->customer_model->customer_data($row->idcustomer);
        if ($row) {
        $data = array(
            'action'=> site_url('public/project/action_edit_project'),
            'projectid' => set_value('projectid',$row->projectid),
            'projectname' => set_value('projectname',$row->projectname),
            'idcustomer' => set_value('idcustomer',$row->idcustomer),
            'namacustomer' => set_value('namacustomer',$cust->namacustomer),
            'deliverybegin' => set_value('deliverybegin',date('d-M-Y',$row->deliverybegin)),
            'deliveryend' => set_value('deliveryend',date('d-M-Y',$row->deliveryend)),
            'installbegin' => set_value('installbegin',date('d-M-Y',$row->installbegin)),
            'installend' => set_value('installend',date('d-M-Y',$row->installend)),
            'uatbegin' => set_value('uatbegin',date('d-M-Y',$row->uatbegin)),
            'uatend' => set_value('uatend',date('d-M-Y',$row->uatend)),
            'billstartdate' => set_value('billstartdate',date('d-M-Y',$row->billstartdate)),
            'billduedate' => set_value('billduedate',date('d-M-Y',$row->billduedate)),
            'warrantyperiod' => set_value('warrantyperiod',$row->warrantyperiod),
            'contractstartdate' => set_value('contractstartdate',date('d-M-Y',$row->contractstartdate)),
            'contractperiod' => set_value('contractperiod',$row->contractperiod),
            'customerdata' => $this->customer_model->get_customer(),
        );
            $this->template->load('templates/admin/template','public/project/project_form',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/project'));
        }
    }


      public function action_edit_project() {
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_project($this->input->post('projectid', TRUE));
          } else {
            $id = $this->input->post('projectid', TRUE);
            $row = $this->project_model->project_data($id);
    
            $data = array(
                  'projectname' => $this->input->post('projectname',TRUE),
                  'idcustomer' => $this->input->post('idcustomer',TRUE),

                  'deliverybegin' => strtotime($this->input->post('deliverybegin',TRUE)),
                  'deliveryend' => strtotime($this->input->post('deliveryend',TRUE)),
                  
                  'installbegin' => strtotime($this->input->post('installbegin',TRUE)),
                  'installend' => strtotime($this->input->post('installend',TRUE)),
                  
                  'uatbegin' => strtotime($this->input->post('uatbegin',TRUE)),
                  'uatend' => strtotime($this->input->post('uatend',TRUE)),
                  
                  'billstartdate' => strtotime($this->input->post('billstartdate',TRUE)),
                  'billduedate' => strtotime($this->input->post('billduedate',TRUE)),
                  
                  'warrantyperiod' => $this->input->post('warrantyperiod',TRUE),
                  
                  'contractstartdate' => strtotime($this->input->post('contractstartdate',TRUE)),
                  'contractperiod' => $this->input->post('contractperiod',TRUE),
                );

            $this->project_model->update_project($this->input->post('projectid', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/project'));
        }
    }


     public function delete_project($id) {
        $row = $this->project_model->project_data($id);

        if ($row) {
            $this->project_model->delete_project($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('public/project'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/project'));
        }
    }



    function form_rules() {
        $this->form_validation->set_rules('projectname', ' ', 'trim|required');
        $this->form_validation->set_rules('idcustomer', ' ', 'trim|required');
        $this->form_validation->set_rules('deliverybegin', ' ', 'trim|required');
        $this->form_validation->set_rules('deliveryend', ' ', 'trim|required');
        $this->form_validation->set_rules('installbegin', ' ', 'trim|required');
        $this->form_validation->set_rules('installend', ' ', 'trim|required');
        $this->form_validation->set_rules('uatbegin', ' ', 'trim|required');
        $this->form_validation->set_rules('uatend', ' ', 'trim|required');
        $this->form_validation->set_rules('billstartdate', ' ', 'trim|required');
        $this->form_validation->set_rules('billduedate', ' ', 'trim|required');
        $this->form_validation->set_rules('warrantyperiod', ' ', 'trim|required');
        $this->form_validation->set_rules('contractstartdate', ' ', 'trim|required');
        $this->form_validation->set_rules('contractperiod', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	public function getJson(){
		
        $no = 1;
		    $row = $this->project_model->getJson();
        foreach ($row as $rw) {
        $customer = $this->customer_model->customer_data($rw->idcustomer);
        $data[]= array(
                        sprintf("%04s",$no++),
                        $customer->namacustomer,
                        date('d-M-Y',$rw->deliverybegin),
                        date('d-M-Y',$rw->deliveryend),
                        date('d-M-Y',$rw->installbegin),
                        date('d-M-Y',$rw->installend),
                        date('d-M-Y',$rw->uatbegin),
                        date('d-M-Y',$rw->uatend),
                        date('d-M-Y',$rw->billstartdate),
                        date('d-M-Y',$rw->billduedate),
                        $rw->warrantyperiod.'(Tahun)',
                        date('d-M-Y',$rw->contractstartdate),
                        $rw->contractperiod.'(Bulan)',
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/project/edit_project')."/$rw->projectid><i class=\"icon-file-pdf\"></i>Edit</a></li><li><a href=".base_url('public/project/delete_project')."/$rw->projectid onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-file-excel\"></i>Delete</a></li>",
                       );
    
    $row = array('aaData' => $data);
        //echo  json_encode($row);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
    }
}

}

/* End of file Project.php */
/* Location: ./application/controllers/Project.php */