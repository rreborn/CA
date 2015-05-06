<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class publik extends CI_Controller {
	public function index() {
		echo $this->session->userdata('hak_akses');
		if($this->session->userdata('hak_akses') == null) {
			$this->load->view('home');
		}
		else if($this->session->userdata('hak_akses') == 1){
			redirect(base_url() . 'publik/member');
		}
	}

	public function masuk() {
		$this->load->view('login');
	}

	public function submit_masuk() {
		$surel = $this->input->post('email');
		$pass = $this->input->post('password');

		if($surel && $pass){
			$akun = $this->akun->autentikasi($surel,$pass);
			if($akun['hak_akses'] != 1){
				$userdata = array('id_akun' => $akun['id'], 'hak_akses' => $akun->hak_akses);
				$this->session->set_userdata($userdata);
				$this->index();
			}
			else{
				$this->masuk();
			}
		} 
		else{
			$this->masuk();
		}
	}

	public function keluar(){
		$this->session->unset_userdata('hak_akses');
		$this->session->unset_userdata('id');
		$this->masuk();
	}

	public function member(){
		$this->load->view('member');
	}
}
?>