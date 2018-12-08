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
		$data['page'] = 'user_view/home';
		$this->load->view('layout/main', $data);
	}
	public function login()
	{
		$data['page'] = 'user_view/login';
		$this->load->view('layout/main', $data);	
	}
	public function daftar()
	{
		$data['page'] = 'user_view/daftar';
		$this->load->view('layout/main', $data);
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
