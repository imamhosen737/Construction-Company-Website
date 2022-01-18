<?php
class Dashboard extends CI_Controller
{
	// code start for login/ logout & session

	public function index()
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			redirect(base_url('Dashboard/admin_panel'), 'refresh');
		} else {
			$this->load->view('dashboard/login');;
		}
	}


	public function login()
	{
		$this->load->model('AdminModel');
		$data = $this->input->post();
		$admin = $this->AdminModel->login($data);
		// var_dump($admin);
		if (empty($admin)) {
			$this->session->set_flashdata('msg', 'Invalid Username or Password');
			redirect(base_url('Dashboard'), 'refresh');
		} else {
			$this->session->set_userdata('userID', $admin->id);
			$this->session->set_userdata('name', $admin->name);
			redirect(base_url('Dashboard/admin_panel'), 'refresh');
		}
	}

	public function admin_panel()
	{
		$this->load->model('AdminModel');
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$data['list'] = $this->AdminModel->get_admin();
			$this->load->view('dashboard/dashboard', $data);
		} else {
			redirect(base_url('Dashboard'), 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata(['userID', 'name']);
		redirect(base_url('Dashboard'), 'refresh');
	}

	// code endfor login/ logout & session


	// code start for add, show & insert admin

	public function add_admin()
	{
		$this->load->model('AdminModel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[8]');
		if ($this->form_validation->run() == FALSE) {
			$data['list'] = $this->AdminModel->get_admin();
			$this->load->view('dashboard/dashboard', $data);
		} else {

			$userID = $this->session->userdata('userID');
			if (isset($userID)) {
				$data = $this->input->post();
				$this->AdminModel->post_admin($data);
				redirect(base_url('Dashboard/admin_panel'), 'refresh');
			} else {
				redirect(base_url('Dashboard'), 'refresh');
			}
		}
	}

	public function edit_admin($id)
	{
		// $data['list'] = $this->AdminModel->get_admin();
		$this->load->model('AdminModel');
		$data['edit_id'] = $this->AdminModel->find_admin($id);
		$data['list'] = $this->AdminModel->get_admin();
		$this->load->view('dashboard/dashboard', $data);
	}


	public function update_admin($id)
	{
		$this->load->model('AdminModel');
		$data = $this->input->post();
		$this->AdminModel->update_admin($data, $id);
		redirect(base_url('Dashboard/admin_panel'), 'refresh');
	}

	public function delete_admin($id)
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$this->load->model('AdminModel');
			$this->AdminModel->delete_admin($id);
			redirect(base_url('Dashboard/admin_panel'), 'refresh');
		} else {
			redirect(base_url('Dashboard'), 'refresh');
		}
	}


	// code start for add, show & insert admin


	public function general()
	{
		$this->load->model('AdminModel');
		$data['general_info'] = $this->AdminModel->general_info();
		$this->load->view('dashboard/generaldb', $data);
	}

	public function edit_general_info($id)
	{
		$this->load->model('AdminModel');
		$data['edit'] = $this->AdminModel->find_generalInfo($id);
		$this->load->view('dashboard/edit_general', $data);
	}

	public function update_general_info($id)
	{
		$this->load->model('AdminModel');
		$data = $this->input->post();
		$this->AdminModel->update_general($data, $id);
		redirect(base_url('Dashboard/admin_panel'));
	}


	// start code for client's part


	public function save_clients()
	{
		$this->load->model('AdminModel');
		$client_name = $this->input->post('client_name');
		$client_company = $this->input->post('client_company');
		$client_opinion = $this->input->post('client_opinion');
		$id = $this->input->post('id');

		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|png|jpef|pdf|xls|webp',
			'encrypt_name' => TRUE
		);
		$this->load->library('upload', $config);
		$up = array(
			'client_name' => $client_name,
			'client_company' => $client_company,
			'client_opinion' => $client_opinion
		);

		if (!$this->upload->do_upload('client_photo')) {
			echo  $this->upload->display_errors();
		} else {
			$fd = $this->upload->data();
			$cp = $fd['file_name'];
			$up['client_photo'] = $cp;
		}
		if (isset($id)) {
			$this->AdminModel->update_client($up, $id);
		} else {
			$this->AdminModel->post_clients($up);
		}

		redirect(base_url('Dashboard/clients'));
	}


	public function clients($id = NULL)
	{
		$this->load->model('AdminModel');

		if (isset($id)) {
			$data['edit_id'] = $this->AdminModel->selet_client_edit_id($id);
		}
		$data['clients_info'] = $this->AdminModel->clients_info();
		$this->load->view('dashboard/clientsdb', $data);
	}


	public function delete_client_info($id)
	{
		$this->load->model('AdminModel');
		$this->AdminModel->delete_clients($id);
		redirect(base_url('Dashboard/clients'));
	}
	// end code for client's part



	// code for managing contact form's data
	public function contact_msg()
	{
		// $this->load->model('AdminModel');
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('name', 'Name', 'trim|required');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		// $this->form_validation->set_rules('subject', 'Subject', 'trim|required|');
		// $this->form_validation->set_rules('message', 'message', 'trim|required|max_length[350]');
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('contact');
		// } else {
			$con = $this->input->post();
			$this->AdminModel->post_cont_msg($con);
			redirect(base_url('Admin/contact'));
		// }
	}

	public function get_contact_msg()
	{
		$this->load->model('AdminModel');
		$data['cont_msg'] = $this->AdminModel->show_cont_msg();
		$this->load->view('dashboard/contact_msg', $data);
	}

	public function delete_cont_msg($id)
	{
		$this->load->model('AdminModel');
		$this->AdminModel->delete_msg($id);
		redirect(base_url('dashboard/get_contact_msg'));
	}
	// end code for managing contact form's data


	// code for slider part

	public function save_slider()
	{
		$this->load->model('AdminModel');
		$top_headline = $this->input->post('top_headline');
		$main_headline = $this->input->post('main_headline');
		$id = $this->input->post('id');

		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|png|jpef|pdf|xls|webp',
			'encrypt_name' => TRUE
		);
		$this->load->library('upload', $config);
		$slide_up = array(
			'top_headline' => $top_headline,
			'main_headline' => $main_headline
		);

		if (!$this->upload->do_upload('slider_photo')) {
			echo  $this->upload->display_errors();
		} else {
			$slide = $this->upload->data();
			$sp = $slide['file_name'];
			$slide_up['slider_photo'] = $sp;
		}
		if (isset($id)) {
			$this->AdminModel->update_slider($slide_up, $id);
		} else {
			$this->AdminModel->post_slider($slide_up);
		}

		redirect(base_url('Dashboard/slider'));
	}

	public function slider($id = NULL)
	{
		$this->load->model('AdminModel');

		if (isset($id)) {
			$data['edit_id'] = $this->AdminModel->selet_slider_edit_id($id);
		}
		$data['slider_info'] = $this->AdminModel->slider_info();
		$this->load->view('dashboard/sliderdb', $data);
	}

	public function delete_slider_info($id)
	{
		$this->load->model('AdminModel');
		$this->AdminModel->delete_slider($id);
		redirect(base_url('Dashboard/slider'));
	}

	// end code for slider


	// code start for team section


	public function save_team()
	{
		$this->load->model('AdminModel');
		$name = $this->input->post('name');
		$designation = $this->input->post('designation');
		$designation = $this->input->post('designation');
		$tw = $this->input->post('tw');
		$fb = $this->input->post('fb');
		$lindin = $this->input->post('lindin');
		$insta = $this->input->post('insta');
		$id = $this->input->post('id');

		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|png|jpef|pdf|xls|webp',
			'encrypt_name' => TRUE
		);
		$this->load->library('upload', $config);
		$team_up = array(
			'name' => $name,
			'designation' => $designation,
			'tw' => $tw,
			'fb' => $fb,
			'lindin' => $lindin,
			'insta' => $insta
		);

		if (!$this->upload->do_upload('photo_team_member')) {
			echo  $this->upload->display_errors();
		} else {
			$team = $this->upload->data();
			$sp = $team['file_name'];
			$team_up['photo_team_member'] = $sp;
		}
		if (isset($id)) {
			$this->AdminModel->update_team($team_up, $id);
		} else {
			$this->AdminModel->post_team($team_up);
		}

		redirect(base_url('Dashboard/team'));
	}

	public function team($id = NULL)
	{
		$this->load->model('AdminModel');

		if (isset($id)) {
			$data['edit_id'] = $this->AdminModel->selet_team_edit_id($id);
		}
		$data['team_info'] = $this->AdminModel->team_info();
		$this->load->view('dashboard/teamdb', $data);
	}

	public function delete_team_info($id)
	{
		$this->load->model('AdminModel');
		$this->AdminModel->delete_team($id);
		redirect(base_url('Dashboard/team'));
	}

	// code end for team section


	// code start for updating about section

	public function about()
	{
		$this->load->model('AdminModel');
		$data['about_info'] = $this->AdminModel->about_info();
		$this->load->view('dashboard/aboutdb', $data);
	}

	public function edit_about_info($id)
	{
		$this->load->model('AdminModel');
		$data['edit'] = $this->AdminModel->find_aboutInfo($id);
		$this->load->view('dashboard/edit_about', $data);
	}


	public function update_about_info($id)
	{
		$this->load->model('AdminModel');
		$data = $this->input->post();
		$this->AdminModel->update_about($data, $id);
		redirect(base_url('Dashboard/about'));
	}



	// code end for updating about section



}
