<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Corporate_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }
    
    public function get_corporates()
    {
    	$query=$this->db->get('corporate');
    	return $query;
    }
    public function insert()
 	{
 		$this->load->helper('url');

 		$data = array(
 			'name' => $this->input->post('corporate_name'),
 			'desc'  => $this->input->post('corporate_desc'),
 			 );

 		return $this->db->insert('corporate', $data);
 	}
    public function show_corporate()
    {
        $query = $this->db->get('corporate');
        $query_result = $query->result();
        return $query_result;
    }
    function show_corporate_id($data)
    {
        $this->db->select('*');
        $this->db->from('corporate');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function edit($id, $data)
    {
       return $this->db->where('id', $id)->update('corporate', $data);
    }
} 