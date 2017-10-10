<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Orang_ajax_m extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function ambilorang()
  {
    $this->db->order_by('id','desc');
    $q = $this->db->get('orang');
    if ($q->num_rows() > 0) {
      return $q->result();
    } else {
      return false;
    }
  }

  public function simpanorang()
  {
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'phone' => $this->input->post('phone'),
      'gender' => $this->input->post('gender'),
      'alamat' => $this->input->post('alamat'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabkot' => $this->input->post('kabkot'),
      'catatan' => $this->input->post('catatan'),
    );
    $this->db->insert('orang',$data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function editorang()
  {
    $id = $this->input->get('id');
    $this->db->where('id',$id);
    $q = $this->db->get('orang');
    if ($q->num_rows()>0) {
      return $q->row();
    } else {
      return false;
    }
  }

  public function updateorang()
  {
    $id = $this->input->post('id_orang');
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'phone' => $this->input->post('phone'),
      'gender' => $this->input->post('gender'),
      'alamat' => $this->input->post('alamat'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabkot' => $this->input->post('kabkot'),
      'catatan' => $this->input->post('catatan'),
    );
    $this->db->where('id',$id);
    $this->db->update('orang',$data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function hapusorang()
  {
    $id = $this->input->get('id_orang');
    $this->db->delete('orang', array('id' => $id));
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
