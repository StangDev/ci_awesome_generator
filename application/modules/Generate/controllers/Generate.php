<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends MX_Controller {

	public function __construct()
  {
      parent::__construct();
			$this->load->library(array('session'));
      $this->load->helper('url');
      $this->load->helper('file');
      $this->load->helper('form');
			if (!$this->session->logged_in) {
				redirect('login', 'refresh');
			}
  }
	public function index()
	{
    $data = array(
      'Content_View' => 'Generate/generate_view',
  );

    $this->load->view('_Layout/_Layout_Portal_1A',$data);

  }
  public function formGen(Type $var = null)
  {
      $data = array(
        'Content_View' => 'Generate/generate_form_view'
    );

      $this->load->view('_Layout/_Layout_Portal_1A',$data);
  }
  public function AddDatabase()
  {
    
    $post =  json_decode($this->input->raw_input_stream);
    $post->id = $this->getGUID();
    echo json_encode($post);

    
  }
  public function AddRow()
  {
     print_r($_POST);


  }
  public function mkFolder($fname)
  {
    if (!file_exists('../application/modules/'.$fname)) {
      mkdir('../application/modules/'.$fname, 0777, true);
    }
    if (!file_exists('../application/modules/'.$fname.'/controllers')) {
      mkdir('../application/modules/'.$fname.'/controllers', 0777, true);
    }
    if (!file_exists('../application/modules/'.$fname.'/models')) {
      mkdir('../application/modules/'.$fname.'/models', 0777, true);
    }
    if (!file_exists('../application/modules/'.$fname.'/views')) {
      mkdir('../application/modules/'.$fname.'/views', 0777, true);
    }
  }
  function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}
 
}
