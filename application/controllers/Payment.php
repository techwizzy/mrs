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
		$data['patient'] = $this->payment_model->show($id);
		$data['single_bill'] = $this->payment_model->show_id($id);
		$this->_render_page('payments/cash', $data);
	}