<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid_declaration extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('Europe/London');
		$this->load->model('Covid_model');
	}

		
	public function save_covid_statement()
	{
		$status  = false;
		$datenow = date('Y-m-d H:i:s');

		//Upload photo to server
		$file_name = '';
		if($this->input->post('photo_raw')){
			$photo     = $this->input->post('photo_raw');
			$photo     = str_replace('data:image/png;base64,', '', $photo);
			$photo     = str_replace(' ', '+', $photo);
			$photo_raw = base64_decode($photo);
			$file_name = uniqid(). '.png';

			$upload_file_path = APPPATH . '../upload_files/covid/'. $file_name;
			file_put_contents($upload_file_path, $photo_raw);
		}

		$data = array(
			'lead_id'			 => $this->input->post('lead_id'),
			'normal_temp'		 => $this->input->post('normal_temp'),
			'no_contact_with_positive' => $this->input->post('no_contact_with_positive'),
			'with_PPE'			 => $this->input->post('with_PPE'),
			'no_other_symptoms'	 => $this->input->post('no_symptoms'),
			'submitted'			 => $datenow,
			'location_lat'		 => $this->input->post('latitude'),
			'location_long'	     => $this->input->post('longitude'),
			'photo_name'         => $file_name
		);

		$this->Covid_model->save_covid_statement($data);
		$status = true;

		$response = array(
			'success'  => $status
		);
	
		echo json_encode($response);
	}

}