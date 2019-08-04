<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	 public function __construct()
     {
        parent::__construct();
        /* 
         session_start();
         if ($this->session->userdata('user_is_login') == FALSE) {
          redirect('login','refresh');
         } 
         */
     }
}

class Admin_Controller extends MY_Controller
{
	 public function __construct()
     {
         parent::__construct();

         //Do your magic here

     }
	 
}

 
 