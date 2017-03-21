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
   public function get_patient_data($q)
   {
         $this->db->select('*');
         $this->db->like('first_name', $q);
         $query = $this->db->get('patient');
        
          if($query->num_rows > 0){
          foreach ($query->result_array() as $row){
            $id=$row['file_no'];
            $name=$row['first_name'];
            $value1=$row['gender'];

             $row_set[] = array('label' =>$name.' '.$value1,'fname'=>$name,'gender'=>$value1,'id'=>$id); //build an array
            
          }
        }

        echo json_encode($row_set); //format the array into json data
      
    }
   
}