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
    public function insert_register($data, $id, $dateit)
    {
        if (isset($data['service_name']) && is_array($data['service_name'])):
            foreach ( $data['service_name'] as $key=>$value ):
                $this->db->insert('patient_service', array(
                   'service_name'=>$data['service_name'][$key],
                   'service_cost'=>$data['service_cost'][$key],
                   'file_no' => $id,
                   'date_of_service' => $dateit
                ));
            endforeach;
        endif; 
    }
    public function selected($id, $date)
    {
        $this->db->select_sum('service_cost');
        $this->db->from('patient_service');
        $array = array('file_no'=> $id, 'date_of_service' => $date);

        $this->db->where($array);
        
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as $v) {
            $data = array(
                'date'=> $date,
                'pid' => $id ,
                'ref_no'=>"Ref:".random_string('alnum',5),
                'total_amount'=> $v->service_cost,
                'payment_status' => "unpaid", 
                );
            $this->db->insert('transaction', $data);
        }
    }
    public function waiting_list($id)
    {
       $this->db->select('first_name,age,address');
       $this->db->where('file_no', $id);
        $q = $this->db->get('patient')->result(); 
        // get result from table
        foreach ($q as $r) { 
        // loop over results
            $data = array(
                'name' => $r->first_name,
                'age'  => $r->age,
                'address'=> $r->address,
                'pid'   => $id,
                'wdate' => date("Y-m-d H:m:s"),
                'status'=> "waiting",
                );
        $this->db->insert('waiting_list', $data); 
    }
    }
    public function get_list()
    {
        return $this->db->get('waiting_list');
    }
} 

