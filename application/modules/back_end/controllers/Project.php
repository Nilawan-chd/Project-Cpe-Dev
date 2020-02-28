<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MX_Controller
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
        $this->load->model('Project_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index() {}



    public function project_edit($project_id)
    {
        $this->data['title'] = 'Manage Item: contact page';
        $this->data['content'] = 'project/edit_project';
        $this->data['project'] = $this->Project_model->get_project_by_id($project_id);

        $this->load->view('app', $this->data);
    }

    public function project_update($project_id)
    {
        $update_project_page = $this->Project_model->update_project_by_id($project_id, [
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($update_project_page) {

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

        redirect('backoffice/page/project/project/edit/'.$project_id);
    }

}
