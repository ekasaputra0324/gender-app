<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		if(!$this->user_m->current_user()){
			redirect('auth/login');
		}
	}
	public function index()
	{
		$user = $this->user_m->current_user();
		
		$this->data['content'] = 'admin/dashboard/index';
		$this->data['page'] = 'dashboard';
		$this->data['user'] = $user;
		$this->data['role'] = $user->role;
		$this->data['title'] = 'Dashboard | Recording Gender'; 
		$this->load->view('templates/main', $this->data);
	}
}
