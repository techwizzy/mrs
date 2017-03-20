<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }
    public function insert()
 	{
 		$this->load->helper('url');

 		$data = array(
 			'service_name' => $this->input->post('service_name'),
 			'service_cat'  => $this->input->post('service_category'),
 			'service_cost' => $this->input->post('service_cost'),
 			 );

 		return $this->db->insert('transaction', $data);
 	}
    public function show($data)
    {
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('file_no', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function show_id($data)
    {
        $this->db->select('*');
        $this->db->from('patient_bill');
        $this->db->where('transaction_id', $data);
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

