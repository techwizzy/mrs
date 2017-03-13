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
    public function insert($data)
 	{
 		$this->load->helper('url');

 		$data = array(
 			'service_name' => $this->input->post('service_name'),
 			'service_cat'  => $this->input->post('service_category'),
 			'service_cost' => $this->input->post('service_cost'),
 			 );

 		return $this->db->insert('service', $data);
 	}
} 