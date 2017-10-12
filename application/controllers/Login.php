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

    if ($this->l->checkUser($this->input->post('username'))) {
      $data = array(
        'username' => $this->input->post('username'),
        'password' => $hashed,
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'token' => $token,
        'active' => 'F'
      );
      $q = $this->l->register($data);
      $msg['success'] = false;
      if ($q) {
        $msg['success'] = true;
        echo json_encode($msg);
      }
    } else {
      echo json_encode($msg);
    }

  }

  public function loginVerif()
  {
    $msg['success'] = '';
    $q = $this->l->checkLogin();
    $pp = $this->input->post('password');
    if ($q != false) {

      $p = $this->encrypt->decode($q->password);
      if ($pp == $p) {
        if ($q->active == 'T') {
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $q->username;
          $msg['success'] = 'login';
          echo json_encode($msg);
        } else {
          $msg['success'] = 'token';
          echo json_encode($msg);
        }
      } else {
        $msg['success'] = 'password';
        echo json_encode($msg);
      }
    } else {
      $msg['success'] = 'username';
      echo json_encode($msg);
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

  public function aktifasi($username,$token)
  {
    $q = $this->l->aktifasi($username,$token);
    if ($q == true) {
      echo "Berhasil aktifasi";
    } else {
      echo "Gagal aktifasi";
    }
  }

}
