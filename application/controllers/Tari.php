<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Tari extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $Akses = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    if (!$Akses) {
      $this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
			Login terlebih <strong>dahulu.</strong>.
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
      'Title' => 'Studitari - ',
      'subTitle' => 'Data Tari',
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row(),
      'dataTari' => $this->DB_Tari->getDataDance()
    ];
    $this->load->view('templatePages/header', $data);
    $this->load->view('viewTari/indexTari', $data);
    $this->load->view('templatePages/footer');
  }
  public function tambahData()
  {
    $data = [
      'Title' => 'Studitari - ',
      'subTitle' => 'Tambah Data Tarian',
      'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row()
    ];
    $this->form_validation->set_rules('nama_tari', 'Nama Tarian', 'required');
    $this->form_validation->set_rules('asal_tari', 'Asal Tarian', 'required');
    $this->form_validation->set_rules('jenis_tari', 'Jenis Tarian', 'required');
    $this->form_validation->set_rules('jumlah_penari', 'Jumlah Penari', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templatePages/header', $data);
      $this->load->view('viewTari/tambahDataTari', $data);
      $this->load->view('templatePages/footer');
    } else {
      $this->DB_Tari->addDataDance();
      redirect('Tari');
    }
  }
}
