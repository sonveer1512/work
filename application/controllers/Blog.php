<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index($slug = 'list')
	{
		if ($slug == 'list') {

			$jsonarr = array('url' => $this->auth->getdomain());
			$json = json_encode($jsonarr);

			$response = $this->auth->callurl($json, $this->services->getbannerdetails());
			if (!empty($response)) {
				if ($response->code == 200) {
					$data['banner'] = $response->data;
				}
			}

			$jsonarr = array('url' => $this->auth->getdomain(), 'limit' => '12', 'offset' => '0', 'sort' => '');
			$json = json_encode($jsonarr);

			$response = $this->auth->callurl($json, $this->services->getblogpropaginationdetails());

			$data['item'] = '';
			if (!empty($response)) {
				if ($response->code == 200) {
					$data['item'] = $response->data;
				}
			}

			$this->load->view('blog_list',$data);

		} else {

			$jsonarr = array('url' => $this->auth->getdomain(), 'slug' => $slug);
			$json = json_encode($jsonarr);

			$response = $this->auth->callurl($json, $this->services->getblogdetails());

			$data['item'] = '';
			if (!empty($response)) {
				if ($response->code == 200) {
					$data['item'] = $response->data;
				}
			}

			if(!empty($data['item'])) {
				$this->load->view('blog_details',$data);
			}else{
				redirect('error404');
			}

		}
	}
}
