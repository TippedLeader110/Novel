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
	public function genre()
	{
		$data['genre'] = 'active';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['page'] = 'user_view/genre';
		$this->load->view('layout/user', $data);
	}	
	public function profile()
	{
		$data['page'] = 'user_view/profile';
		$this->load->view('layout/main', $data);
	}	
	public function deskripsi()
	{
		$data['page'] = 'user_view/deskripsi';
		$this->load->view('layout/main', $data);
	}

}
	