<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
		$this->load->model('user_m');
		$this->load->library('form_validation');
		

		$rules = $this->user_m->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('admin/login/index');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if($this->user_m->login($username, $password)){
			redirect('/');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		}
		$this->load->view('admin/login/index');
	}
	public function logout()
	{
		$this->load->model('user_m');
		$this->user_m->logout();
		redirect(site_url());
	}
}
