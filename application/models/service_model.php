<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Service_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }
    
    public function get_services()
    {
    	$query=$this->db->get('service');
    	return $query;
    }
    public function insert()
 	{
 		$this->load->helper('url');

 		$data = array(
 			'service_name' => $this->input->post('service_name'),
 			'service_cat'  => $this->input->post('service_category'),
 			'service_cost' => $this->input->post('service_cost'),
 			 );

 		return $this->db->insert('service', $data);
 	}
    public function show_service()
    {
        $query = $this->db->get('service');
        $query_result = $query->result();
        return $query_result;
    }
    function show_service_id($data)
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('service_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function edit($id, $data)
    {
        $this->db->where('service_id', $id);
        $this->db->update('service', $data);
    }
    public function each($value)
    {
        $this->db->select('service_name', 'service_cost');
        $this->db->from('service');
        $this->db->where('service_id', $value);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function insert_register($data, $id)
    {
        if (isset($data['service_name']) && is_array($data['service_name'])):
            foreach ( $data['service_name'] as $key=>$value ):
                $this->db->insert('patient_service', array(
                   'service_name'=>$data['service_name'][$key],
                   'service_cost'=>$data['service_cost'][$key],
                   'file_no' => $id,
                   'date_of_service' => date("Y-m-d H:i:s")// assuming this are the same for all rows?
                ));
            endforeach;
        endif; 
    }
} 

