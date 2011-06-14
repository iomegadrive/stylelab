<?php 

class Home extends CI_Controller {
	

	public function __construct()

	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
	}

	function index()

	{
		$temp = $this->uri->segment(3);
		$tempjson = json_decode(file_get_contents("https://api.instagram.com/v1/tags/fashion/media/recent?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5&max_tag_id=$temp"));
		$data['json_o'] = $tempjson;
		$data['tempuri'] = $temp;
		$this->load->view('home_view', $data);
	}

	function view()

	{
		$temp = $this->uri->segment(3);
		$data['json_o'] = json_decode(file_get_contents("https://api.instagram.com/v1/media/$temp?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5"));
		$this->load->view('photo_view', $data);
	}

	function browse()

	{
		$temp = $this->uri->segment(3);
		$tempjson = json_decode(file_get_contents("https://api.instagram.com/v1/tags/fashion/media/recent?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5&max_tag_id=$temp"));
		$data['json_o'] = $tempjson;
		$data['tempuri'] = $temp;
		$this->load->view('home_view', $data);
	}
}

?>