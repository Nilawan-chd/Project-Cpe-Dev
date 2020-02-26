<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller
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
        $this->load->model('About_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index() {}



    public function about_edit($about_id)
    {
        $this->data['title'] = 'Manage Item: contact page';
        $this->data['content'] = 'about_page/edit_about';
        $this->data['abouts'] = $this->About_model->get_about_by_id($about_id);

        $this->load->view('app', $this->data);
    }

    public function about_update($about_id)
    {
        $update_about_page = $this->About_model->update_about_by_id($about_id, [
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($update_about_page) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข Info Contact Page',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Update Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/about/history/edit/'.$about_id);
    }

}
