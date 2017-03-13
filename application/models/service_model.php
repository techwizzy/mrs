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
} 