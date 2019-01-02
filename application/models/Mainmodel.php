<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function inputfavorit($idwiki, $insert, $iduser, $date)
	{
		$data = array('idwiki' => $idwiki, 'insert' => $insert, 'iduser' => $iduser, 'tanggal' => $date);
		$this->db->insert('favorit', $data);
		redirect('');
	}

	public function inputkomen($idwiki, $komen, $iduser, $date)
	{
		$data = array('idwiki' => $idwiki, 'komen' => $komen, 'iduser' => $iduser, 'tanggal' => $date);
		$this->db->insert('komentar', $data);
		redirect('');
	}
}
 ?>