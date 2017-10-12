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
    if (!isset($_SESSION['loggedin'])) {
      $this->load->view('login');
    } else {
      redirect(base_url('ver1'));
    }

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

      if ($q) {
        $config['mailtype'] = 'html';
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('pengurus.warungtegal@gmail.com','Pengurus warungtegal.id');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Email Aktifasi');
        $this->email->message('Silahkan klik <a href="'.base_url().'login/aktifasi/'.$this->input->post('username').'/'.$token.'">aktifasi </a>');

        if ($this->email->send()) {
          $q = $this->l->register($data);
          $msg['success'] = true;
          echo json_encode($msg);
        } else {
          $msg['success'] = false;
          echo json_encode($msg);
        }

      }
    } else {
      $msg['success'] = false;
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
      redirect('login');
    } else {
      echo 'Maaf username atau token tidak tersedia silahkan <a href="'.base_url('login').'">mendaftar</a>';
    }
  }

}
