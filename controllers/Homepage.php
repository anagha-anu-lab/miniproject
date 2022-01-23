<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	
	private $page_data;

	public function __construct() {
		parent::__construct();
		
		$this->load->database();
        $this->load->model('GalleryModel');	

		$this->loginSession 			= $this->session->userdata('id');
		$this->page_data 				= $this->MainModel->pageData();
		$this->page_data['user'] 	    = $this->LoginModel->user_info($this->loginSession);
		$this->validateSession 			= $this->LoginModel->validateSession($this->loginSession);
		
	}

	public function index() {
		$data 			= $this->ServiceModel->serviceList();
		$gcategories 	= $this->GalleryModel->listCat();
        $galleryImages 	= $this->GalleryModel->listGallery();
		$themeViewData  = array_merge(
								$this->page_data,
								array(
									'serviceList' 				=> $data,
									'gcategories'				=> $gcategories,
									'galleryImages'				=> $galleryImages,
									'userinfo'					=> $this->page_data['user']
								)
						);
		$theme_view = $this->page_data['theme_view'];
		$theme_view('default', $themeViewData);
	}

	
	public function notfound() {
		$themeViewData  = $this->page_data;
		$theme_view = $this->page_data['theme_view'];
		$theme_view('404', $themeViewData);
	}
}
