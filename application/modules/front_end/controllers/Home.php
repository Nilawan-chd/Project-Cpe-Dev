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
        $this->load->model('Faculty_model');
        $this->load->model('Category_news_model');
        $this->load->model('News_model');
        $this->load->model('Contact_model');
    }

    public function index()
    {

        // Title Page
        $data['title'] = '';

         // Content
        $data['content'] = 'home';

        // Utilities
        $data['banner'] = $this->Banner_model->get_banner_all();
        $data['contact'] = $this->Contact_model->get_contact_by_id(1);
        $data['faculty'] = $this->Faculty_model->get_faculty_by_status_id(1);
        $data['category_news'] = $this->Category_news_model->get_category_news_all();
//        $data['news'] = $this->News_model->get_news_by_category_news_id();
        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }


}
