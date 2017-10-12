<?php

class Sendmail extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('string');

  }

  public function send($email,$token)
  {

    $config['mailtype'] = 'html';
    $this->load->library('email',$config);
    $this->email->set_newline("\r\n");
    $this->email->from('pengurus.warungtegal@gmail.com','Pengurus warungtegal.id');
    $this->email->to($email);
    $this->email->subject('Njajal lagi');
    $this->email->message('<a href="'.base_url().$email.'/'.$token.'">Token ini </a>');
    if ($this->email->send()) {
      echo "Berhasil kirim";
    } else {
      echo "Gagal jhon";
    }
  }

  public function string()
  {
    echo random_string('alnum',16);
  }

  public function cektoken($token)
  {
    echo $token;
  }
}
