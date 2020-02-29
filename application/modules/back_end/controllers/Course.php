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
        $this->load->model('Category_course_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function show($category_id)
    {
        $category_course = $this->Category_course_model->get_category_course_by_id($category_id);
        $this->data['title'] = 'หลักสูตร: หลักสูตร';
        $this->data['content'] = 'course/course';
        $this->data['course'] = $this->Course_model->get_course_by_category_course_id($category_id);
        $this->data['category_course'] = $this->Category_course_model->get_category_course_all();
        $this->data['category_course_id'] = $category_course->id;
        $this->data['category_course_title'] = $category_course->title;

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
        $this->load->view('app', $this->data);
    }

    public function create($category_id)
    {
        $this->data['title'] = 'หลักสูตร: หลักสูตร - เพิ่ม';
        $this->data['content'] = 'course/add_course';
        $this->data['category_course'] = $this->Category_course_model->get_category_course_by_id($category_id);

         $this->load->view('app', $this->data);
    }

    public function store()
    {
        $file_pdf = '';
        if (isset($_FILES['file_pdf']) && $_FILES['file_pdf']['name'] != '') {
            $file_pdf = $this->do_upload_pdf_course('file_pdf');
        }
        $add_course = $this->Course_model->insert_course([
            'title' => $this->input->post('title'),
            'category_course_id' => $this->input->post('category_course_id'),
            'file_pdf' => $file_pdf
        ]);

        if ($add_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม หลักสูตร',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/course/course/show/' . $this->input->post('category_course_id'));
    }

    public function edit($course_id)
    {
        $course = $this->Course_model->get_course_by_id($course_id);

        $category_course_id = $course->category_course_id;

        $this->data['title'] = 'หลักสูตร: หลักสูตร - แก้ไข';
        $this->data['content'] = 'course/edit_course';
        $this->data['course'] = $course;
        $this->data['category_course'] = $this->Category_course_model->get_category_course_by_id($category_course_id);

        $this->load->view('app', $this->data);
    }

    public function update($course_id)
    {
        $course = $this->Course_model->get_course_by_id($course_id);


        $file_pdf = $course->file_pdf;
        if (isset($_FILES['file_pdf']) && $_FILES['file_pdf']['name'] != '') {
            $file_pdf = $this->do_upload_pdf_course('file_pdf');
        }
        $update_course = $this->Course_model->update_course_by_id($course_id, [
            'title' => $this->input->post('title'),
            'category_course_id' => $this->input->post('category_course_id'),
            'file_pdf' => $file_pdf,
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข  หลักสูตร',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/course/course/show/' . $this->input->post('category_course_id'));
    }

    public function destroy($course_id)
    {
        $status = 500;
        $response['success'] = 0;

        $course = $this->Course_model->delete_course_by_id($course_id);

        if ($course != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ  หลักสูตร',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    public function do_upload_pdf_course($filename)
    {
        $config['upload_path'] = './storage/uploads/files/course';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($filename)) {
            $error = array('error' => $this->upload->display_errors());

            return false;
        } else {
            $data = array('upload_data' => $this->upload->data());

            return $data['upload_data']['file_name'];
        }
    }

}
