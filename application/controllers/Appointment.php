<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Appointment extends MY_Controller
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		$this->data['token']='appointment';
   		$id = $this->uri->segment(3);
		$data['single_appointment'] = $this->appointment_model->get_appointment($id);
		$this->_render_page('appointment/create', $data);
	}
	public function create()
	{
		$this->data['token']='appointment';
		$data['error_message'] = '';
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('start','START', 'required');
		$this->form_validation->set_rules('end','END', 'required');
		$this->form_validation->set_rules('description','DESCRIPTION', 'required');
	if ($this->form_validation->run() === FALSE) 
	{
		$this->data['error_message'] = validation_errors();
		$this->_render_page('appointment/create', $this->data);
	}
	else
	{
		$this->data['single_appointment']=$this->appointment_model->insert();
		$this->_render_page('appointment/create', $this->data);
	}
}
}