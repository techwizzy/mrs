
<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 /**
 * 
 */
 class CSRF_Protection
 {
 	private $CI;
 	#name used to store token or session
 	private static $token_name = 'li_token';

 	private static $token;

 	public function __construct()
 	{
 		$this->CI =$ get_instance();
 	}
 	public function generate_token()
 	{
 		$this->CI->load->library('session');

 		if ($this->CI->session->userdata(self::$token_name) === FALSE) 
 		{
 			self::$token = md5(uniqid() . microtime() . rand());

 			$this->CI->session->set_userdata(self::$token_name, self::$token);
 		}
 		else
 		{
 			self::$token = $this->CI->session->userdata(self::$token_name);
 		}
 	}
 	public function validate_tokens()
 	{
 		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
 		{
 			$posted_token = $this->CI->input->post(self::$token_name)
 			if ($posted_token === FALSE || $posted_token!= $this->CI->session->userdata(self::$token)) {
 				show_error('Request Was invalid. Token did not match')
 			}
 		}
 	}
 	public function inject_tokens()
 	{
 		$output = $this->CI->output->get_output()

 		#inject into a form
 		$output = preg_replace('/(<(form|FORM)[^>]*(method|METHOD)="(post|POST)"[^>]*>)/',
                         '$0<input type="hidden" name="' . self::$token_name . '" value="' . self::$token . '">', 
                         $output);
 		#inject into <head>
 		$output = preg_replace('/(<\/head>)/',
                         '<meta name="csrf-name" content="' . self::$token_name . '">' . "\n" . '<meta name="csrf-token" content="' . self::$token . '">' . "\n" . '$0', 
                         $output);
 		$this->CI->output->_display($output);
 	}

 ?>