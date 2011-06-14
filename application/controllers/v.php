<?php 

class V extends CI_Controller {
	
	public function __construct()

	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()

	{
		$temp = $this->uri->segment(2);
		$json_o = json_decode(file_get_contents("https://api.instagram.com/v1/media/$temp?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5"));
		$data['imageurl'] = $json_o->data->images->standard_resolution->url;
		$this->load->view('photo_viewer', $data);
	}

}

?>