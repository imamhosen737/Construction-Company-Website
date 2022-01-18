<?php
class AdminModel extends CI_Model
{
	public function login($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$info = $this->db->get('admin');
		return $info->row();
	}


	public function get_admin()
	{
		$admin_db = $this->db->get('admin');
		return $admin_db->result();
	}

	public function post_admin($data)
	{

		$this->db->insert('admin', $data);
	}

	public function find_admin($id)
	{
		$this->db->where('id', $id);
		$admin = $this->db->get('admin');
		return $admin->row();
	}


	public function update_admin($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('admin', $data);
	}


	public function delete_admin($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}



	public function general_info()
	{
		$general_db = $this->db->get('general');
		return $general_db->result();
	}

	public function find_generalInfo($id)
	{
		$this->db->where('id', $id);
		$admin = $this->db->get('general');
		return $admin->row();
	}

	public function update_general($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('general', $data);
	}

	// code start fo clients

	public function post_clients($data)
	{
		$this->db->insert('clients', $data);
	}

	public function clients_info()
	{
		$clients_db = $this->db->get('clients');
		return $clients_db->result();
	}

	public function selet_client_edit_id($id)
	{
		$this->db->where('id', $id);
		$cd = $this->db->get('clients');
		return $cd->row();
	}

	public function update_client($up, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('clients', $up);
	}

	public function delete_clients($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('clients');
	}

	// code end fo clients


	// code start fo contact message

	public function post_cont_msg($con)
	{
		$this->db->set($con);
		$this->db->insert('contact_msg', $con);
	}

	public function show_cont_msg()
	{
		$cont_msg = $this->db->get('contact_msg');
		return $cont_msg->result();
	}

	public function delete_msg($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('contact_msg');
	}

	// code end fo contact message



	// code start for slider

	public function post_slider($data)
	{
		$this->db->insert('slider', $data);
	}

	public function slider_info()
	{
		$slider_db = $this->db->get('slider');
		return $slider_db->result();
	}


	public function update_slider($slide_up, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('slider', $slide_up);
	}

	public function selet_slider_edit_id($id)
	{
		$this->db->where('id', $id);
		$cd = $this->db->get('slider');
		return $cd->row();
	}

	public function delete_slider($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slider');
	}
	// code end for slider


	// code start for team section


	public function post_team($data)
	{
		$this->db->insert('team', $data);
	}

	public function team_info()
	{
		$team_db = $this->db->get('team');
		return $team_db->result();
	}


	public function update_team($team_up, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('team', $team_up);
	}

	public function selet_team_edit_id($id)
	{
		$this->db->where('id', $id);
		$cd = $this->db->get('team');
		return $cd->row();
	}

	public function delete_team($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('team');
	}

	// code end for team section


	// code start for updating about section

	public function about_info()
	{
		$about_db = $this->db->get('about');
		return $about_db->result();
	}

	public function find_aboutInfo($id)
	{
		$this->db->where('id', $id);
		$about = $this->db->get('about');
		return $about->row();
	}

	public function update_about($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('about', $data);
	}

	// code end for updating about section




}
