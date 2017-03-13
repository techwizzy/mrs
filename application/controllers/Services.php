<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// retrieving services
	public function index()
	{

		 $this->data['services']=$this->service_model->get_services()->result();
		 $this->_render_page('services/index',$this->data);
		
		 
	}
	public function create()
	{
		$data['error_message'] = '';
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('service_name','Service Name', 'required');
		$this->form_validation->set_rules('service_category','Service Category', 'required');
		$this->form_validation->set_rules('service_cost','Service Cost', 'required');
	if ($this->form_validation->run() === FALSE) 
	{
		$this->data['error_message'] = validation_errors();
		$this->_render_page('services/create', $this->data);
	}
	else
	{
		$this->data['services']=$this->service_model->insert();
		$this->load->_render_page('services/index', $this->data);
		//$this->session->set_flashdata('message', $this->ion_auth->messages());
	}
	}
}
