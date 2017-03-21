<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	

		
	}

	// retrieving services
	public function index()
	{
		$this->data['token']='home';
    	$this->data['sub_token']='expenses';

		 $this->data['expenses']=$this->expense_model->get_expenses()->result();
		 $this->_render_page('expenses/expenses',$this->data);
		
		 
	}




	 public function add_expense()
	{
		$this->data['token']='home';
    	$this->data['sub_token']='expenses';
            $date=date('Y-m-d h:m:i');
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message'); 
            //var_dump($_POST);//preview what you are posting to from the form
            $this->form_validation->set_rules('expense_name', 'Expense Name', 'required', array('required'=>'Expense Name field cannot be empty'));
            $this->form_validation->set_rules('expense_amount', 'Expense Amount', 'required', array('required'=>'Expense Cost field cannot be empty'));
              
			if ($this->form_validation->run() == false){
			

	            $this->_render_page('expenses/add_expense',$this->data);
			}
			else
			{
           //load the form fields data into an array
			$data=array(
				        'expense_name'=>$this->input->post('expense_name'),
			            'date'=>$date,
			            'expense_amount'=>$this->input->post('expense_amount'),
			             'note'=>$this->input->post('expense_note'),
			           
			           
			            );
			//var_dump($data);
         //if the record is successfully saved, return the success  message and redirect
         if($this->expense_model->add_expense($data)==TRUE){
             $this->data['message'] ='Expense recorded successfully';
          }
         redirect('expenses/index', 'refresh');
     }
}





}
