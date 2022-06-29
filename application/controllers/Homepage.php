<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
        }

        // general details for home page 
        public function getgeneraldetails()
        {
                $jsonarr = array('url' => $this->auth->getdomain());
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->getvendordetails());
                $resp = array();
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $resp = array('code' => 200, 'data' => $response->data);
                        }
                }

                $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode($resp));
        }




        // banner details for home page 
        public function getbannerdetails()
        {
                $jsonarr = array('url' => $this->auth->getdomain());
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->getbannerdetails());                
                $data['item'] = '';
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/banner', $data);
        }


        // home categories with limit 3
        public function gethomecategories() {

                $jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '3', 'offset' => '0');
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->gethomecategories());                
                $data['item'] = '';
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/categories', $data);
        }
        
        
        
        
        // home categories with limit 3
        public function getproductofallcategories() {

                $jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '5', 'offset' => '0');
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->getcategories());                
                $data['item'] = '';
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/procategories', $data);
        }




        public function getproductbycategories($category_id) {      

                $jsonarr = array('url' => $this->auth->getdomain(), 'category' => $category_id, 'limit' => '8', 'offset' => '0');
                $json = json_encode($jsonarr);
                $response = $this->auth->callurl($json, $this->services->getprodetailsbycat());                
                $data = array();

                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/proproducts', $data);
        }
        
        
        
        
        
        public function gethomepageblogs() {      

                $jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '3', 'offset' => '0');
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->gethomepageblogs());                
                $data = array();
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/homepageblogs', $data);
        }



        public function gethomepagetestimonial() {      

                $jsonarr = array('url' => $this->auth->getdomain());
                $json = json_encode($jsonarr);

                $response = $this->auth->callurl($json, $this->services->gethomepagetestimonial());                
                $data = array();
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['item'] = $response->data;
                        }
                }

                $this->load->view('home/testimonial', $data);
        }




        














        


        public function getproductdetails()
        {
                $jsonarr = array('url' => $this->auth->getdomain());
                $json = json_encode($jsonarr);

                $response = json_decode($this->auth->callurl($json, $this->services->getcategorydetails()));
                if ($response->code == 200) {
                        $data['categorylist'] = $response->data;
                        $this->load->view('home/productlist', $data);
                }
        }


        public function product_by_category($id)
        {

                $jsonarr = array('url' => $this->auth->getdomain(), 'id' => $id, 'limit' => '10');
                $json = json_encode($jsonarr);

                // echo $this->auth->callurl($json, $this->services->getprodetailsbycat());
                $response = json_decode($this->auth->callurl($json, $this->services->getprodetailsbycat()));
                if (!empty($response)) {
                        if ($response->code == 200) {
                                $data['productlist'] = $response->data;

                                $this->load->view('home/productbycat', $data);
                        } else {
                                $this->load->view('home/productbycat');
                        }
                } else {
                        echo "Check API Response";
                }
        }
}
