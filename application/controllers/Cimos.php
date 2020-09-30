<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cimos extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Cimos_model');
	}

	public function index()
	{
		$this->load->view('cimos/cimos_mobile.php');
	}

}