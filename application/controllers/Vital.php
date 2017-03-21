<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Vital extends MY_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper("url");
		$this->load->library("pagination");
	}

	public function index1()
	{
		$this->data['token']='home';
    	$this->data['sub_token']='profile';
		$config = array();
		$config["base_url"] = base_url()."vital/index1";
		$config["total_rows"] = $this->vitals->vital_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->vitals->fetch_vitals($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();

		$this->_render_page('vital/index1', $data);
	}
}