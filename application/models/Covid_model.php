<?php

class Covid_model Extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Europe/London');
	}

	public function save_covid_statement($data)
	{
		$this->db->insert('covid_declaration', $data);
		return $this->db->insert_id();
	}

	
}
?>