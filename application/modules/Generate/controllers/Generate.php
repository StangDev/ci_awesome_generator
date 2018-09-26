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
			$this->load->model('Generate_model');
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
  public function formGen($id='')
  {
		if (!empty($id)) {
				$data = array(
        'Content_View' => 'Generate/generate_form_view',
				'rowdata' => $data = $this->Generate_model->getDatabaseById($id)
    	 );

      $this->load->view('_Layout/_Layout_Portal_1A',$data);
		}else {
		  show_404();
		}

  }
  public function insertDatabase()
  {
    if ($this->input->method()=='post') {
			$post =  json_decode($this->input->raw_input_stream);
	    $post->id = $this->getGUID();
	    $mss = $this->Generate_model->addDatabase($post);
			echo json_encode(array('mssage' => $mss, ));
    }else {
    	show_404();
    }
  }
	public function getDatabase($id='')
	{
		if ($this->input->method()=='get') {
			if (!empty($id)) {
				$data = $this->Generate_model->getDatabaseById($id);
				echo json_encode($data);
			}else {
				$data = $this->Generate_model->getDatabase();
				echo json_encode($data);
			}
    }else {
    	show_404();
    }

	}
	public function updateDatabase()
	{
		if ($this->input->method()=='put') {
			$put =  json_decode($this->input->raw_input_stream);
			$mss = $this->Generate_model->updateDatabase($put);
			echo json_encode(array('mssage' => $mss, ));
		}else {
			show_404();
		}

	}
	public function deleteDatabase()
	{
		if ($this->input->method()=='delete') {
			$delete =  json_decode($this->input->raw_input_stream);
			$mss = $this->Generate_model->deleteDatabase($delete);
			echo json_encode(array('mssage' => $mss, ));
		}else {
			show_404();
		}

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
