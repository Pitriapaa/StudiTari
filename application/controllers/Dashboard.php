<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

  }
}
