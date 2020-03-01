<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends MX_Controller
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
        $this->load->model('Category_course_model');
    }

    public function index()
    {


        // Content
        $data['content'] = 'course';
        $data['category_course'] = $this->Category_course_model->get_category_course_all();



        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
