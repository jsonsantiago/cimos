<?php

class Covid_model Extends CI_Model {
	public function __construct()
	{
		
		date_default_timezone_set('Europe/London');
	}

	public function save_covid_statement($data)
	{
		$this->db->insert('covid_declaration', $data);
		return $this->db->insert_id();
	}

	public function get_lead_details($user_id)
	{
		$aer = $this->load->database("aer", TRUE);
		
		$date= date('Y-m-d');
		$time= date('H:i:s');

		$query_string="SELECT lead.first_name, lead.title,lead.last_name, lead.l_id, lead.address 
		FROM leads lead LEFT JOIN appointments_ff app ON app.l_id= lead.l_id WHERE app.`status`= 1 
		AND app.date= '$date' 
		AND '$time' BETWEEN app.time_start AND app.time_end AND app.user_id= $user_id";

		$query = $aer->query($query_string);		
		$result= $query->row_array();

		return $result;
		
	}

	public function get_lead_dtls($lid)
	{
		$aer = $this->load->database("aer", TRUE);
		$aer= $this->load->database();
		$aer->select('*')
			->from('leads')
			->where('l_id', $lid);
		$query = $aer->get();
		return $query->row_array();
		
	}
}
?>