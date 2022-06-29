<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function image()
	{
		$request = json_decode(file_get_contents('php://input'), 1);
		if (!empty($request['base64_string'])) {
			return $this->base64_to_jpeg($request['base64_string'], $request['path'], $request['filename']);
		} else {
			return json_encode(array('status' => 'Data Not Found', 'code' => 400));
		}
	}


	public function base64_to_jpeg($base64_string, $path, $filename)
	{
		$rand = rand(1000, 9999);
		$output_file1 = $rand . $filename;
		$output_file = "assets/uploads/" . $path . "/" . $output_file1;

		$ifp = fopen($output_file, "wb");
		fwrite($ifp, base64_decode($base64_string));
		fclose($ifp);

		$location = "assets/uploads/thumb/". $path ."/". $output_file1;

		$config_manip = array(
			'image_library' => 'gd2',
			'source_image' => $output_file,
			'new_image' => $location,
			'maintain_ratio' => TRUE,
			'quality' => '50%'
		);

		$this->load->library('image_lib', $config_manip);
		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		}

		$this->image_lib->clear();

		echo json_encode(array('code' => 200, 'url' => $output_file, 'thumb_url' => $location));
	}


}

?>