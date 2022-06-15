<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $Akses = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    if (!$Akses) {
      $this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
			Login terlebih <strong>dahulu.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
      redirect('Login');
    }
  }
  public function index()
  {
    $data = [
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row(),
      'Title' => 'Studitari - ',
      'subTitle' => 'Dashboard',
      'totalUser' => $this->DB_Tari->getDataUser(),
      'dataTari' => $this->DB_Tari->getDataDance(),
      'totalDance' => $this->DB_Tari->totalDataDance()
    ];
    $this->load->view('templatePages/header', $data);
    $this->load->view('viewDashboard/Dashboard', $data);
    $this->load->view('templatePages/footer');
  }
}
