<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class expense_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                 $data= array();
                
        }
    
    public function get_expenses()
    {
    	$query=$this->db->get('expenses');
    	return $query;
    }

     public function add_expense($data)
    {
    	if($this->db->insert('expenses', $data));
    	{
           return TRUE;
                 }
        return FALSE;
    }
}