<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Tablemodel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function tampil()
  {
    $query = $this->db->get('orang');
    return $query->result_array();
  }

  public function hapus($id)
  {
    $this->db->delete('orang', array('id' => $id));
    return true;
  }
}
