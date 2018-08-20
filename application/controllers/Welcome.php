<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		//function Welcome() {}
	}    
 
	public static function index()
	{
            
            $data = array();
			$var = new Welcome();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('imtm', $data, TRUE);
            //$this->load->view('index',$data);
			$var->load->view('index',$data);
	}
}
