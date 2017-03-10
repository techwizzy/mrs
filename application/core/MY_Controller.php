<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

       
    
        
            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

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

}