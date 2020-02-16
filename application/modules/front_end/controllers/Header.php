<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends MX_Controller
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
        $this->load->model('Page_model');
        $this->load->model('Sub_page_model');

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



        // Utilities


        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */
        $data['pages'] = $this->Page_model->get_pages_all();
//        $data['sub_pages'] = $this->Sub_page_model->get_sub_pages_all();
//        $data['about_pages'] = $this->Sub_page_model->get_sub_pages_by_page_id(4);
//        $data['lab_pages'] = $this->Sub_page_model->get_sub_pages_by_page_id(4);


        $this->load->view('layouts/header', $data);
    }
}
