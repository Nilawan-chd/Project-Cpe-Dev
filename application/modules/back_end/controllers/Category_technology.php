<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_technology extends MX_Controller
{

    private $data = false;

    public function __construct()
    {
        parent::__construct();

        /*
        | -------------------------------------------------------------------------
        | MIDDLEWARE
        | -------------------------------------------------------------------------
        */

        require_login('backoffice/login');

        /*
        | -------------------------------------------------------------------------
        | SET UTILITIES
        | -------------------------------------------------------------------------
        */

        // Model
        $this->load->model('User_model');
        $this->load->model('Category_technology_model');
        $this->load->model('Technology_video_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Technology';
        $this->data['content'] = 'category_technology/category_technology';
        $this->data['technologies'] = $this->Category_technology_model->get_category_technology_and_count_all();

        $this->load->view('app', $this->data);
    }

    public function show()
    {
    }

    public function edit($category_technologies)
    {
        $this->data['title'] = 'Technology';
        $this->data['content'] = 'category_technology/edit_category_technology';
        $this->data['technologies'] = $this->Category_technology_model->get_category_technology_by_id($category_technologies);

        $this->load->view('app', $this->data);
    }

    public function update($category_technologies)
    {
        $update_category_technology = $this->Category_technology_model->update_category_technology_by_id($category_technologies,
            [
                'title' => $this->input->post('title'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        if ($update_category_technology) {
            $this->session->set_flashdata('success', 'Edit Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/technology/category');
    }

}