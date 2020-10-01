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
		if(isset($_FILES['photo_file'])){

			$file_name = uniqid().'_'.$_FILES['photo_file']['name'];

			$config['upload_path']   = realpath(APPPATH . '../uploads/covid/');
			$config['allowed_types'] = 'png|jpg|jpeg|gif';
			$config['file_name']     = $file_name;

			$this->load->library('upload', $config);
			$upload_status = $this->upload->do_upload('photo_file');
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

	public function get_lead_dtls()
	{
		$data= $this->Covid_model->get_lead_dtls($this->input->post('lead_id'));
		$lead= array();

		if(!empty($data))
		{
			$status= true;
			$lead= array(
				'name' => $data['title'] ." ". $data['first_name']." ". $data['last_name'],
				'address' => nl2br($data['address'])
			);
		}
		else
		{
			$status= false;
		}

		$response = array(
			'status'  => $status,
			'data'	 => $lead
		);

		echo json_encode($response);
	}

}