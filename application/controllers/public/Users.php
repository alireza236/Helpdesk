<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->library('form_validation'); 
		 $this->load->model('public/user_model'); 
		 $this->auth->cekUserLogin();
       date_default_timezone_set('Asia/Jakarta');
     //$this->auth->cekRules('admin');
	}

	public function index()
	{
		 $this->template->load('templates/admin/template','public/user/user_list');
	}

	public function create(){
     
        $data = array(
              'action' => site_url('public/users/user_register'),
              'username' => set_value('username'),
              'level' => set_value('level'),
              'password' => set_value('password'),
              'fullname' => set_value('fullname'),
              'status' => set_value('status'),
              'email' => set_value('email'),
              'Telp' => set_value('Telp'),
               
           );
         $this->template->load('templates/admin/template','public/user/user_add',$data);    
	}

	public function user_register(){
		 $this->form_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
		    //$id_user    = $this->input->post('id');
		    $username   = $this->input->post('username',TRUE);
		    $password   = $this->input->post('password',TRUE);
		    $level      = $this->input->post('level',TRUE);
        $fullname   = $this->input->post('fullname',TRUE);
		    $status     = $this->input->post('status',TRUE);
		    $email      = $this->input->post('email',TRUE);
		    $Telp       = $this->input->post('Telp',TRUE);
		    $email_code = sha1($username + microtime());

            $this->user_model->register_user($username,$password,$level,$fullname,$status,$email,$Telp,$email_code);
            //$this->user_model->update_akses_user($id_user);
            $this->session->set_flashdata('message_text', 'Tambah Data Sukses');
            redirect(site_url('public/users'));
        }
	}

    function form_rules() {
        $this->form_validation->set_rules('username', ' ', 'trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('password', ' ', 'trim|required');
        $this->form_validation->set_rules('level', ' ', 'trim|required');
        $this->form_validation->set_rules('fullname', ' ', 'trim|required');
        $this->form_validation->set_rules('status', ' ', 'trim|required');
        $this->form_validation->set_rules('email', ' ', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('Telp', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


   public function edit_user($id){
      $row = $this->user_model->user_data($id);
      if ($row) {
        $data = array(
            'action'=> site_url('public/users/action_update_user'),
            'id' => set_value('id',$row->id),
            'username' => set_value('username',$row->username),
            'password' => set_value('password',$row->password),
            'level' => set_value('level',$row->level),
            'fullname' => set_value('fullname',$row->fullname),
            'status' => set_value('status',$row->status),
            'email' => set_value('email',$row->email),
            'Telp' => set_value('Telp',$row->Telp),
        );
            $this->template->load('templates/admin/template','public/user/user_edit',$data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('public/users'));
        }
    }

    public function action_update_user() {
        $this->form_rules_edit();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_user($this->input->post('id', TRUE));
        } else {
          $user_id = $this->input->post('id',TRUE);
          $data = array(
                      'username' => $this->input->post('username',TRUE),
                      'password' => $this->input->post('password',TRUE),
                      'level' => $this->input->post('level',TRUE),
                      'fullname' => $this->input->post('fullname',TRUE),
                      'status' => $this->input->post('status',TRUE),
                      'email' => $this->input->post('email',TRUE),
                      'Telp' => $this->input->post('Telp',TRUE),
                      'email_code' => sha1($this->input->post('username',TRUE) + microtime()),
                      'time' => time(),
                      'ip' => $_SERVER['REMOTE_ADDR'],
                    );

            $this->user_model->update_user($user_id,$data);
            //$this->user_model->update_akses_user($user_id);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('public/users'));
        }
    }

      function form_rules_edit() {
        $this->form_validation->set_rules('username', ' ', 'trim|required');
        $this->form_validation->set_rules('password', ' ', 'trim|required');
        $this->form_validation->set_rules('level', ' ', 'trim|required');
        $this->form_validation->set_rules('fullname', ' ', 'trim|required');
        $this->form_validation->set_rules('status', ' ', 'trim|required');
        $this->form_validation->set_rules('email', ' ', 'trim|required');
        $this->form_validation->set_rules('Telp', ' ', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function getJson(){
    
        $no = 0;
        $row = $this->user_model->getJson();
        foreach ($row as $rw) {
           if ($rw->status =='aktif'){
                $status='Aktif';
                $label ='primary';
          }else{
                $status='Blokir';
                $label ='danger';
          }
        $data[]= array(
                        $no++,
                        //$rw->fullname,
                        $rw->username,
                        $rw->email,
                        $rw->Telp,
                        date('d-M-Y H:i', $rw->time),
                        $rw->level,
                        '<span class="label label-'.$label.'">'.$status.'</span>',
                        "<ul class=\"icons-list\"><li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu9\"></i></a><ul class=\"dropdown-menu dropdown-menu-right\"><li><a href=".base_url('public/users/edit_user')."/$rw->id><i class=\"icon-file-pdf\"></i>Edit</a></li><li><a href=".base_url('public/users/')."/$rw->id onclick=\"javascript: return confirm('Anda Yakin !')\"><i class=\"icon-file-excel\"></i>Delete</a></li>",
                       );
    
    $row = array('aaData' => $data);
        //echo  json_encode($row);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
       }
    }

}


/* End of file Users.php */
/* Location: ./application/controllers/Users.php */