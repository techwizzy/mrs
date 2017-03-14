<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Appointment extends MY_Controller
{
	
	function __construct(argument)
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		$id = $this->uri->segment(3);
		$data['single_appointment'] = $this->appointment->get_appointment($id);
		$this->_render_page('appointment/create', $data);
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
		$this->_render_page('appointment/create', $this->data);
	}
	else
	{
		$this->data['services']=$this->service_model->insert();
		$this->_render_page('appointment/create', $this->data);
		//$this->session->set_flashdata('message', $this->ion_auth->messages());
	}
}