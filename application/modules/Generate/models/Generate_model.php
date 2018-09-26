<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User_model class.
 *
 * @extends CI_Model
 */
class Generate_model extends CI_Model  {

	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

  public function addDatabase($post)
  {
    $data = array(
        'id' => $post->id,
        'modules' => $post->modules,
        'table_name' => $post->table,
        'active' =>  $post->active
    );

    $this->db->insert('table_config', $data);
    $this->db->where('id',$post->id);
    $num = $this->db->count_all_results('table_config');
    if ($num>0) {
      return 'ok';
    }else {
      return 'error';
    }

  }
  public function getDatabase()
  {
    $query = $this->db->get('table_config');
    return $query->result_array();
  }
  public function getDatabaseById($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('table_config');
    return $query->result_array();
  }
  public function updateDatabase($put)
  {
    $data = array(
        'modules' => $put->modules,
        'table_name' => $put->table,
        'active' =>  $put->active
    );
    $this->db->set($data);
    $this->db->where('id', $put->id);
    $this->db->update('table_config');
    return 'update item';
  }
  public function deleteDatabase($delete)
  {
    $this->db->where('id', $delete->id);
    $this->db->delete('table_config');
    $this->db->where('id',$delete->id);
    $num = $this->db->count_all_results('table_config');
    if ($num<=0) {
      return 'item is delete';
    }else {
      return 'error';
    }
  }


}
