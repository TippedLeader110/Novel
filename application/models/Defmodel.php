<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defmodel extends CI_Model {

	public function read()
	{
		$query = $this->db->get('dataset');
		return $query->result();
	}
}
