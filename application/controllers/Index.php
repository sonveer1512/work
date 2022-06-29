<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index(){
		$this->load->view('index');
	}


	public function getcategories() {
		$jsonarr = array('url' => $this->auth->getdomain());
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }
	}



	public function shop(){

		$jsonarr = array('url' => $this->auth->getdomain());
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

		$jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '9', 'offset' => '0', 'sort' => '');
		$json = json_encode($jsonarr);

		$response = $this->auth->callurl($json, $this->services->getpropaginationdetails()); 

		$data['item'] = '';
		if (!empty($response)) {
				if ($response->code == 200) {
						$data['item'] = $response->data;
				}
		}

		$this->load->view('shop_list',$data);
	}




	public function shoppagination() {
		$id = $this->input->post('id');
		$sort = $this->input->post('sort');

		if($id > 0) {
			$offset = (($id-1) * 9);
		}else{
			$offset = 0;
		}

		if($sort == 'all') {
			$sort = '';
		}

		$jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '9', 'offset' => $offset, 'sort' => $sort);
		$json = json_encode($jsonarr);

		$response = $this->auth->callurl($json, $this->services->getpropaginationdetails()); 
		$data['item'] = '';
		if (!empty($response)) {
			if ($response->code == 200) {
					$data['item'] = $response->data;
			}
		}

		$this->load->view('inner/shoplist',$data);
	}




	public function shopblogpagination() {
		$id = $this->input->post('id');

		if($id > 0) {
			$offset = (($id-1) * 12);
		}else{
			$offset = 0;
		}

		$jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '12', 'offset' => $offset);
		$json = json_encode($jsonarr);

		$response = $this->auth->callurl($json, $this->services->getblogpropaginationdetails()); 
		$data['item'] = '';
		if (!empty($response)) {
			if ($response->code == 200) {
					$data['item'] = $response->data;
			}
		}

		$this->load->view('inner/bloglist',$data);
	}





	public function contact(){
		$jsonarr = array('url' => $this->auth->getdomain(), 'want' => 'about');
        $json = json_encode($jsonarr);

        $response = $this->auth->callurl($json, $this->services->getbannerdetails());
        if (!empty($response)) {
            if ($response->code == 200) {
                $data['banner'] = $response->data;
            }
        }

		$this->load->view('contact');
	}



	public function product_details(){
		$this->load->view('product_details');
	}
	

	public function my_account(){
		$this->load->view('my_account');
	}

	public function wishlist(){
		$this->load->view('wishlist');
	}

	public function cart(){
		$this->load->view('cart');
	}

	public function products()
	{
		$this->load->view('product');
	}


	// public function products($slug)
	// {
	// 	$this->load->view('product_details');
	// }











	




	





}
