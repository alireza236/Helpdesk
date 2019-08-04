<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sla extends CI_Controller {
  public $table = 'sla';
   
	public function __construct()
	{
		parent::__construct();
		$this->load->model('public/sla_model');
    $this->load->library('form_validation');
		 $this->auth->cekUserLogin();
     //$this->auth->cekRules('admin');
	}

	public function index()
	{
	  $this->template->load('templates/admin/template','public/sla/sla_list');	  
	}

      public function create() {
        $data = array(
              'action' => site_url('public/sla/add_sla'),
              'slaid' => set_value('slaid'),
              'namasla' => set_value('namasla'),
              'responsetime' => set_value('responsetime'),
              'resolutiontime' => set_value('resolutiontime'),
              'slawarning' => set_value('slawarning'),
           );
         
         $this->template->load('templates/admin/template','public/sla/sla_add',$data);
    
    }
  
  public function add_sla(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE ) {
            $this->create();
            }else{
               $data = array(
                      'slaid' => $this->input->post('slaid',TRUE),
                      'namasla' => $this->input->post('namasla',TRUE),
                      'kategori_sla' => $this->input->post('kategori_sla',TRUE),
                      'responsetime' => $this->input->post('responsetime',TRUE),
                      'resolutiontime' => $this->input->post('resolutiontime',TRUE),
                      'slawarning' => $this->input->post('slawarning',TRUE),
                      'kategori_sla' => $this->input->post('kategori_sla',TRUE),
                    );

                $this->sla_model->addsla($data);
                $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
                redirect(site_url('public/sla'));               
            } 
        }

         function form_rules() {
            //$this->form_validation->set_rules('slaid', ' ', 'trim|required|is_unique[sla.slaid]');
            $this->form_validation->set_rules('namasla', ' ', 'trim|required|is_unique[sla.namasla]');
            $this->form_validation->set_rules('kategori_sla', ' ', 'trim|required');
            $this->form_validation->set_rules('responsetime', ' ', 'trim|required');
            $this->form_validation->set_rules('resolutiontime', ' ', 'trim|required');
            $this->form_validation->set_rules('slawarning', ' ', 'trim|required');
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    public function edit_sla($id){
      $row = $this->sla_model->sla_data($id);
      if ($row) {
        $data = array(
            'action'=> site_url('public/sla/action_update_sla'),
            'slaid' => set_value('slaid',$row->slaid),
            'namasla' => set_value('namasla',$row->namasla),
            'responsetime' => set_value('responsetime',$row->responsetime),
            'resolutiontime' => set_value('resolutiontime',$row->resolutiontime),
            'slawarning' => set_value('slawarning',$row->slawarning),
            'kategori_sla' => set_value('kategori_sla',$row->kategori_sla),
        );
            $this->session->set_userdata('id_sla_sekarang', $row->slaid);
            $this->session->set_userdata('namasla_sekarang', $row->namasla);
            $this->template->load('templates/admin/template','public/sla/sla_edit',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/sla'));
        }
    }

    public function action_update_sla() {
        $this->form_rules_edit();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_sla($this->input->post('slaid', TRUE));
        } else {
          $slaid = $this->input->post('slaid',TRUE);
          $data = array(
                      'namasla' => $this->input->post('namasla',TRUE),
                      'responsetime' => $this->input->post('responsetime',TRUE),
                      'resolutiontime' => $this->input->post('resolutiontime',TRUE),
                      'slawarning' => $this->input->post('slawarning',TRUE),
                    );
            $this->sla_model->update_sla($slaid, $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/sla'));
        }
    }

  
   function form_rules_edit() {
        //$this->form_validation->set_rules('slaid', ' ', 'trim|required|callback_is_slaid_exist');
        $this->form_validation->set_rules('namasla', ' ', 'trim|required|callback_is_namasla_exist');
        $this->form_validation->set_rules('responsetime', ' ', 'trim|required');
        $this->form_validation->set_rules('resolutiontime', ' ', 'trim|required');
        $this->form_validation->set_rules('slawarning', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     /*function is_slaid_exist(){
        $id_sla_sekarang  = $this->session->userdata('id_sla_sekarang');
        $id_sla_baru    = $this->input->post('slaid');

        // jika id_sla baru dan id_sla yang sedang diedit sama biarin aja, artinya id_sla tidak diganti..
        if ($id_sla_baru === $id_sla_sekarang){
            return TRUE;
        }else{
            // jika id_sla yang sedang diupdate (di session) dan yang baru (dari form) tidak sama,
            // artinya id_sla mau diganti
            // cek dulu di database apakah id_sla udah dipake ?
            // cek database untuk id_sla yang sama..
            $query = $this->db->get_where('sla', array('slaid' => $id_sla_baru));

            // id_sla udah dipake..
            if($query->num_rows() > 0){
                $this->form_validation->set_message('is_slaid_exist',"SLA dengan kode $id_sla_baru sudah terdaftar");
                return FALSE;
            }else{
            // id_sla belom dipake, OK C00YY... @^@
                return TRUE;
            }
        }
    }*/

     function is_namasla_exist(){
        $namasla_sekarang  = $this->session->userdata('namasla_sekarang');
        $namasla_baru    = $this->input->post('namasla');
        if ($namasla_baru === $namasla_sekarang){
            return TRUE;
        }else{
            $query = $this->db->get_where('sla', array('namasla' => $namasla_baru));
            if($query->num_rows() > 0){
                $this->form_validation->set_message('is_namasla_exist',"SLA dengan nama $namasla_baru sudah terdaftar");
                return FALSE;
            }else{
                return TRUE;
            }
        }
    }


    public function getJson() {
       


        $no = 1;
        foreach ($this->sla_model->getJson() as $rw) {
        
          if ($rw->kategori_sla == 'low'){
                $label="success"; //merah
            }elseif ($rw->kategori_sla == 'medium'){
                $label="primary"; //biru
            
            }elseif ($rw->kategori_sla == 'high') {
            
                $label="warning"; //hijau
            }elseif ($rw->kategori_sla == 'urgency') {
                $label="danger"; //merah
            }
 

                    $data[]= array(
                        $no++,
                        $rw->slaid,
                        $rw->namasla,
                         '<span class="label label-'.$label.'">'.$rw->kategori_sla.'</span>',
                        $rw->responsetime.'&nbsp;'.'jam',
                        $rw->resolutiontime.'&nbsp;'.'jam',
                        $rw->slawarning.'&nbsp;'.'jam',
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/sla/edit_sla')."/$rw->slaid><i class=\"icon-wrench3\"></i>Update</a></li><li><a href=".base_url('public/sla/hapus_sla')."/$rw->slaid onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-trash\"></i>Hapus</a></li></ul></li></ul>",
                       );

         $row = array(
                     'aaData' => $data
                     );
          //var_dump($row);
       $this->output->set_header("Pragma: no-cache");
       $this->output->set_header("Cache-Control: no-store, no-cache");
       $this->output->set_content_type('application/json')->set_output(json_encode($row));
     }
  }      

}

/* End of file Sla.php */
/* Location: ./application/controllers/Sla.php */