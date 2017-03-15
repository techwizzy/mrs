<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

               
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
            $this->load->model('service_model');

            $this->load->model('corporate_model');
            $this->load->model('vitals');
            $this->load->model('expense_model');
            $this->load->model('patient_model');
            // $this->load->model('appointment');
 }

    public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
    {

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('topbar');
        $this->viewdata = (empty($data)) ? $this->data: $data;

         $this->load->view($view, $this->viewdata, $returnhtml);

        $this->load->view('footer');
    }

    
    public function _get_csrf_nonce()
    {
        $this->load->helper('string');
        $key   = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    public function _valid_csrf_nonce()
    {
        $csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
        if ($csrfkey && $csrfkey == $this->session->flashdata('csrfvalue'))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}