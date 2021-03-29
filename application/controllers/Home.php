<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('partial/main_nav');
		$this->load->view('web-mahasiswa-coding/v_home');
		$this->load->view('partial/footer');
	}
}