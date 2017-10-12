<?php

/**
 *
 */
class Login_m extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function register($data)
  {
    $this->db->insert('user',$data);
    return true;
  }

  public function checkLogin()
  {
    $username = $this->input->post('username');
    $this->db->where('username',$username);
    $q = $this->db->get('user');
    if ($q->num_rows() > 0) {
      return $q->row();
    } else {
      return false;
    }
  }

  public function checkUser($username)
  {
    $this->db->where('username',$username);
    $q = $this->db->get('user');
    if ($q->num_rows() > 0) {
      return false;
    } else {
      return true;
    }
  }

  public function aktifasi($username,$token)
  {
    $this->db->where('username',$username);
    $q = $this->db->get('user');
    if ($q->num_rows() > 0) {
      $data = array('active' => 'T');
      $this->db->update('user',$data);
      return true;
    } else {
      return false;
    }
  }
}
