<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Knowledgebase extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('public/Knowledgebase_model');
		$this->auth->cekUserLogin();
	}

	public function index()
	{

         

        
         if ($_POST) {
            # code...
            $tickets = $this->input->post('tickets',TRUE);
            $data['tickets'] = $this->Knowledgebase_model->getknowledge($tickets);
         } else{
            $data = '';
         }

          $this->load->view('public/kd_base/kb_view',$data);

          //print_r($data); 
    }



        public function get_json() {

           foreach ($this->Knowledgebase_model->getJson() as $rw) {

                   $data[] = $rw->problemsummary;
                                                                                       
         $row = array('tickets' => $data);
         //echo  print_r($row);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
     }
  } 
 

		 
	 
}

/* End of file Knowledgebase.php */
/* Location: ./application/controllers/Knowledgebase.php */