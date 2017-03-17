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
		$this->_render_page('services/index', $this->data);
	}
	}
	public function show_service_id()
	{
		$id = $this->uri->segment(3);
		$data['service'] = $this->service_model->show_service();
		$data['single_service'] = $this->service_model->show_service_id($id);
		$this->_render_page('services/edit', $data);
	}
	public function edit()
	{
		$id = $this->input->post('service_id');

		$data = array(
			'service_name' => $this->input->post('service_name'),
            'service_cat'  => $this->input->post('service_category'),
            'service_cost' => $this->input->post('service_cost'),
             );
		$this->service_model->edit($id,$data);
		$this->index();
	}
	public function register()
	{
		$data['error_message'] = '';
		$this->load->helper('form');
		$this->load->library('form_validation');
	if ($this->form_validation->run() === FALSE) 
	{
		$this->data['services']=$this->service_model->get_services()->result();
		$this->data['error_message'] = validation_errors();
		$this->_render_page('services/register', $this->data);
	}
	else
	{
		$ids=$_POST['service'];
		foreach ($ids as $id) {
			//
			$query = $this->service_model->each($id);
			foreach ($query->result() as $row) {
				$service_name=$row->service_name;
				$service_cost=$row->service_cost;
				$date = date("Y-m-d H:i:s");
				$data = array(
					'service_name' => $service_name ,
					'service_cost' => $service_cost ,
					'date_of_service' => $date,
					);
				$data['register'] = $this->service_model->insert_register($data);
			}
		}

		$this->index();
		//$this->_render_page('services/register', $this->data);
	}
	}
}