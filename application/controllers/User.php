<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


    public function login() {

        $jsonarr = array('url' => $this->auth->getdomain());
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $this->load->view('login',$data);
    }

}

?>