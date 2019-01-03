<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// allow_url_include=1;
		$requestURL = $this->defmodel->getFUSEKI();
		include "a.php";
		$data['dat'] = json_decode(request($requestURL),true);
		// echo printArray($responseArray);
		// echo $requestURL;	
		$data['kiri'] = 'user_view/home';
		$data['kanan'] = 'user_view/konten-kanan';
		$data['home'] = 'active';
		$data['genre'] = 'a';
		$data['help'] = 'a';
		$this->load->view('layout/main', $data);
	}
	public function test()
	{
		$data['page'] = 'user_view/daftar';
		$this->load->view('layout/user', $data);	
	}
	public function genrecari()
	{
		$i = $this->uri->segment(3);
		$re = $this->defmodel->genrerdf($i);
		$data['dat'] = json_decode(request($re),true);

	}
	public function genre()
	{
		include "a.php";
		$uri = $this->uri->segment(3);
		if ($this->uri->segment(3)=='') {
			$uri='wadadadwada';
		}
		$data['uri'] = $uri;
		$re = $this->defmodel->genregetrdf($uri);
		// echo "$re";
		$data['dsat'] = json_decode(request($re),true);
		// for ($i='a'; $i <= 'z' ; ++$i) { 
		// // 	// echo "$i";
		// $re[$i] = $this->defmodel->genregetrdf($i);
		// $data[$i] = json_decode(request($re[$i]),true);
		// if ($i=='z') {
		// 		break;
		// }
		// }
		// echo $re['a'];
		$data['genre'] = 'active';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['page'] = 'user_view/genrepage';
		$this->load->view('layout/user', $data);
	}
	public function search()
	{
		$data['ex'] = 1;
		include "a.php";
		$sea = $this->input->get('cari');
		if ($this->input->post('cari')!='') {
		$sea = $this->input->post('cari');
		}
		$sea = $this->defmodel->cari($sea);
		$data['sea'] = json_decode(request($sea),true);
		$data['genre'] = 'active';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['page'] = 'user_view/searchpage';
		$this->load->view('layout/user', $data);
	}		
	public function deskripsi()
	{
		include "a.php";
		$uri = $this->uri->segment(3);
		$data['uri'] = $this->uri->segment(3);
		$requestURL = $this->defmodel->getpagerdf($uri);
		// echo $requestURL;
		$data['dsat'] = json_decode(request($requestURL),true);
		$data['genre'] = 'a';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['page'] = 'user_view/deskripsi';
		$data['kanan'] = 'user_view/konten-kanan';
		$this->load->view('layout/deskr', $data);
	}
	public function selectedgenre()
	{
		$uri = $this->uri->segment(3);
		include "a.php";
		for ($i='a'; $i <= 'z' ; ++$i) { 
			// echo "$i";
		$re[$i] = $this->defmodel->taggetrdf($uri,$i);
		$data[$i] = json_decode(request($re[$i]),true);
		if ($i=='z') {
				break;
		}
		}
		$data['genre'] = 'active';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['page'] = 'user_view/genre';
		$data['kanan'] = 'user_view/konten-kanan';
		$this->load->view('layout/selected-genre', $data);
	}
	// public function search()
	// {
	// 	$data['genre'] = 'a';
	// 	$data['home'] = 'a';
	// 	$data['help'] = 'a';
	// 	$data['page'] = 'user_view/searchpage';
	// 	$data['kanan'] = 'user_view/konten-kanan';
	// 	$this->load->view('layout/search', $data);
	// }

	public function simpan()
	{
		$ur = $this->input->post('fav');
		if ($_SESSION['user']=='') {
			$this->session->set_flashdata('swel', 'value');
			redirect("home/deskripsi/$ur");
		}
		else
		{
			$this->db->where('username', $this->session->user);
			$user = $this->db->get('users')->result();
			foreach ($user as $key => $value) {
				$ud = $value->id_users;
			}
			// echo $ud;
			$idwiki = $ur;
			$iduser = $ud;
			// $insert = $this->input->post('insert');
			$date = date("d-m-Y");
			$this->mainmodel->inputfavorit($idwiki, $iduser, $date); 
			// echo "good";
		}
	}
	public function del()
	{
		$ur = $this->input->post('fav');
		if ($_SESSION['user']=='') {
			$this->session->set_flashdata('swel', 'value');
			redirect("home/deskripsi/$ur");
		}
		else
		{
			$this->db->where('username', $this->session->user);
			$user = $this->db->get('users')->result();
			foreach ($user as $key => $value) {
				$ud = $value->id_users;
			}
			$this->db->where('user', $ud);
			$this->db->where('wikiid', $ur);
			$this->db->delete('fav');
			$this->session->set_flashdata('swel4', 'value');
			redirect("home/deskripsi/$ur");
			// echo $ud;
			// echo "good";
		}
	}
	public function inputkomen()
	{
		$idwiki = $this->input->post('idwiki');
		$komen = $this->input->post('komen');
		$iduser = $this->input->post('iduser');
		$date = $this->input->post('date');
		$this->mainmodel->inputkomen($idwiki, $komen, $iduser, $date); 
	}


}
	