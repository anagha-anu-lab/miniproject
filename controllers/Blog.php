<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	private $page_data;

	public function __construct() {
		parent::__construct();
		
		$this->load->database();
        $this->load->model('GalleryModel');	
		$this->load->model('BlogModel');
        $this->load->helper('text');

		$this->page_data 	        = $this->MainModel->pageData();
        $this->loginSession 	    = $this->session->userdata('id');
		$this->page_data 			= $this->MainModel->pageData();
        $this->page_data['user'] 	= $this->LoginModel->user_info($this->loginSession);

       
	}

	public function index($permalink = null) {
        if($permalink && $post = $this->BlogModel->get_post_by_permalink($permalink)) {
            $data               = $this->page_data;
			$data['permalink']  = $permalink;
            $data['post']       = $post;

            $theme_view = $data['theme_view'];
            $theme_view('single', $data);
        }
        else{
            $this->load->library('pagination');
            $config=[
                'base_url' => base_url(BLOG_CONTROLLER),
                'per_page' => 12,
                'total_rows'=> $this->BlogModel->num_rows()
            ];
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['attributes'] = ['class' => 'page-link'];
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
            $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            
            $this->pagination->initialize($config);
            $this->blogListu     = $this->BlogModel->blogListu($config['per_page'],$this->uri->segment(2));
            // $this->page_data['user'] = $this->LoginModel->user_info($this->page_data['user']['id']);
            
            $data               = $this->page_data;
            $data['blogList']   = $this->blogListu;
            // $data['user']       = $this->page_data['user'];
            
            $theme_view = $data['theme_view'];
            $theme_view('blog', $data);
        }
    }
}
?>