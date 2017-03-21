<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	

		
	}

	// retrieving services
	public function index()
	{
         $this->data['token']='home';
         $this->data['sub_token']='patient_search';
		 $this->data['patient']=$this->patient_model->get_patient()->result();
		 $this->_render_page('patient/patients',$this->data);
		
		 
	}

	public function patient_search()
	{

		 $this->data['patient']=$this->patient_model->get_patient()->result();
		 $this->_render_page('patient/patient_search',$this->data);
		
		 
	}




	 public function create_patient()
	{

		   $this->data['token']='home';
           $this->data['sub_token']='patient_search';
            $date=date('Y-m-d h:m:i');
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message'); 
            //var_dump($_POST);//preview what you are posting to from the form
             $this->form_validation->set_rules('file_no', 'file_no', 'required', array('required'=>'File No field cannot be empty'));
              
            $this->form_validation->set_rules('first_name', 'First Name', 'required', array('required'=>'First Name field cannot be empty'));
            $this->form_validation->set_rules('surname', 'surname', 'required', array('required'=>'Surname field cannot be empty'));
              
			if ($this->form_validation->run() == false){
			

	            $this->_render_page('patient/create_patient',$this->data);
			}
			else
			{
           //load the form fields data into an array
			$data=array(
						'file_no'=>$this->input->post('file_no'),
						'prev_file_no'=>$this->input->post('prev_file_no'),
						'age'=>$this->input->post('dob'),
						'nextofkin'=>$this->input->post('nok'),
						'first_name'=>$this->input->post('first_name'),
						'middle_name'=>$this->input->post('middle_name'),
				        'surname'=>$this->input->post('surname'),
				        'phone'=>$this->input->post('phone'),
			            'date'=>$date,
						'gender'=>$this->input->post('sex'),
						'client_type'=>$this->input->post('client_type'),
						'corporate_name'=>$this->input->post('corporate'),
						'address'=>$this->input->post('address'),
						'allergies'=>$this->input->post('allergies'),
			             'med_history'=>$this->input->post('med_history'),
			             
			           
			            );
			//var_dump($data);
         //if the record is successfully saved, return the success  message and redirect
         if($this->patient_model->create_patient($data)==TRUE){
             $this->data['message'] ='Patient added successfully';
          }
         redirect('patient/create_patient', 'refresh');
     }
}

 public function search_patient()
 {
 	 if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->patient_model->get_patient_data($q);
     }
 }



}
