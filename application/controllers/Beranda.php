<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('bootstrap/V_topbar');
    $this->load->view('user/V_beranda');
    $this->load->view('bootstrap/V_footer');
  }

}


/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */