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
		$this->data['token'] = 'appointment';
        $this->data['sub_token'] = 'schedule';
		//$id = $this->uri->segment(3);
		$this->data['appointments'] = $this->appointment_model->getEvents();
		$this->calendar_page('appointment/index', $this->data);
	}
	public function create()
	{
		
        $this->data['file_no']=$this->input->post('file_no');
        $file_no=$this->input->post('file_no');
		$this->form_validation->set_rules('start','START', 'required');
		$this->form_validation->set_rules('end','END', 'required');
		$this->form_validation->set_rules('description','DESCRIPTION', 'required');
		if ($this->form_validation->run() === FALSE) 
		{
			$this->data['error_message'] = validation_errors();
			redirect('appointment/view/'.$file_no);
		}
		else
		{
			$this->appointment_model->insert();
			$this->data['schedule'] = $this->appointment_model->get_appointment($this->input->post('file_no'));
			redirect('appointment/view/'.$this->input->post('file_no'),'refresh');
		}
  }

  public function view($file_no)
	{
		$this->data['token'] = 'home';
        $this->data['sub_token'] = 'appointment';
        $this->data['file_no']=$file_no;
		
			$this->data['schedule'] = $this->appointment_model->get_appointment($file_no);
			//var_dump($this->data);
			$this->_render_page('appointment/create', $this->data);
		
  }
   public function events()
	{
		$this->data['token'] = 'appointment';
        $this->data['sub_token'] = 'appointment';
       		
		$this->calendar_page('appointment/events', $this->data);
		
  }
  	Public function getEvents()
	{
		$result=$this->appointment_model->getEvents();
		echo json_encode($result);
	}
   
	/*Add new event */
	Public function addEvent()
	{
		$result=$this->appointment_model->addEvent();
		echo $result;
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->appointment_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->appointment_model->deleteEvent();
		echo $result;
	}
	Public function dragUpdateEvent()
	{	

		$result=$this->appointment_model->dragUpdateEvent();
		echo $result;
	}


  Public function getCustomEvents()
	{
		$start= $this->input->post('startDate');
		$end=$this->input->post('endDate');
		//var_dump($start);
		$result=$this->appointment_model->getCustomEvents($start,$end);
		echo json_encode($result);
	}

	   public function waitingList()
	{
		$this->data['token'] = 'visits';
		$this->data['sub_token'] = 'appointment';
       	$this->data['visits'] = $this->appointment_model->getWaitingList();	
		$this->calendar_page('appointment/visits', $this->data);
		
  }

    Public function getCustomList()
	{
		$start= $this->input->post('startDate');
		$end=$this->input->post('endDate');
		//var_dump($start);
		$result=$this->appointment_model->getCustomList($start,$end);
		echo json_encode($result);
	}

    Public function getCustomChart()
	{
		$start= $this->input->post('startDate');
		$end=$this->input->post('endDate');
		//var_dump($start);
		$result=$this->appointment_model->getCustomChart($start,$end);
		echo json_encode($result);
	}
}