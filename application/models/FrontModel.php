<?php
class FrontModel extends CI_Model{

	public function get_general(){
		// $gdata = $this->db->query("select * from employee");
		$gdata = $this->db->get('general');
		return $gdata->result();
    }

	public function slider_info()
	{
		$slider_data = $this->db->get('slider');
		return $slider_data->result();
	}

	public function team_data(){
		$tdata = $this->db->get('team');
		return $tdata->result();
	}

	public function projects(){
		$tdata = $this->db->get('projects');
		return $tdata->result();
	}

	public function client_data(){
		$cdata = $this->db->get('clients');
		return $cdata->result();
	}

	public function about()
	{
		$about_data = $this->db->get('about');
		return $about_data->result();
	}
	
  

}
