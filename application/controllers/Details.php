<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Details extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    // about page details
    public function about()
    {

        
        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'about');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "About Us";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }






    // terms and conditions
    public function terms()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'terms');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Terms & Conditions";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }





    // terms and conditions
    public function privacy()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'privacy');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Privacy Policy";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }




    // terms and conditions
    public function return()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'return');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Return Policy";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }





    // terms and conditions
    public function refund()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'refund');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Refund Policy";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }





    // terms and conditions
    public function faqs()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'faqs');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Frequently Asked Questions";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }  
    }




    // terms and conditions
    public function wallet()
    {

        $jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'wallet_policy');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

        $response = $this->auth->callurl($json, $this->services->getcontentdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['item'] = $response->data;
            }
        }

        $data['title'] = "Wallet Policy";

        if(!empty($data['item'])) {
            $this->load->view('about', $data);  
        }else{
            redirect('error404');
        }
    }
}
