<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*
        | -------------------------------------------------------------------------
        | SET UTILITIES
        | -------------------------------------------------------------------------
        */

        /*
        | -------------------------------------------------------------------------
        | model
        | -------------------------------------------------------------------------
        */
        $this->load->model('About_model');



    }

    public function index()
    {


        // Content
        $data['content'] = 'about';
        $data['about'] = $this->About_model->get_about_by_id(1);


        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
