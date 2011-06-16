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
		$data['i'] = 0;
		$this->load->view('home_view', $data);
	}

	function view()

	{
		$temp = $this->uri->segment(3);
		$photoinfo = json_decode(file_get_contents("https://api.instagram.com/v1/media/$temp?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5"));
		$photourl = $photoinfo->data->images->standard_resolution->url;
		$profilephotourl = $photoinfo->data->user->profile_picture;
		$likecount = $photoinfo->data->likes->count;
		$likeuser = $photoinfo->data->likes->data;
		$commentcount = $photoinfo->data->comments->count;
		$commentuser = $photoinfo->data->comments->data;

		$userid = $photoinfo->data->user->id;
		$userinfo = json_decode(file_get_contents("https://api.instagram.com/v1/users/$userid/?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5"));
		$userfollowers = $userinfo->data->counts->followed_by;
		$userfollows = $userinfo->data->counts->follows;
		$userphotocount = $userinfo->data->counts->media;
		$username = $userinfo->data->username;

		$data['commentuser'] = $commentuser;
		$data['commentcount'] = $commentcount;
		$data['likeuser'] = $likeuser;
		$data['likecount'] = $likecount;
		$data['username'] = $username;
		$data['profilephotourl'] = $profilephotourl;
		$data['photourl'] = $photourl;	
		$data['json_o'] = $photoinfo;
		$data['followers'] = $userfollowers;
		$data['following'] = $userfollows;
		$data['photocount'] = $userphotocount;
		$this->load->view('photo_view', $data);
	}

	function browse()

	{
		$temp = $this->uri->segment(3);
		$tempjson = json_decode(file_get_contents("https://api.instagram.com/v1/tags/fashion/media/recent?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5&max_tag_id=$temp"));
		$data['json_o'] = $tempjson;
		$data['tempuri'] = $temp;
		$data['i'] = 0;
		$this->load->view('home_view', $data);
	}

}

?>