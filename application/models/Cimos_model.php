<?php

class Cimos_model Extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Europe/London');
	}

	
}
?>