<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->data['content'] = 'admin/dashboard/index';
		$this->load->view('templates/main', $this->data);
	}
}
