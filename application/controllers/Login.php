<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DB_Tari');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data = [
			'Title' => 'Studitari - ',
			'SubTitle' => 'Login'
		];
		$Akses = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		if ($Akses) {
			redirect('Dashboard');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templateLogin/header', $data);
			$this->load->view('viewLogin/login');
			$this->load->view('templateLogin/footer');
		} else {
			$this->validasiLogin();
		}
	}
	private function validasiLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', array('email' => $email))->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data['email'] = $user['email'];
				$this->session->set_userdata($data);
				redirect('Dashboard');
			} else {
				$this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
				Password anda  <strong>salah</strong>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
				redirect('Login');
			}
		} else {
			$this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
			Akun anda belum  <strong>terdaftar</strong>.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Login');
		}
	}
	public function register()
	{
		$data = [
			'Title' => 'Studitari - ',
			'SubTitle' => 'Register'
		];
		$Akses = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		if ($Akses) {
			redirect('Dashboard');
		}
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[konfirpassword]');
		$this->form_validation->set_rules('konfirpassword', 'Konfirmasi Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templateLogin/header', $data);
			$this->load->view('viewLogin/register');
			$this->load->view('templateLogin/footer');
		} else {
			$this->DB_Tari->Registrasi();
			$this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
			<span class="badge badge-pill badge-success">Success</span>
			Akun anda berhasil <strong>terdaftar</strong>.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Login');
		}
	}
	public function Logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('Message', '<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
			Anda berhasil <strong>logout</strong>.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('Login');
	}
}
