<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
         date_default_timezone_set('Asia/Jakarta');
         $this->load->model('public/customer_model');
        $this->load->library('form_validation');
        $this->auth->cekUserLogin();
        /*
        $this->auth->cekRules('admin');
        */
	}

	public function index()
	{
		$this->template->load('templates/admin/template','public/customer/customer_read');
	}


     public function create() {
        $data = array(
              'action' => site_url('public/customer/add_customer'),
              'idcustomer' => set_value('idcustomer'),
              'namacustomer' => set_value('namacustomer'),
              'alamat' => set_value('alamat'),
              'Telp' => set_value('Telp'),
              'email' => set_value('email'),
              'PIC' => set_value('PIC'),
              'alamat_pasang' => set_value('alamat_pasang'),
              'loket_pembayaran' => set_value('loket_pembayaran'),
              'tgl_berlangganan' => set_value('tgl_berlangganan'),
              'status_hunian' => set_value('status_hunian'),
              'jenis_tarif' => set_value('jenis_tarif'),
              'no_register' => set_value('no_register'),
           );
         
         $this->template->load('templates/admin/template','public/customer/customer_form',$data);
    
    }

    public function add_customer(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
           $random = (rand() % 9000) + 1000;
            $data = array(
                  'namacustomer' => $this->input->post('namacustomer',TRUE),
                  'alamat' => $this->input->post('alamat',TRUE),
                  'Telp' => $this->input->post('Telp',TRUE),
                  'email' => $this->input->post('email',TRUE),
                  'PIC' => $this->input->post('PIC',TRUE),
                  'alamat_pasang' => $this->input->post('alamat_pasang',TRUE),
                  'status_hunian' => $this->input->post('status_hunian',TRUE),
                  'loket_pembayaran' => $this->input->post('loket_pembayaran',TRUE),
                  'tgl_berlangganan' => strtotime($this->input->post('tgl_berlangganan',TRUE)),
                  'jenis_tarif' => $this->input->post('jenis_tarif',TRUE),
                  'no_register' => $random,
                  'time' => time(),
                  'ip' => $_SERVER['REMOTE_ADDR'],
                );

            $this->customer_model->customer_add($data);
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public/Customer'));
        }
    }

     public function edit_customer($id){
      $row = $this->customer_model->customer_data($id);
      if ($row) {
        $data = array(
            'action'=> site_url('public/customer/action_edit_customer'),
            'idcustomer' => set_value('idcustomer',$row->idcustomer),
            'namacustomer' => set_value('namacustomer',$row->namacustomer),
            'alamat' => set_value('alamat',$row->alamat),
            'Telp' => set_value('Telp',$row->Telp),
            'email' => set_value('email',$row->email),
            'PIC' => set_value('PIC',$row->PIC),
            'loket_pembayaran' => set_value('loket_pembayaran',$row->PIC),
            'alamat_pasang' => set_value('alamat_pasang',$row->alamat_pasang),
            'status_hunian' => set_value('status_hunian',$row->status_hunian),
            'tgl_berlangganan' => set_value('tgl_berlangganan',date('d-M-Y', $row->tgl_berlangganan)),
            'jenis_tarif' => set_value('PIC',$row->jenis_tarif),
        );
            $this->template->load('templates/admin/template','public/customer/customer_form',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/customer'));
        }
    }

    public function action_edit_customer() {
        $this->form_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit_customer($this->input->post('idcustomer', TRUE));
        } else {
            $id = $this->input->post('idcustomer', TRUE);
            $row = $this->customer_model->customer_data($id);
    
            $data = array(
              'namacustomer' => $this->input->post('namacustomer',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'Telp' => $this->input->post('Telp',TRUE),
              'PIC' => $this->input->post('PIC',TRUE), //->ini masih temporari
              'alamat_pasang' => $this->input->post('alamat_pasang',TRUE),
              'loket_pembayaran' => $this->input->post('loket_pembayaran',TRUE),
              'status_hunian' => $this->input->post('status_hunian',TRUE),
              'tgl_berlangganan' => strtotime($this->input->post('tgl_berlangganan',TRUE)),
              'jenis_tarif' => $this->input->post('jenis_tarif',TRUE),
              'time' => time(),
              'ip' => $_SERVER['REMOTE_ADDR'],
               );

            $this->customer_model->update_customer($this->input->post('idcustomer', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/customer'));
        }
    }


     public function delete_customer($id) {
        $row = $this->customer_model->customer_data($id);

        if ($row) {
            $this->customer_model->customer_delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('public/customer'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/customer'));
        }
    }

	public function getJson() {
        $no = 1;
        foreach ($this->customer_model->getJson() as $rw) {
                    $data[]= array(
                        $no++,
                        $rw->namacustomer,
                        $rw->alamat,
                        $rw->Telp,
                        $rw->email,
                        $rw->PIC,
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/customer/edit_customer')."/$rw->idcustomer><i class=\"icon-file-pdf\"></i>Edit</a></li><li><a href=".base_url('public/customer/delete_customer')."/$rw->idcustomer onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-file-excel\"></i>Delete</a></li>",
                       );
    
    $row = array('aaData' => $data);
         //echo  print_r($row);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
    }
}


   function form_rules() {
        $this->form_validation->set_rules('namacustomer', ' ', 'trim|required');
        $this->form_validation->set_rules('alamat', ' ', 'trim|required');
        $this->form_validation->set_rules('Telp', ' ', 'trim|required');
        //$this->form_validation->set_rules('email', ' ', 'trim|required');
        $this->form_validation->set_rules('PIC', ' ', 'trim|required');
        $this->form_validation->set_rules('alamat_pasang', ' ', 'trim|required');
        $this->form_validation->set_rules('loket_pembayaran', ' ', 'trim|required');
        $this->form_validation->set_rules('status_hunian', ' ', 'trim|required');
        $this->form_validation->set_rules('tgl_berlangganan', ' ', 'trim|required');
        $this->form_validation->set_rules('jenis_tarif', ' ', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    


	 

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */