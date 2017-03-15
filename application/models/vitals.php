<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Vitals extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function vital_count(){
		return $this->db->count_all("assessment");
	}
	public function fetch_vitals($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("assessment");

		if ($query->num_rows() > 0) {
			# code...
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
}