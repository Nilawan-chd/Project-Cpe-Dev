<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_course extends MX_Controller
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
        $this->load->model('Category_course_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Page: Category_course - list';
        $this->data['content'] = 'category_course/category_course';
        $this->data['category_course'] = $this->Category_course_model->get_category_course_and_count_all();

        $this->load->view('app', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'Page: Category_course - Add';
        $this->data['content'] = 'category_course/add_category_course';

        $this->load->view('app', $this->data);
    }

    public function store()
    {

        $add_category_course = $this->Category_course_model->insert_category_course([
            'title' => $this->input->post('title')
        ]);

        if ($add_category_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม Image Category_course',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/course');
    }

    public function edit($category_courseid)
    {
        $this->data['title'] = 'Page: Home - Galleries - Edit';
        $this->data['content'] = 'category_course/edit_category_course';
        $this->data['category_course'] = $this->Category_course_model->get_category_course_by_id($category_courseid);

        $this->load->view('app', $this->data);
    }

    public function update($category_courseid)
    {

        $update_category_course = $this->Category_course_model->update_category_course_by_id($category_courseid, [
            'title' => $this->input->post('title'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_category_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข Image Category_course',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/course');
    }

    public function destroy($category_courseid)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Category_course_model->delete_category_course_by_id($category_courseid);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ Image Category_course',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }


}
