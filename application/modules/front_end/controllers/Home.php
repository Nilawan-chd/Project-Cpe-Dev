<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();

		/*
		| -------------------------------------------------------------------------
		| SET UTILITIES
		| -------------------------------------------------------------------------
		*/

		// Model
        $this->load->model('Banner_model');
	}

	public function index()
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

//		$home_id = 1;
//		$page_content = $this->Home_page_model->get_home_pages_by_id($home_id);

		/*
		| -------------------------------------------------------------------------
		| SET DATA
		| -------------------------------------------------------------------------
		*/


		// Content
		$data['content'] = 'home';

		// Utilities


		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/
        $data['banners'] = $this->Banner_model->get_banner_all();

		$this->load->view('app', $data);
	}
}
