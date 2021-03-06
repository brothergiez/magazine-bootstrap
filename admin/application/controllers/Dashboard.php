<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
	}

	function index(){
		$data['class'] 	= $this->router->fetch_class();
		$data['method']	= $this->router->fetch_method();
		$this->load->template('dashboard', $data);
	}
}

?>