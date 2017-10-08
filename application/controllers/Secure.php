<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Secure extends CI_Controller
{

  function index()
  {
    redirect('table');
  }
}
