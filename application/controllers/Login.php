<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$pesan = array('success'=>false);

class Login extends CI_Controller
{


  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('encrypt');
    $this->load->model('login_m','l');
    $this->load->helper('string');
    $this->$msg =& $pesan ;
  }

  public function login()
	{

		$this->load->view('login');
	}

  public function register()
  {
    $password = $this->input->post('password');
    $hashed = $this->encrypt->encode($password);
    $token = random_string('alnum',16);
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $hashed,
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'token' => $token,
      'active' => 'F'
    );
    $q = $this->l->register($data);
    if ($q) {
      $this->msg['success'] = true;
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
        redirect(base_url('ver1'));
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
