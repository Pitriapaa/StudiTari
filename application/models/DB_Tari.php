<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Tari extends CI_Model
{
	public function Registrasi()
	{
		$dataGagal = [
			'Title' => 'Studitari ',
			'subTitle' => '- Register'
		];
		$gambar = $_FILES['profile'];
		$config['upload_path']          = 'assets/images/icon';
		$config['allowed_types']        = 'jpeg|jpg|png|svg';
		$config['max_size']             = 1000;
		$config['max_width']            = 2048;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('profile')) {
			$gambar = $this->upload->data('file_name');
		} else {
			$this->load->view('templatePages/header', $dataGagal);
			$this->load->view('viewLogin/register');
			$this->load->view('templatePages/footer');
		}
		$data = [
			'nama_depan' => $this->input->post('nama_depan', true),
			'nama_belakang' => $this->input->post('nama_belakang', true),
			'email' => $this->input->post('email', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_ARGON2ID),
			'konfirpassword' => password_hash($this->input->post('konfirpassword', true), PASSWORD_ARGON2_DEFAULT_THREADS),
			'profile' => $gambar
		];
		$this->db->insert('user', $data);
	}
	public function getDataUser()
	{
		return $this->db->get('user')->num_rows();
	}
	public function addDataDance()
	{
		$Modals = [
			'Title' => 'Studitari - ',
			'subTitle' => 'Tambah Data Tarian',
			'user' => $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row()
		];
		$gambar = $_FILES['gambar'];
		$config['upload_path']          = 'assets/images/gambarTari';
		$config['allowed_types']        = 'jpeg|jpg|png|svg';
		$config['max_size']             = 1000;
		$config['max_width']            = 2048;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('gambar')) {
			$gambar = $this->upload->data('file_name');
		} else {
			$this->load->view('templatePages/header', $Modals);
			$this->load->view('viewTari/tambahDataTari', $Modals);
			$this->load->view('templatePages/footer');
		}
		$data = [
			'nama_tari' => $this->input->post('nama_tari', true),
			'asal_tari' => $this->input->post('asal_tari', true),
			'jenis_tari' => $this->input->post('jenis_tari', true),
			'jumlah_penari' => $this->input->post('jumlah_penari', true),
			'gambar' => $gambar
		];
		$this->db->insert('daftartari', $data);
	}
	public function getDataDance()
	{
		return $this->db->get('daftartari')->result_array();
	}
	public function totalDataDance()
	{
		return $this->db->get('daftartari')->num_rows();
	}
}
