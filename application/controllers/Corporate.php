<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// retrieving corporates
	public function index()
	{

		 $this->data['corporates']=$this->corporate_model->get_corporates()->result();
		 $this->_render_page('corporate/index',$this->data);
		
		 
	}
	public function create()
	{
		$data['error_message'] = '';
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('corporate_name','Corporate Name', 'required');
		$this->form_validation->set_rules('corporate_desc','Corporate Description', 'required');
	if ($this->form_validation->run() === FALSE) 
	{
		$this->data['error_message'] = validation_errors();
		$this->_render_page('corporate/create', $this->data);
	}
	else
	{
		$this->data['corporates']=$this->corporate_model->insert();
		$this->_render_page('corporate/index', $this->data);
		//$this->session->set_flashdata('message', $this->ion_auth->messages());
	}
	}
	public function show_corporate_id()
	{
		$id = $this->uri->segment(3);
		$data['corporate'] = $this->corporate_model->show_corporate();
		$data['single_corporate'] = $this->corporate_model->show_corporate_id($id);
		$this->_render_page('corporate/edit', $data);
	}
	//edit corporate field
	public function edit()
	{
		$id = $this->input->post('corporate_id');

		$data = array(
			'name' => $this->input->post('corporate_name'),
            'desc'  => $this->input->post('corporate_desc'),
             );
		$this->data['corporates'] = $this->corporate_model->edit($id,$data);
		//$this->_render_page('corporate/index', $this->data);
		$this->index();
	}
}
