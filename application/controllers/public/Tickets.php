<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets extends CI_Controller {

  public $data = array();
  public function __construct()
	{
		    parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('public/ticket_model');
        $this->load->model('public/customer_model');
        $this->load->model('public/user_model');
        $this->load->model('public/sla_model');
        $this->load->model('public/project_model');
        $this->load->model('public/emails_model');

		    $this->load->library('form_validation');
        $this->auth->cekUserLogin();
       /* 
        $this->auth->cekRules('admin');
        */
  }

	public function index(){ $this->template->load('templates/admin/template','public/tickets/ticket_list'); }


  public function ticket_by_request() { $this->template->load('templates/admin/template','public/tickets/ticket_by_request'); }


  public function get_tickets_by_assignee(){ $this->template->load('templates/admin/template','public/tickets/ticket_by_assignee');}


  public function ticket_edit_user(){ $this->template->load('templates/admin/template','public/tickets/ticket_edituser');}
 
  public function ticket_resolution(){ $this->template->load('templates/admin/template','public/tickets/ticket_resolution');}
  
  public function ticket_waitforclosed(){ $this->template->load('templates/admin/template','public/tickets/ticket_resolution');}
  
  



  public function ticket_allopen(){ $this->template->load('templates/admin/template','public/tickets/ticket_allopen');}

  public function ticket_allopen_json(){
   
      $currenttime = time();
        $no = 1;
        foreach ($this->ticket_model->get_opened_tickets() as $rw) {
            $customer           = $this->customer_model->customer_data($rw->idcustomer);
            $sla                = $this->sla_model->sla_data($rw->sla);
            $user               = $this->user_model->user_data($rw->assignee);
            $resolutiontime     = $sla->resolutiontime;
            $slawarning         = $sla->slawarning;
            $documenteddate     = $rw->documenteddate;
            
            $slagoaltime        = strtotime("+$resolutiontime hours",$documenteddate);
            $slawarningtime     = strtotime("+$slawarning hours",$documenteddate);

            if ($currenttime > $slagoaltime){
                $label="danger"; //merah
            }else if ($currenttime >= $slawarningtime){
                $label="primary"; //biru
            }else {
                $label="success"; //hijau
            }
                  
                    $data[]= array(
                        $no++,
                        $rw->ticketnumber,
                        '<span class="label label-'.$label.'">'.$sla->namasla.'</span>',
                        date('d-M-Y H:i:s',$slagoaltime),
                        $customer->namacustomer,
                        date('d-M-Y H:i:s',$rw->reporteddate), 
                        date('d-M-Y H:i:s',$rw->documenteddate),
                        $rw->problemsummary, 
                        $rw->ticketstatus,
                        $user->username, 
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

  public function ticket_waitforclosed_json(){
      
       $user_name = $this->session->userdata('user_username');
        $tickets =  $this->ticket_model->tickets_by_resolver_not_closed($user_name);
 
       $no = 0;
       foreach ($tickets as $val ) {
         # code...
        $sla = $this->sla_model->sla_data($val->sla);

        $customer = $this->customer_model->customer_data($val->idcustomer);

        $user = $this->user_model->user_data($val->assignee);

        $data[] = array(
           $no++,
           anchor('public/tickets/ticket_edit_by_user/'.$val->id,$val->ticketnumber),
           $sla->namasla,
           $customer->namacustomer,
           $val->reporteddate,
           $val->reportedby,
           $val->problemsummary,
           $val->ticketstatus,
           $user->fullname,

          );

        $row = array('aaData' => $data);
          $this->output->set_header("Pragma: no-cache");
          $this->output->set_header("Cache-Control: no-store, no-cache");
          $this->output->set_content_type('application/json')->set_output(json_encode($row));


       // echo json_encode($data);
       }
  }

  public function tickets_by_resolver_json(){ 
                 
        $id = $this->session->userdata('user_id');

        $user = $this->user_model->user_data($id);

        $tickets =  $this->ticket_model->tickets_by_resolver($user->username);
 
       $no = 0;
       foreach ($tickets as $val ) {
         # code...
        $sla = $this->sla_model->sla_data($val->sla);

        $customer = $this->customer_model->customer_data($val->idcustomer);

        $user = $this->user_model->user_data($val->assignee);

        $data[] = array(
           $no++,
           anchor('public/tickets/ticket_edit_by_user/'.$val->id,$val->ticketnumber),
           $sla->namasla,
           $customer->namacustomer,
           date('d-M-Y',$val->reporteddate),
           $val->reportedby,
           $val->problemsummary,
           $val->ticketstatus,
           $user->fullname,

          );

        $row = array('aaData' => $data);
          $this->output->set_header("Pragma: no-cache");
          $this->output->set_header("Cache-Control: no-store, no-cache");
          $this->output->set_content_type('application/json')->set_output(json_encode($row));


       // echo json_encode($data);
       }
  }

 

  public function  tickets_by_assignee_json(){

         $user_id = $this->session->userdata('user_id');
         //$this->template->load('templates/admin/template','public/tickets/ticket_by_request');
             //$id =  $this->user_model->user_data($user_id);
        $tickets =  $this->ticket_model->tickets_by_assignee($user_id);
 
       $no = 0;
       
       foreach ($tickets as $val ) {
         # code...
        $sla = $this->sla_model->sla_data($val->sla);

        $customer = $this->customer_model->customer_data($val->idcustomer);

        $user = $this->user_model->user_data($val->assignee);

        $data[] = array(
           $no++,
           anchor('public/tickets/ticket_edit_by_user/'.$val->id,$val->ticketnumber),
           $sla->namasla,
           $customer->namacustomer,
           date('d-M-Y',$val->reporteddate),
           $val->reportedby,
           $val->problemsummary,
           $val->ticketstatus,
           $user->fullname,

          );

        $row = array('aaData' => $data);
           $this->output->set_header("Pragma: no-cache");
           $this->output->set_header("Cache-Control: no-store, no-cache");
           $this->output->set_content_type('application/json')->set_output(json_encode($row));

          //echo json_encode($data);
       }
  }


      
  
  public function create(){
     $data = array(
              'action' => site_url('public/tickets/add_ticket'),
              'idcustomer' => set_value('idcustomer'),
              'reporteddate' => set_value('reporteddate'),
              //'reportedby' => set_value('reportedby'),
              'sla' => set_value('sla'),
              'problemsummary' => set_value('problemsummary'),
              'problemdetail' => set_value('problemdetail'),
              'telp' => set_value('telp'),
              'email' => set_value('email'),
              'assignee' => set_value('assignee'),
           );
         $this->template->load('templates/admin/template','public/tickets/ticket_form_add',$data);
    
  }


   public function add_ticket(){
        $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

 
          $lastticket = $this->ticket_model->get_last_ticket();

          $changeby = $this->session->userdata('user_id');
          $documentedby = $this->session->userdata('user_id');
  
  

          $insert_ticket = array(
             //'id' => $lastticket->id+ 1,
             'ticketnumber' => $lastticket->id . '/SR/'.date("M").'/'.date("Y"),
             'sla' => $this->input->post('sla'),
             'idcustomer' => $this->input->post('idcustomer'),
             'reporteddate' => strtotime($this->input->post('reporteddate')),
             //'reportedby' => $this->input->post('reportedby'),
             'telp' => $this->input->post('telp'),
             'email' => $this->input->post('email'),
             'problemsummary' => $this->input->post('problemsummary'),
             'problemdetail' => $this->input->post('problemdetail'),
             'ticketstatus' => "Assigne",
             'assignee' => $this->input->post('assignee'),
             'documentedby' => $documentedby,
             'documenteddate' => time(),
            );


          $log_ticket = array(
                //'id' => $id+ 1,
                'sla' => $this->input->post('sla'),
                'reporteddate' => strtotime($this->input->post('reporteddate',TRUE)),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
                'problemsummary' => $this->input->post('problemsummary'),
                'problemdetail' => $this->input->post('problemdetail'),
                'ticketstatus' => "Assigne",
                'assignee' => $this->input->post('assignee'),
                'assigneddate' => null,
                'pendingby' => '',
                'pendingdate' => null,
                'resolution' => '',
                'resolveddate' => null,
                'closedby' => '',
                'closeddate' => null,
                'changeby' =>  $changeby,
                'changes' => 'Create New Ticket',
            );
 
            $this->ticket_model->add_ticket($insert_ticket);
            $this->ticket_model->log_ticket($log_ticket);
            
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public/tickets'));
        }
    } 

      function form_rules() {
               $this->form_validation->set_rules('idcustomer', ' ', 'trim|required');
               $this->form_validation->set_rules('reporteddate', ' ', 'trim|required');
               //$this->form_validation->set_rules('reportedby', ' ', 'trim|required');
               $this->form_validation->set_rules('sla', ' ', 'trim|required');
               //$this->form_validation->set_rules('problemsummary', ' ', 'trim|required');
               $this->form_validation->set_rules('problemdetail', ' ', 'trim|required');
              /* $this->form_validation->set_rules('telp', ' ', 'trim|required');*/
               //$this->form_validation->set_rules('email', ' ', 'trim|required');
               $this->form_validation->set_rules('assignee', ' ', 'trim|required');
               $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
             }



    public function action_ticket_edit(){

        
         $id_user = $this->session->userdata('user_id'); 
         $user_session_name = $this->session->userdata('user_username'); 
         $user = $this->ticket_model->ticket_data($id_user);
         $this->form_edit_rules();

         if ($this->form_validation->run() == FALSE) {
           
            $this->ticket_edit($this->input->post('id', TRUE));
        
         } else {
                  //$row = $this->customer_model->customer_data($id);
       $id = $this->input->post('id');
       $data = array(

                  'id' => $id,
                  'sla' => $this->input->post('sla',TRUE),
                  'reporteddate' => time(),
                  'reportedby' => $this->input->post('reportedby',TRUE),
                  'telp' => $this->input->post('telp',TRUE),
                  'email' => $this->input->post('email',TRUE),
                  'problemsummary' => $this->input->post('problemsummary',TRUE),
                  'problemdetail' => $this->input->post('problemdetail',TRUE),
                  'ticketstatus' => $this->input->post('ticketstatus',TRUE),
                  'assignee' => $this->input->post('idassignee',TRUE),
                  //'assigneddate' => $this->input->post('assigneddate',TRUE),
                  
                  //'pendingby' => $this->input->post('pendingby',TRUE),
                  //'pendingdate' => $this->input->post('pendingdate',TRUE),
                  'resolution' => $this->input->post('resolution',TRUE),
                  //'resolvedby' => $this->input->post('resolvedby',TRUE),
                  //'resolveddate' => $this->input->post('resolveddate',TRUE),
                  //'closedby' => $this->input->post('closedby',TRUE),
                  //'closeddate' => $this->input->post('closeddate',TRUE),
                  //'changeby' => $this->session->userdata('user_id'),
                  //'changedate' => time(),
                  //'documentedby' => $this->input->post('documentedby',TRUE),
                  //'documenteddate' => $this->input->post('documenteddate',TRUE),

          );

          
               if(array_key_exists("ticketstatus",$data)){

                  if ($data['ticketstatus'] == 'Pending'  ) {
                      $data['pendingby'] =  $this->session->userdata('user_username');
                      $data['pendingdate'] = time();
                      $data['changes'] = "Status berubah menjadi Pending.";
                     
                     }elseif ($data['ticketstatus'] == 'Resolved') {
                       # code...
                       $data['resolvedby'] = $this->session->userdata('user_username');
                       $data['resolveddate'] = time();
                       $data['changes'] = "Status berubah menjadi Resolved.";
                     }elseif ($data['ticketstatus'] == 'Closed') {
                       # code...
                        $data['closedby'] = $this->session->userdata('user_username');
                        $data['closeddate'] = time();
                        $data['changes'] = "Status berubah menjadi Closed.";
                     }else{

                        echo "cannot change to Assigne";;
                     }

                }     
            
              $this->ticket_model->update_ticket($id,$data);
              
              $data['changeby'] = $this->session->userdata('user_id');
              $data['changedate'] = time();

              $this->ticket_model->update_log_ticket($data);
             //echo json_encode($data);
            //exit();

            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/tickets'));
        }
  }




  public function ticket_edit($id){
 
      $row  = $this->ticket_model->ticket_data($id);
 

    if ($row) {
            $cust = $this->customer_model->customer_data($row->idcustomer);
            //$proj = $this->project_model->get_project_customer($cust->idcustomer);
            $slas = $this->sla_model->sla_data($row->sla);
            $userassignee = $this->user_model->user_data($row->assignee);
            $data  = array(
              'ticketnumber' => $row->ticketnumber, 
              'namacustomer' => $cust->namacustomer, 
              'alamat' => $cust->alamat, 
              'jenis_tarif' => $cust->jenis_tarif, 
              'no_register' => $cust->no_register, 
              'tgl_berlangganan' => $cust->tgl_berlangganan, 
              'sladata' => $this->sla_model->get_sla(), 
              'listuser' => $this->user_model->get_user(), 
              'audit_trail' => $this->ticket_model->get_audit_trail($row->id),
              'sla' => $row->sla,
              'id' => $row->id,
              'pendingdate' => $row->pendingdate,
              'pendingby' => $row->pendingby,
              'resolvedby' => $row->resolvedby,
              'resolveddate' => $row->resolveddate,
              'closedby' => $row->closedby,
              'closeddate' => $row->closeddate,
              'userassignee' => $userassignee->fullname,
              'reporteddate' => date('d-M-Y',$row->reporteddate),
              'reportedby' => $row->reportedby,
              'namasla' => $slas->namasla,
              'telp' => $row->telp,
              'email' => $row->email,
              'assignee' => $row->assignee,
              'ticketstatus' => $row->ticketstatus,
              'action'=> site_url('public/tickets/action_ticket_edit'),
              'problemsummary' => set_value('problemsummary',$row->problemsummary),
              'problemdetail' => set_value('problemdetail',$row->problemdetail),
              'resolution' => set_value('resolution',$row->resolution),
              'documentedby' => set_value('documentedby',$row->documentedby),
              'documenteddate' => set_value('documenteddate',$row->documenteddate),
              );
          
            $this->template->load('templates/admin/template','public/tickets/ticket_form_edit',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/tickets'));
        }
  }


    function form_edit_rules() {
        $this->form_validation->set_rules('resolution', ' ', 'trim|required');
        $this->form_validation->set_rules('problemsummary', ' ', 'trim|required');
        $this->form_validation->set_rules('problemdetail', ' ', 'trim|required');
        $this->form_validation->set_rules('documentedby', ' ', 'trim');
        $this->form_validation->set_rules('documenteddate', ' ', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function get_customer(){
        //$id_cust = $_GET['idcustomer'];
        $id_cust = $this->input->get('idcustomer');
         if ($id_cust) {
              $customer = $this->customer_model->customer_data($id_cust);  
              $project  = $this->project_model->get_project_customer($id_cust);
              $alamat_pasang     = $customer->alamat_pasang;
              $nomor_tlpn     = $customer->Telp;
              $tgl_berlangganan =  date('Y-M-d',strtotime($customer->tgl_berlangganan));
             
            }   
          if($alamat_pasang==""){
             $nomor_tlpn=0;
             $tgl_berlangganan=0;
          }

        
      $data_customer = array(
        'namacustomer'    => ucwords($customer->namacustomer),
        'alamat_pasang'   => $alamat_pasang,
        'jenis_tarif'     => $customer->jenis_tarif,
        'tgl_berlangganan'  => $tgl_berlangganan,
        'nomor_tlpn'  => $nomor_tlpn,
      );
      //print_r($data_customer);
      $this->output->set_header("Pragma: no-cache");
      $this->output->set_header("Cache-Control: no-store, no-cache");
      $this->output->set_content_type('application/json')->set_output(json_encode($data_customer));

}


 
       
	public function getJson() {

        $currenttime = time();
        $no = 1;
        foreach ($this->ticket_model->getJson() as $rw) {
            $customer           = $this->customer_model->customer_data($rw->idcustomer);
            $sla                = $this->sla_model->sla_data($rw->sla);
            $user               = $this->user_model->user_data($rw->assignee);
            $resolutiontime     = $sla->resolutiontime;
            $slawarning         = $sla->slawarning;
            $documenteddate     = $rw->documenteddate;
            
            $slagoaltime        = strtotime("+$resolutiontime hours",$documenteddate);
            $slawarningtime     = strtotime("+$slawarning hours",$documenteddate);

            if ($currenttime > $slagoaltime){
                $label="danger"; //merah
            }else if ($currenttime >= $slawarningtime){
                $label="primary"; //biru
            }else {
                $label="success"; //hijau
            }
               

                if ($sla->kategori_sla == 'low'){
                    $labelsla="success"; //merah
                }elseif ($sla->kategori_sla == 'medium'){
                    $labelsla="primary"; //biru
                
                }elseif ($sla->kategori_sla == 'high') {
                
                    $labelsla="warning"; //hijau
                }elseif ($sla->kategori_sla == 'urgency') {
                    $labelsla="danger"; //merah
                }   


                    $data[]= array(
                        $no++,
                         anchor('public/tickets/ticket_edit_by_user/'.$rw->id,$rw->ticketnumber),
                        '<span class="label label-'.$label.'">'.$sla->namasla.'</span>',
                        date('d-M-Y H:i:s',$slagoaltime),
                        $customer->namacustomer,
                        //date('d-M-Y H:i:s',$rw->reporteddate), 
                        //date('d-M-Y H:i:s',$rw->documenteddate),
                        //$rw->problemsummary, 
 
                        '<span class="label label-'.$labelsla.'">'.strtoupper($sla->kategori_sla).'</span>',
                        $rw->ticketstatus,
                        $user->username, 
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/tickets/ticket_edit')."/$rw->id><i class=\"icon-wrench3\"></i>Update</a></li><li><a href=".base_url('public/tickets/delete_ticket')."/$rw->id onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-trash\"></i>Hapus</a></li></ul></li></ul>",
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

   

    public function delete_ticket($id) {
        $row = $this->ticket_model->ticket_data($id);

        if ($row) {
            $this->ticket_model->ticket_delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('public/tickets'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/tickets'));
        }
    }


    public function requester_json(){
     
        $user_id = $this->session->userdata('user_id');

        
        $tickets =  $this->ticket_model->by_request($user_id);
 
       $no = 0;
       foreach ($tickets as $val ) {
         # code...
        $sla = $this->sla_model->sla_data($val->sla);

        $customer = $this->customer_model->customer_data($val->idcustomer);

        $user = $this->user_model->user_data($val->assignee);

        $data[] = array(
           $no++,
           anchor('public/tickets/ticket_edit_by_user/'.$val->id,$val->ticketnumber),
           $sla->namasla,
           $customer->namacustomer,
           date('d-M-Y', $val->reporteddate),
           $val->reportedby,
           $val->problemsummary,
           $val->ticketstatus,
           $user->fullname,

          );

        $row = array('aaData' => $data);
          $this->output->set_header("Pragma: no-cache");
          $this->output->set_header("Cache-Control: no-store, no-cache");
          $this->output->set_content_type('application/json')->set_output(json_encode($row));


       // echo json_encode($data);
       }

    }

      public function ticket_edit_by_user($id){

         //$id = $this->input->get('id',TRUE);
         $tickets = $this->ticket_model->ticket_data($id);
     
     if ($tickets) {
         
         $user_id = $this->session->userdata('user_id');


         $customer = $this->customer_model->customer_data($tickets->idcustomer);
         $sla = $this->sla_model->sla_data($tickets->sla);

         $alluser = $this->user_model->get_user();

         $userassignee = $this->user_model->user_data($tickets->assignee);

         if ($tickets->ticketstatus=="Closed"){ 
             redirect(site_url('public/tickets/read_ticket'));
             exit();
           }
    

         $data = array(
             'action'  => site_url('public/tickets/add_ticket_edit_by_user'),
             'id' => $tickets->id,
             'userassignee_fullname' => $userassignee->fullname,
             'alluser' => $alluser,
             'assignee' => $tickets->assignee,
             'problemdetail' => $tickets->problemdetail,         
             'telp' => $tickets->telp,         
             'problemsummary' => $tickets->problemsummary,         
             'reporteddate' => date('d-M-Y', $tickets->reporteddate),         
             'reportedby' => $tickets->reportedby,         
             'ticketnumber' => $tickets->ticketnumber,
             'ticketstatus' => $tickets->ticketstatus,
             'pendingby'=> $tickets->pendingby,
             'email' => $tickets->email,
             'pendingdate'=> $tickets->pendingdate,
             'resolvedby' => $tickets->resolvedby,
             'resolveddate' => $tickets->resolveddate,
             'closedby' => $tickets->closedby,
             'closeddate' => $tickets->closeddate,         
             'namacustomer' => $customer->namacustomer,         
             'no_register' => $customer->no_register,         
             'tgl_berlangganan' => date('d-M-Y',strtotime($customer->tgl_berlangganan)),         
             'jenis_tarif' => $customer->jenis_tarif, 
             'resolution' => $tickets->resolution,
             'sla' => $sla->namasla,
             'slaid' => $sla->slaid,
             'audit_trail' => $this->ticket_model->get_audit_trail($tickets->id)         
          );

          //echo json_encode($data);

         $this->template->load('templates/admin/template','public/tickets/ticket_edituser',$data); 
         
         }else{

             $this->session->set_flashdata('message_text', 'Record Not Found');
             redirect(site_url('public/tickets/ticket_by_request'));
         }       
  }


  public function add_ticket_edit_by_user(){
         
         $id_user = $this->session->userdata('user_id'); 
         $user_session_name = $this->session->userdata('user_username'); 
         $user = $this->ticket_model->ticket_data($id_user);
         $this->form_edit_by_user_rules();

         if ($this->form_validation->run() == FALSE) {
           
            $this->ticket_edit_by_user($this->input->post('id', TRUE));
        
         } else {
         $id = $this->input->post('id',TRUE);
         $data = array(

                  'id' => $id,
                  'sla' => $this->input->post('sla',TRUE),
                  'reporteddate' => time(),
                  'reportedby' => $this->input->post('reportedby',TRUE),
                  'telp' => $this->input->post('telp',TRUE),
                  'email' => $this->input->post('email',TRUE),
                  'problemsummary' => $this->input->post('problemsummary',TRUE),
                  'problemdetail' => $this->input->post('problemdetail',TRUE),
                  'ticketstatus' => $this->input->post('ticketstatus',TRUE),
                  'assignee' => $this->input->post('idassignee',TRUE),
                  //'assigneddate' => $this->input->post('assigneddate',TRUE),
                  
                  //'pendingby' => $this->input->post('pendingby',TRUE),
                  //'pendingdate' => $this->input->post('pendingdate',TRUE),
                  'resolution' => $this->input->post('resolution',TRUE),
                  //'resolvedby' => $this->input->post('resolvedby',TRUE),
                  //'resolveddate' => $this->input->post('resolveddate',TRUE),
                  //'closedby' => $this->input->post('closedby',TRUE),
                  //'closeddate' => $this->input->post('closeddate',TRUE),
                  //'changeby' => $this->session->userdata('user_id'),
                  //'changedate' => time(),
                  //'documentedby' => $this->input->post('documentedby',TRUE),
                  //'documenteddate' => $this->input->post('documenteddate',TRUE),

          );

          
               if(array_key_exists("ticketstatus",$data)){

                  if ($data['ticketstatus'] == 'Pending'  ) {
                      $data['pendingby'] =  $this->session->userdata('user_username');
                      $data['pendingdate'] = time();
                      $data['changes'] = "Status berubah menjadi Pending.";
                     }
                     elseif ($data['ticketstatus'] == 'Resolved') {
                       # code...
                       $data['resolvedby'] = $this->session->userdata('user_username');
                       $data['resolveddate'] = time();
                       $data['changes'] = "Status berubah menjadi Resolved.";
                     }
                     elseif ($data['ticketstatus'] == 'Closed') {
                       # code...
                        $data['closedby'] = $this->session->userdata('user_username');
                        $data['closeddate'] = time();
                        $data['changes'] = "Status berubah menjadi Closed.";
                     }else{

                        echo "Cannot change to  Assigne";;
                     }

                }     
            
              $this->ticket_model->update_ticket($id,$data);
              
              $data['changeby'] = $this->session->userdata('user_id');
              $data['changedate'] = time();

              $this->ticket_model->update_log_ticket($data);
               //echo json_encode($data);
               //exit();

             $this->session->set_flashdata('message_text', 'Update Record Success');
             redirect(site_url('public/tickets/get_tickets_by_assignee'));

        }
                 
    
  }

     function form_edit_by_user_rules() {
        $this->form_validation->set_rules('resolution', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    public function read_ticket(){ 

        $this->template->load('templates/admin/template','public/tickets/ticket_read');
  }


}

/* End of file Tickets.php */
/* Location: ./application/controllers/Tickets.php */