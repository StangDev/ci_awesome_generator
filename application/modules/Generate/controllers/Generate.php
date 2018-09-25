<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends MX_Controller {

	public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('file');
    }
	public function index()
	{
    $data = array(
      'Content_View' => 'Generate/Generate_View'
  );
  
    $this->load->view('_Layout/_Layout_Portal_1A',$data);
    //$this->load->view('welcome_message');
   
  }
  public function generate()
    {
     print_r($_POST);
      $nProject = $_POST['nProject'];
      $nDatabase = $_POST['nDatabase'];
      $dataView = $this->indexView($_POST['nPlugin']);
      $this->mkFolder($nProject);
      $this->mkController($nProject);
      $this->mkModel($nProject,$nDatabase);
      $this->mkView( $nProject,$dataView);
      
      
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
  public function mkController($fname)
  {
    $dataCon = '<?php
    class '.$fname.' extends MX_Controller {
      public function __construct()
      {
        parent::__construct();
        $this->load->helper("form");
        $this->load->helper("url");
        #$this->load->model("'.$fname.'_model"); //config DB ก่อนเปิดใช้
      }
      public function index()
      {
        $this->load->view("'.$fname.'_view");
      }
    }
    ';
    if ( ! write_file('../application/modules/'.$fname.'/controllers/'.ucfirst($fname).'.php', $dataCon))
    {
            echo 'Unable to write the file';
    }
    else
    {
            echo 'File written!';
    }
  }
  public function mkModel($fname, $nDatabase)
  {
    if ( $nDatabase != '') {
      $data = '
        <?php
    defined("BASEPATH") OR exit("No direct script access allowed");

    class '.$fname.' extends CI_Model{

      public function __construct()
      {
        parent::__construct();

    ';
        switch ($nDatabase) {
          case '0':
           $data .= '$this->mysql = $this->load->database ( "mysql", TRUE );';
            break;
          case '1':
          $data .= '$this->oracle = $this->load->database ( "oracle", TRUE );';
            break;
          case '2':
          $data .= '$this->mssql = $this->load->database ( "mssql", TRUE );'; 
            break;
        }
    $data .= '
      }

    }
        
    ';
    if ( ! write_file('../application/modules/'.$fname.'/models/'.ucfirst($fname).'_model.php', $data))
    {
            echo 'Unable to write the file';
    }
    else
    {
            echo 'File written!';
    }
    }
    
  }
  public function mkView($fname,$data)
  {
    if ( ! write_file('../application/modules/'.$fname.'/views/'.ucfirst($fname).'_view.php', $data))
    {
            echo 'Unable to write the file';
    }
    else
    {
            echo 'File written!';
    }
  }
  public function indexView($arr=array())
  {
    $body = '
    <?php
    defined("BASEPATH") OR exit("No direct script access allowed");
    ?><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Welcome to ZT Project</title>
    
    ';
    foreach ($arr as $key => $value) {
        #css
          switch ($value) {
            case '2':
              $body .= ' 
              <link href="<?=base_url()?>assets/lib/bootstrap4/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">';
              break;
            case '3':
              $body .= ' 
              <link href="<?=base_url()?>assets/lib/DataTables/css/jquery.dataTables.css" media="screen" rel="stylesheet" type="text/css">';
              break;
            case '4':
              $body .= ' 
              <link href="<?=base_url()?>assets/lib/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" media="screen" rel="stylesheet" type="text/css">';
              break;
          }
    }
     $body .= '
          </head>
          <body>
        <div class="container-fluid">
          <div class="card text-center">
          <div class="card-header">
            Hub.ztdev.com
          </div>
          <div class="card-body">
            <h1 class="card-title">Hello world</h1>
          </div>
          <div class="card-footer text-muted">
          </div>
        </div>
        </div>
          </body>
    ';
    foreach ($arr as $key => $value) {
      #js
        switch ($value) {
          case '0':
            $body .= '
            <script src="<?=base_url()?>assets/lib/jquery/dist/jquery.min.js"></script>';
            break;
          case '6':
            $body .= '
            <script src="<?=base_url()?>assets/lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>';
            break;
            break;
          case '1':
            $body .= '
            <script src="<?=base_url()?>assets/lib/bootstrap4/js/bootstrap.min.js"></script>';
            break;
          case '2':
            $body .= '
            <script src="<?=base_url()?>assets/lib/jquery.multi-select/js/jquery.multi-select.js"></script>';
            break;
          case '3':
          $body .= '
          <script src="<?=base_url()?>assets/lib/DataTables/js/jquery.dataTables.js"></script>';
            break;
          case '5':
          $body .= '
          <script src="<?=base_url()?>assets/lib/formBuilder/dist/form-builder.min.js"></script>
          <script src="<?=base_url()?>assets/lib/formBuilder/dist/form-render.min.js"></script>';
            break;
        }
     }
    $body .= '
    </html>';
    
    return $body;
  }
}
