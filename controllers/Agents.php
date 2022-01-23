<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

	private $admin_user;
	private $page_data;
	
	public function __construct() {
        parent::__construct();
		
		$this->load->database();
		$this->load->model('AdminModel');
		$this->load->model('AgentsModel');
		
		$this->page_data 	        = $this->MainModel->pageData();
        $this->admin_user 	        = $this->AdminModel->adminDetails();
        $this->all_agents           = $this->AgentsModel->agentList();
        
        if(!$this->admin_user) {
            redirect(base_url(AUTH_CONTROLLER . '/login?redirect='.urlencode(current_url())));
        }
	}
	
	public function index(){
        $data = array(
            'page_data'     => $this->page_data,
            'page_title'    => 'Employees',
            'user'          => $this->admin_user,
            'agents'        => $this->all_agents
        );
		$this->load->view('admin/agents/agent', $data);
	}

	public function addagent(){

		$data = array(
            'page_data'     => $this->page_data,
            'page_title'    => 'Add Employee',
            'user'          => $this->admin_user
		);

        if($this->input->post('submit') && !$data['user']['disabled']) {
			$agentName		    = $this->security->xss_clean($this->input->post('agentName'));
            $agentAddress        = $this->security->xss_clean($this->input->post('agentAddress'));
            $agentEmail       = $this->security->xss_clean($this->input->post('agentEmail'));
            $agentNumber        = $this->security->xss_clean($this->input->post('agentNumber'));
            $agentDesignation        = $this->security->xss_clean($this->input->post('agentDesignation'));

            $rules = array(
                array(
                    'field'     => 'agentName',
                    'label'     => 'Agent Name',
                    'rules'     => 'required'
                ),
                array(
                    'field'     => 'agentAddress',
                    'label'     => 'Agent Address',
                    'rules'     => 'required'
                ),
                array(
                    'field'     => 'agentEmail',
                    'label'     => 'Agent Email',
                    'rules'     => 'required'
                ),
                array(
                    'field'     => 'agentNumber',
                    'label'     => 'Agent Phone',
                    'rules'     => 'required|regex_match[/^[0-9]{10}$/]'
                ),
                array(
                    'field'     => 'agentDesignation',
                    'label'     => 'Agent Designation',
                    'rules'     => 'required'
                ),
			);
			
            $this->form_validation->set_rules($rules);
			$validation = $this->form_validation->run();
			
            if($validation) {
                $new_added = array(
                    'agentName'         => htmlentities($agentName),
                    'agentAddress'       => htmlentities($agentAddress),
                    'agentEmail'       => htmlentities($agentEmail),
                    'agentDesignation'       => htmlentities($agentDesignation),
                    'agentNumber'       => $agentNumber,
                );
                
                $this->AgentsModel->addAgent($new_added);
                $data['alert'] = array('type' => 'alert alert-success', 'msg' => 'Agent Added Successfully.');
                return redirect(AGENTS_CONTROLLER);
            }
			
        }
		$this->load->view('admin/agents/addagent', $data);
	}

	public function editagent($id = null) {
        if($agent = $this->AgentsModel->getAgent($id)) {
            $data = array(
                'page_data'     => $this->page_data,
                'page_title'    => 'Editing: ' . html_entity_decode($agent['agentName']),
                'user'          => $this->admin_user,
                'agent'         => $agent
            );

            if($this->input->post('submit') && !$data['user']['disabled']) {
				
                $agentName		    = $this->security->xss_clean($this->input->post('agentName'));
                $agentAddress        = $this->security->xss_clean($this->input->post('agentAddress'));
                $agentEmail       = $this->security->xss_clean($this->input->post('agentEmail'));
                $agentNumber        = $this->security->xss_clean($this->input->post('agentNumber'));
                $agentDesignation        = $this->security->xss_clean($this->input->post('agentDesignation'));
    
                $rules = array(
                    array(
                        'field'     => 'agentName',
                        'label'     => 'Agent Name',
                        'rules'     => 'required'
                    ),
                    array(
                        'field'     => 'agentAddress',
                        'label'     => 'Agent Address',
                        'rules'     => 'required'
                    ),
                    array(
                        'field'     => 'agentEmail',
                        'label'     => 'Agent Email',
                        'rules'     => 'required'
                    ),
                    array(
                        'field'     => 'agentNumber',
                        'label'     => 'Agent Phone',
                        'rules'     => 'required|regex_match[/^[0-9]{10}$/]'
                    ),
                    array(
                        'field'     => 'agentDesignation',
                        'label'     => 'Agent Designation',
                        'rules'     => 'required'
                    ),
                );

                $this->form_validation->set_rules($rules);
                $validation = $this->form_validation->run();

                if($validation) {
                    $to_update = array(
                        'agentName'         => htmlentities($agentName),
                        'agentAddress'      => htmlentities($agentAddress),
                        'agentEmail'        => htmlentities($agentEmail),
                        'agentDesignation'  => htmlentities($agentDesignation),
                        'agentNumber'       => $agentNumber,
					);
					

					$this->AgentsModel->updateAgent($id, $to_update);
                    $data['agent'] = $this->AgentsModel->getAgent($agent['id']);
                    $this->session->set_flashdata('alert', array('type' => 'alert alert-success', 'msg'  => 'Successfully updated agent.'));
                    redirect(AGENTS_CONTROLLER);
                }
            }

            $this->load->view('admin/agents/editagent', $data);
        } else
            redirect(base_url(AGENTS_CONTROLLER));
	}

	public function deleteAgent($id = null, $confirm = false) {
		
		$data = array(
			'page_data' 	=> $this->page_data,
            'page_title' 	=> 'All Agents',
            'user' 			=> $this->admin_user,
            'agents'        => $this->all_agents,
		);

		if($confirm && !$data['user']['disabled']) {
			$this->AgentsModel->deleteAgent($id);
			$this->session->set_flashdata('alert', array('type' => 'alert alert-success', 'msg'  => 'Successfully delete agent.'));
		}
		return redirect(AGENTS_CONTROLLER);
	}
}
