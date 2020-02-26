<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();

        // Model
        $this->load->model('Banner_model');
        $this->load->model('Category_news_model');
        $this->load->model('News_model');


	}

	public function index()
	{


		// Content
		$data['content'] = 'home';
        $data['banner'] = $this->Banner_model->get_banner_all();




		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
