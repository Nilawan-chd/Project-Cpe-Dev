<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends MX_Controller
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
        $this->load->model('Lab_model');
    }

    public function index()
    {


        // Content
        $data['content'] = 'lab';
        $data['lab'] = $this->Lab_model->get_labs_all();



        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
