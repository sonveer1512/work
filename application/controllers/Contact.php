<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct() {
		parent::__construct();
	}


    public function contactform(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');         
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean');         
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');         
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');         
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');                

		if($this->form_validation->run() == false){    
			$response = array('status' => false, 'message'=> 'Enter Mandatory Fields');        
		}else {  
            
			$jsonarr = array('url' => $this->auth->getdomain(),
							 'name' => $this->input->post('name'),
							 'email' => $this->input->post('email'),
							 'subject' => $this->input->post('subject'),
							 'message' => $this->input->post('message'),
							);
			$json = json_encode($jsonarr);
			$response = $this->auth->callurl($json, $this->services->savecontactdata());
        }  

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
	}



	public function savenewsletter(){
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean');         
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');                

		if($this->form_validation->run() == false){    
			$response = array('status' => false, 'message'=> 'Enter Mandatory Fields');        
		}else {              
			$jsonarr = array('url' => $this->auth->getdomain(), 'email' => $this->input->post('email') );
			$json = json_encode($jsonarr);
			$response = $this->auth->callurl($json, $this->services->savenewsletterdata());
        }  

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
	}


}

?>