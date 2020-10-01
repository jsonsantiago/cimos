<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('Europe/London');
		$this->load->model('Covid_model');
	}

	public function index()
	{
		$data['company_id'] = $_GET['comp_id'];
		$data['user_id'] = $_GET['user_id'];
		$this->load->view('covid/cimos_mobile.php', $data);
	}

}