<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class patient_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                 $data= array();
                
        }
    public function get_patients()
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
   public function get_patient_data($q)
   {
         $this->db->select('*');
         $this->db->like('first_name', $q);
         $query = $this->db->get('patient');
          return $query->result_array();
       
    }

    public function get_patient($file_no)
    {
        $this->db->where('file_no',$file_no);
        $query=$this->db->get('patient');
        return $query->result();
    }

    public function get_patient_vitals($file_no)
    {
        $this->db->where('pid',$file_no);
        $query=$this->db->get('assessment');
        return $query->result();
    }
    public function get_patient_visits($file_no)
    {
        $this->db->where('pid',$file_no);
        $query=$this->db->get('appointment');
        return $query->result();
    }
}