<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends MX_Controller
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
        $this->load->model('Course_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index() {}



    public function course_edit($course_id)
    {
        $this->data['title'] = 'Manage Item: contact page';
        $this->data['content'] = 'course_page/edit_course';
        $this->data['course'] = $this->Course_model->get_course_by_id($course_id);

        $this->load->view('app', $this->data);
    }

    public function course_update($course_id)
    {
        $update_course_page = $this->Course_model->update_course_by_id($course_id, [
            'detail' => $this->input->post('detail'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($update_course_page) {

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

        redirect('backoffice/page/course/course/edit/'.$course_id);
    }

}
