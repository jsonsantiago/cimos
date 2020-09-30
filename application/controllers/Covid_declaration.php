<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid_declaration extends CI_Controller {

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

	
	public function save_covid_statement()
	{
		$status= false;
		$datenow= date('Y-m-d H:i:s');

		$data= array(
			'lead_id'			 => $this->input->post('lead_id'),
			'temperature'		 => $this->input->post('temperature'),
			'normal_temp'		 => $this->input->post('normal_temp'),
			'no_cough'			 => $this->input->post('no_cough'),
			'no_taste_smell_loss'=> $this->input->post('no_sense'),
			'no_other_symptoms'	 => $this->input->post('no_symptoms'),
			'submitted'			 => $datenow,
			'location_lat'		 => $this->input->post('latitude'),
			'location_long'	     => $this->input->post('longitude')
		);

		$this->Cimos_model->save_covid_statement($data);
		$status = true;

		$response = array(
			'success'  => $status
		);
	
		echo json_encode($response);


	}

}