<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('encrypt');
    $this->load->model('login_m','l');
  }

  public function login()
	{
		$this->load->view('login');
	}

  public function register()
  {
    $password = $this->input->post('password');
    $hashed = $this->encrypt->encode($password);
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $hashed,
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
    );
    $q = $this->l->register($data);
    if ($q) {
      redirect('login');
    } else {
      echo "Gagal";
    }
  }

  public function loginVerif()
  {
    $q = $this->l->checkLogin();
    $pp = $this->input->post('password');
    if ($q != false) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $q->username;
      $p = $this->encrypt->decode($q->password);
      if ($pp == $p) {
        redirect(base_url('ver2'));
      } else {
        redirect('login');
      }
    } else {
      redirect('login');
    }
  }

  public function logout()
  {
    unset(
      $_SESSION['loggedin'],
      $_SESSION['username']
    );
    redirect('login');
  }

}
