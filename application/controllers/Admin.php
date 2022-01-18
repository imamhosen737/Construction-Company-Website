<?php
class Admin extends CI_Controller{

	public function index(){
		// $this->load->model('FrontModel');
		$data['general_data'] = $this->FrontModel->get_general();
		$data['proj_data'] = $this->FrontModel->projects();
		$data['team_member'] = $this->FrontModel->team_data();
		$data['client'] = $this->FrontModel->client_data();
		$data['slider_data'] = $this->FrontModel->slider_info();
		$data['about_data'] = $this->FrontModel->about();
		$this->load->view('home', $data);
		$this->load->view('footer');
		// $this->load->view('header');
	}

	public function slider()
	{
		$this->load->model('FrontModel');
		$data['slider_data'] = $this->FrontModel->slider_info();
		$this->load->view('home',$data);
	}

	public function about(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$data['general_data'] = $this->FrontModel->get_general();
		$about_data['about_data'] = $this->FrontModel->about();
		$this->load->view('about', $about_data);
		$this->load->view('footer',$data);
		// $this->load->view('header', $data);
	}

	public function contact(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('contact');
		$this->load->view('footer',$data);
	}

	public function projects(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$projects_data['proj_data'] = $this->FrontModel->projects();
		// $data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('projects', $projects_data);
		$this->load->view('footer',$data);
	}

	public function team(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$data['general_data'] = $this->FrontModel->get_general();
		$team_data['team_member'] = $this->FrontModel->team_data();
		$this->load->view('team',$team_data);
		$this->load->view('footer',$data);
	
	}

	public function service(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('service');
		$this->load->view('footer',$data);
	}
	
	public function single_blog(){
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('header',$data);
		$data['general_data'] = $this->FrontModel->get_general();
		$this->load->view('single_blog');
		$this->load->view('footer',$data);
	}

	








	// public function index(){
	// 	if(isset($userID)){
	// 		redirect(base_url('index.php/Admin/dashboard'),'refresh');
	// 	}else{
	// 		$this->load->view('admin/login');
	// 	}
		
	// }

	// public function login(){
	// 	$data = $this->input->post();
	// 	$admin = $this->AdminModel->login($data);
		
	// 	if(empty($admin)){
	// 		$this->session->set_flashdata('msg', 'Invalid username or password');
	// 		redirect(base_url('index.php/Admin'),'refresh');
	// 	}else{
	// 		$this->session->set_userdata('userID', $admin->id);
	// 		$this->session->set_userdata('name', $admin->name);
	// 		redirect(base_url('index.php/Admin/dashboard'),'refresh');
	// 	}
	// }


	// public function dashboard(){

	// 	$userID = $this->session->userdata('userID');
	// 	$this->session->set_userdata('name');
	// 	if(isset($userID)){
	// 		$this->load->view('admin/dashboard');
	// 	}else{
	// 		redirect(base_url('index.php/Admin'),'refresh');
	// 	}
	// }

	// public function logout(){
	// 	$this->session->unset_userdata(['userID', 'name']);
	// 	redirect(base_url('index.php/Admin'), 'refresh');
	// }

}






?>