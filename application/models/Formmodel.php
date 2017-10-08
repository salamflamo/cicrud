<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Formmodel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function tambah()
  {
    $data = array(
      'nik'       => $this->input->post('nik'),
      'nama'      => $this->input->post('nama'),
      'phone'     => $this->input->post('phone'),
      'gender'    => $this->input->post('gender'),
      'alamat'    => $this->input->post('alamat'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabkot'    => $this->input->post('kabkot'),
      'catatan'   => $this->input->post('catatan'),
    );
    $id = $this->input->post('id');
    if (isset($id)) {
      $this->db->where('id',$id);
      $this->db->update('orang',$data);
      return true;
    } else {
      $this->db->insert('orang',$data);
      return true;
    }
  }

  public function edit()
  {
    $id = $this->input->post('id');
    return $this->db->get_where('orang', array('id' => $id))->row_array();
  }


}
