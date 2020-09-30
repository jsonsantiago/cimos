<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('Europe/London');
		$this->load->model('Cimos_model');
	}

	function _remap($comp_id) {
        $this->index($comp_id);
    }

	public function index($comp_id)
	{
		$data['company_id'] = $comp_id;
		$this->load->view('cimos/cimos_mobile.php', $data);
	}

}