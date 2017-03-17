<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$id = $this->uri->segment(3);
		$data['patient'] = $this->payment_model->show($id);
		$this->_render_page('payments/method', $data);
	}
	public function cash()
	{
		$id = $this->uri->segment(3);
		//save date to the db
		$date=date('Y-M-D H:m:s', strtotime($this->input->post('date')));
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
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
}