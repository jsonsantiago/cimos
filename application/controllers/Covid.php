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

		$data['lead_details'] = $this->Covid_model->get_lead_details($_GET['user_id']);
		$data['address'] = empty($data['lead_details']['address']) ? "" : nl2br($data['lead_details']['address']);

		$this->load->view('covid/cimos_mobile.php', $data);
	}

}