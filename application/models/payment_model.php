<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }
    public function insertcash($id)
 	{
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('patient_bill')->result();
        if ($query->num_rows() > 0) {
           foreach ($q as $r) {
            $data = array(
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $r->amount_paid + $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "cash",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
             );
            $this->db->where('transaction_id', $id);
            $this->db->update('patient_bill', $data);
            $this->db->set('total_paid', $r->amount_paid + $this->input->post('amount_paid'));
            $this->db->where('pid',$id);
            $this->db->update('transaction');
        }

        }
        else {
            $data = array(
            'transaction_id' => $id,
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "cash",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
             );

        $this->db->insert('patient_bill', $data);
        $this->db->set('total_paid', $this->input->post('amount_paid'));
        $this->db->where('pid',$id);
        $this->db->update('transaction');
        }

 		
 	}
    public function insertcheck($id)
    {
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('patient_bill')->result();
        if ($query->num_rows() > 0) {
           foreach ($q as $r) {
            $data = array(
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $r->amount_paid + $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "check",
            'payer' => $this->input->post('holder'),
            'biller' => ,
             );
            $this->db->where('transaction_id', $id);
            $this->db->update('patient_bill', $data);
            $this->db->set('total_paid', $r->amount_paid + $this->input->post('amount_paid'));
            $this->db->where('pid',$id);
            $this->db->update('transaction');
        }

        } else{
            $data = array(
            'transaction_id' => $id,
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "check",
            'payer' => $this->input->post('holder'),
            'biller' => ,
             );

         $this->db->insert('patient_bill', $data);
         $this->db->set('total_paid', $this->input->post('amount_paid'));
        $this->db->where('pid',$id);
        $this->db->update('transaction');
        }       
    }
    public function insertcorporate($id)
    {
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('patient_bill')->result();
        if ($query->num_rows() > 0) {
           foreach ($q as $r) {
            $data = array(
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $r->amount_paid + $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "corporate",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
            'company_name'=> $this->input->post('company_name'),
            'card_no'=> $this->input->post('card_no')
             );
            $this->db->where('transaction_id', $id);
            $this->db->update('patient_bill', $data);
            $this->db->set('total_paid', $r->amount_paid + $this->input->post('amount_paid'));
            $this->db->where('pid',$id);
            $this->db->update('transaction');
        }

        } else {
            $data = array(
            'transaction_id' => $id,
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "corporate",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
            'company_name'=> $this->input->post('company_name'),
            'card_no'=> $this->input->post('card_no')
             );

         $this->db->insert('patient_bill', $data);
         $this->db->set('total_paid', $this->input->post('amount_paid'));
        $this->db->where('pid',$id);
        $this->db->update('transaction');
        }
    }
    public function insertcredit($id)
    {
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('patient_bill')->result();
        if ($query->num_rows() > 0) {
           foreach ($q as $r) {
            $data = array(
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $r->amount_paid + $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "credit",
            'payer' => $this->input->post('holder'),
            'biller' => ,
             );
            $this->db->where('transaction_id', $id);
            $this->db->update('patient_bill', $data);
            $this->db->set('total_paid', $r->amount_paid + $this->input->post('amount_paid'));
            $this->db->where('pid',$id);
            $this->db->update('transaction');
        }

        } else {

        $data = array(
            'transaction_id' => $id,
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "credit",
            'payer' => $this->input->post('holder'),
            'biller' => ,
             );

        $this->db->insert('patient_bill', $data);
        $this->db->set('total_paid', $this->input->post('amount_paid'));
        $this->db->where('pid',$id);
        $this->db->update('transaction');
    }
    }
    public function insertmpesa($id)
    {
        $this->db->select('*');
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('patient_bill')->result();
        if ($query->num_rows() > 0) {
           foreach ($q as $r) {
            $data = array(
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $r->amount_paid + $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "mpesa",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
            'company_name'=> $this->input->post('company_name'),
            'transaction_code'=>$this->input->post('transaction_code')
             );
            $this->db->where('transaction_id', $id);
            $this->db->update('patient_bill', $data);
            $this->db->set('total_paid', $r->amount_paid + $this->input->post('amount_paid'));
            $this->db->where('pid',$id);
            $this->db->update('transaction');
        }

        } else {

        $data = array(
            'transaction_id' => $id,
            'Payment_date' => date('Y-m-d H:i:s'),
            'total_paid' => $this->input->post('amount_paid'),
            'amount_paid'  => $this->input->post('amount_paid'),
            'payment_method'=> "mpesa",
            'payer' => $this->input->post('patient_name'),
            'biller' => ,
            'company_name'=> $this->input->post('company_name'),
            'transaction_code'=>$this->input->post('transaction_code')
             );

         $this->db->insert('patient_bill', $data);
         $this->db->set('total_paid', $this->input->post('amount_paid'));
        $this->db->where('pid',$id);
        $this->db->update('transaction');
    }
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
        $this->db->select('total_amount','ref_no');
        $this->db->from('transaction');
        $this->db->where('pid', $data);
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
