<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsall extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*
        | -------------------------------------------------------------------------
        | SET UTILITIES
        | -------------------------------------------------------------------------
        */


    }

    public function index()
    {


        // Content
        $data['content'] = 'newsall';



        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}