<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Appointment_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function get_appointment($id)
	{
		
        $this->db->where('pid', $id);
        $query = $this->db->get('appointment');
        $result = $query->result();
        return $result;
	}
	public function insert()
 	{
 		var_dump($_POST);
 		$data = array(
 			'pid' => $this->input->post('file_no'),
 			'start'  =>date('Y-m-d H:m:s A', strtotime($this->input->post('start'))),
 			'end' => date('Y-m-d H:m:s A', strtotime($this->input->post('end'))),
 			'desc' => $this->input->post('description')
 			 );

 		$this->db->insert('appointment', $data);
 	}
 	/*Read the data from DB */
	Public function getEvents()
	{
		
	$sql = "SELECT * FROM appointment  ORDER BY start ASC";
	return $this->db->query($sql)->result();

	}

/*Create new events */

	Public function addEvent()
	{

	
	}

	/*Update  event */

	Public function updateEvent()
	{

	
	}


	/*Delete event */

	Public function deleteEvent()
	{

	
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			


	}

  	Public function getCustomEvents($start,$end)
	{
		
	$sql = "SELECT * FROM appointment WHERE DATE(start) >='$start'  AND DATE(appointment.end) <= '$end' ORDER BY start ASC";
	return $this->db->query($sql)->result();

	}
   public function getWaitingList()
   {
   		$sql = "SELECT * FROM waiting_list WHERE status='Waiting'  ORDER BY wdate ASC";
	    return $this->db->query($sql)->result();
   }

  	Public function getCustomList($start,$end)
	{
		
	$sql = "SELECT * FROM waiting_list WHERE DATE(wdate)  BETWEEN '$start'  AND  '$end' ORDER BY wdate ASC";
	return $this->db->query($sql)->result();

	}
}