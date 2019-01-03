<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function inputfavorit($idwiki, $iduser, $date)
	{
		$data = array('wikiid' => $idwiki, 'user' => $iduser, 'tanggal' => $date);
		$this->db->insert('fav', $data);
		$this->session->set_flashdata('swel2', 'value');
		redirect("home/deskripsi/$idwiki");
	}

	public function inputkomen($idwiki, $komen, $iduser, $date)
	{
		$data = array('idwiki' => $idwiki, 'komen' => $komen, 'iduser' => $iduser, 'tanggal' => $date);
		$this->db->insert('komentar', $data);
		redirect('');
	}
}
 ?>