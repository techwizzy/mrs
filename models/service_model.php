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
}