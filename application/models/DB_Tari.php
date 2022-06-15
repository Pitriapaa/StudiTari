<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Tari extends CI_Model
{
	public function Registrasi()
	{
		$data = [
			'nama_depan' => $this->input->post('nama_depan', true),
			'nama_belakang' => $this->input->post('nama_belakang', true),
			'email' => $this->input->post('email', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_ARGON2ID),
			'konfirpassword' => password_hash($this->input->post('konfirpassword', true), PASSWORD_ARGON2_DEFAULT_THREADS)
		];
		$this->db->insert('user', $data);
	}
}
