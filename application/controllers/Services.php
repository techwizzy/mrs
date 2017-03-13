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





}
