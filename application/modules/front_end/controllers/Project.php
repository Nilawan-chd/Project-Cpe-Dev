<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MX_Controller
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
        $this->load->model('Project_model');



    }

    public function index()
    {


        // Content
        $data['content'] = 'project';
        $data['project'] = $this->Project_model->get_project_by_id(1);


        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
