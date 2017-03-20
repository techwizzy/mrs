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
		$this->db->select('*');
        $this->db->from('appointment');
        $this->db->where('pid', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
	}
	public function insert()
 	{
 		$this->load->helper('url');

 		$data = array(
 			'pid' => $this->input->post('patient_id'),
 			'start'  => $this->input->post('start'),
 			'end' => $this->input->post('end'),
 			'desc' => $this->input->post('description')
 			 );

 		return $this->db->insert('appointment', $data);
 	}
}