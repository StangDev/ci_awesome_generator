<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('file');
    }
  public function index()
  {
    $data = array(
      'Content_View' => 'Admin/Login_view'
  );
  
    $this->load->view('_Layout/_Layout_Portal_Login',$data);
  }
}    