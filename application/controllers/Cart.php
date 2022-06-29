<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    public function __construct() {
		parent::__construct();
	}


    public function sidebarcart() {
        $this->load->view('cart/sidecart'); 
    }



    public function add_to_cart()
	{
		$product_id = $this->input->post('id');
		$varient_id = $this->input->post('varient');

		if(!empty($this->input->post('color'))) {
			$colorvalue = $this->input->post('color');
		}else{
			$colorvalue = '';
		}
		
		$quantity = $this->input->post('qty');

		if (!empty($product_id)) {

			$jsonarr = array('id' => $product_id);
			$json = json_encode($jsonarr);

			$response = $this->auth->callurl($json, $this->services->getproductdetailsforcart());
			if (!empty($response)) {
				if ($response->code == 200) {
					$item = $response->data;
				}
			}

			$options = array('id' => $product_id, 
							 'image' => $item->product_image,
							 'varient_id' => $varient_id,
							 'varient_name' => $item->varients,
							 'totalprice' => $item->price,
							 'slug' => $item->slug,
							 'color' => $colorvalue);

			$datas = array(
				'id' => 'sku_' . $product_id . $varient_id,
				'qty' => $quantity,
				'price' => $item->price,
				'name' => $item->name,
				'options' => $options
			);

			$cart = $this->cart->insert($datas);

			if($cart) {
				$response = array('status' => true);
			}else{
				$response = array('status' => false);
			}
			
		} else {
			$response = array('status' => false);
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}


}

?>