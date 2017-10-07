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
    $this->db->insert('orang',$data);
    return true;
  }


}
