<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$id = $this->session->userdata('id');
		$data['patient'] = $this->payment_model->show($id);
		$this->_render_page('payments/method', $data);
	}
	public function list1()
	{
		$id = $this->uri->segment(3);
		$patient_data = array(
			'id' => $this->uri->segment(3),
			'date' => date('Y-M-D H:m:s')
			);
		$this->session->set_userdata($patient_data);
		$data['patient'] = $this->payment_model->show($id);
		$this->_render_page('list', $data);
	}
	public function cash()
	{
		$id = $this->session->userdata('id');
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		//var_dump($data);
		$this->_render_page('payments/cash', $data);
	}
	public function check()
	{
		$id = $this->uri->segment(3);
		//save date to the db
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		$this->_render_page('payments/check', $data);
	}
	public function corporate()
	{
		$id = $this->uri->segment(3);
		//save date to the db
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		$this->_render_page('payments/corporate', $data);
	}
	public function credit()
	{
		$id = $this->uri->segment(3);
		//save date to the db
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		$this->_render_page('payments/credit', $data);
	}
	public function mpesa()
	{
		$id = $this->uri->segment(3);
		//save date to the db
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		$this->_render_page('payments/mpesa', $data);
	}
	public function cashinsert()
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
		$this->_render_page('services/index', $this->data);
	}
	}
}
