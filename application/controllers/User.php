<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function login()
	{
		$data['page'] = 'user_view/login';
		$this->load->view('layout/user', $data);	
	}
	public function daftar()
	{
		$data['page'] = 'user_view/daftar';
		$this->load->view('layout/user', $data);
	}
	public function daftarpros()
	{
		$email = $this->input->post('email');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$pass = md5($pass);
		$this->form_validation->set_rules('user', 'Username', 'required[]|is_unique[users.username]',array('is_unique' => '%s already used'));
		$this->form_validation->set_rules('pass', 'Password', 'required[]');
		$this->form_validation->set_rules('email', 'Email', 'required[]|is_unique[users.email]',array('is_unique' => '%s already used'));

		if ($this->form_validation->run()==FALSE) {
			$data['page'] = 'user_view/daftar';
			$this->load->view('layout/user', $data);
		}
		else{
		$da = array('email' => $email, 'username' => $user, 'password' => $pass );
		$this->db->insert('users', $da);
		$this->session->set_flashdata('swel', 'value');
		redirect('user/login');
		}

	}
	public function profile()
	{	
		$us = $this->session->user;
		$this->db->where('username', $us);
		$ha = $this->db->get('users')->result();
		foreach ($ha as $key => $value) {
			$dd = $value->id_users;
		}

		$this->db->where('user', $dd);
		$data['da'] = $this->db->get('fav')->result();
		$data['genre'] = 'a';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['kiri'] = 'user_view/profile';
		$this->load->view('layout/profile', $data);	
	}
	public function editdata()
	{	
		$data['genre'] = 'a';
		$data['home'] = 'a';
		$data['help'] = 'a';
		$data['kiri'] = 'user_view/editdata';
		$this->load->view('layout/profile', $data);	
	}

	public function loginpros()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$pass =md5($pass);
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$row = $this->db->get('users')->num_rows();
		echo $row;
		if ($row==0) {
			$this->session->set_flashdata('swel2', 'value');
			redirect('user/login', location);
		}
		else
		{
			$this->db->where('username', $user);
			$b = $this->db->get('users')->result();
			foreach ($b as $key => $value) {
				$user = $value->username;
			}
			$this->session->user = $user;
			$this->session->set_flashdata('swel', 'value');
			redirect('home', location);
		}
	}
	public function beta()
	{
		$this->session->set_flashdata('swel', 'value');
		redirect('home', location);
	}
	public function logout()
	{
		$this->session->set_flashdata('swel11', 'value');
		session_destroy();
		redirect('home', location);
	}

}
