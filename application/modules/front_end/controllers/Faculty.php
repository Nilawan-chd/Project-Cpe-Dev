<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends MX_Controller
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
        $this->load->model('Faculty_model');



    }

    public function index()
    {


        // Content
        $data['content'] = 'Faculty';
        $data['faculty'] = $this->Faculty_model->get_faculty_all();


        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
