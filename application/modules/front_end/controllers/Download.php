<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends MX_Controller
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
        $this->load->model('Category_download_model');
    }

    public function index()
    {


        // Content
        $data['content'] = 'download';
        $data['category_download'] = $this->Category_download_model->get_category_download_all();



        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }
}
