<?php

class MainModel extends CI_Model{
    private $theme;

    public function __construct() {
        parent::__construct();
        $this->load->model('settings/ThemesModel');
    }

    public function admin_settings() {
        $this->load->model('AdminModel');
        return $this->AdminModel->adminDetails();
    }

    public function general_settings() {
        $this->load->model('settings/GeneralModel');
        return $this->GeneralModel->get();
    }

    

    public function theme() {
        return $this->ThemesModel->get();
    }

    public function theme_view() {
        $theme = $this->ThemesModel->get();
        return function($view, $data = null) use ($theme) { return $this->load->view('themes/'.$theme.'/'.$view, $data); };
    }
    
    public function theme_assets() {
        $theme = $this->ThemesModel->get();
        return function($path) use ($theme) { echo base_url('application/views/themes/'.$theme.'/assets/'.$path); return true; };
    }

    public function pageData() {
        /* Loading all Basic Models */
        $this->load->model('settings/GeneralModel');
        $this->load->model('settings/ThemesModel');
        $this->load->model('BlogModel');
        
        /* Initializing settings with Data from Cache or Database */

        $settings = array(
            'general'       => $this->GeneralModel->get(),
            'theme'         => $this->ThemesModel->get(),
        );

        $theme = $settings['theme'];

        /* Returning Anonymous functions to Retrieve Theme Specific Views & Assets */

        $settings['theme_view'] = function($view, $data = null) use ($theme) { return $this->load->view('themes/'.$theme.'/'.$view, $data); };
        $settings['assets']     = function($path) use ($theme) { echo base_url('application/views/themes/'.$theme.'/assets/'.$path); return true; };
        return $settings;
    }
}
?>