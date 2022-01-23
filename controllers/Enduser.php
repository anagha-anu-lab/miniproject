<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Enduser extends CI_Controller {
	
	private $page_data;

	public function __construct() {
		parent::__construct();
		
		$this->load->database();

		$loginSession 				= $this->session->userdata('id');
		$this->page_data 			= $this->MainModel->pageData();
		$this->page_data['user'] 	= $this->LoginModel->user_info($loginSession);
        $validateSession 			= $this->LoginModel->validateSession($loginSession);

		if($validateSession == "" || !$this->page_data['user'])
		return redirect('login');
	}
	
	public function logout() {
		$this->session->sess_destroy();
		return redirect('homepage');
	}
}
