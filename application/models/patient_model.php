<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class patient_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                 $data= array();
                
        }
    
    public function get_patient()
    {
    	$query=$this->db->get('patient');
    	return $query;
    }

     public function create_patient($data)
    {
    	if($this->db->insert('patient', $data));
    	{
           return TRUE;
                 }
        return FALSE;
    }
}