<?php

$this->load->view('templates/auth_header');
$this->load->view('templates/system_header');
$this->load->view('templates/system_sidebar');
$this->load->view($content);
$this->load->view('templates/system_footer');
$this->load->view('templates/auth_footer');
?>
