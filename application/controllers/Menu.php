<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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
 
	public static function aboutUs()
	{
            
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('aboutUs', $data, TRUE);
            $var->load->view('index',$data);
	}
        
        public static function department()
	{
            
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/department', $data, TRUE);
            $var->load->view('index',$data);
	}
        
        public static function shipBuilding()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/shipBuilding', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function marineTechnology()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/marineTechnology', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function studentInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('studentInfo/studentInfo', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function ShipBuildingStudentInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('studentInfo/shipBuildingStudent', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function MarineTechnologyStudentInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('studentInfo/marineTechnologyStudent', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function ShipBuildingTeacherInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/shipBuildingTeacher', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function ShipBuildingStuffInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/shipBuildingStuff', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function MarineTechnologyTeacherInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/marineTechnologyTeacher', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function MarineTechnologyStuffInfo()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('department/marineTechnologyStuff', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function missionNvision()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('missionVision', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function MessageFromPrincipal()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('messagePrincipal', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function MessageFromVicePrincipal()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('messageVicePrincipal', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function Administration()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('Administration', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function AtAGlanceIMTM()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('AtAGlanceIMTM', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function academics()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/academics', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function syllabus()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/syllabus', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function classRoutine()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/classRoutine', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function academicCalendar()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/academicCalendar', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function result()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/result', $data, TRUE);
            $var->load->view('index',$data);
        }

        public static function rnd()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('academics/rnd', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function DigitalContent()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('digitalContent/digitalContent', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function Album()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('album/album', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function JobPlacement()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('IMTMCareer/jobPlacement', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function IMTMPlacementCell()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('IMTMCareer/PlacementCell', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function JobOpportunity()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('IMTMCareer/JobOpportunity', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function JobSeeker()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('IMTMCareer/JobSeeker', $data, TRUE);
            $var->load->view('index',$data);
        }
        
        public static function ContactUs()
        {
            $data = array();
            $var = new Menu();
            $data['menubar'] = $var->load->view('inc/menubar', $data, TRUE);
            $data['main_content'] = $var->load->view('ContactUs', $data, TRUE);
            $var->load->view('index',$data);
        }
}
