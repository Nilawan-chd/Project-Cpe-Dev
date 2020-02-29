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
        $img = '';

        if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
            $img = $this->do_upload_img_category_course('img');
        }
        $add_category_course = $this->Category_course_model->insert_category_course([
            'title' => $this->input->post('title'),
            'name_th' => $this->input->post('name_th'),
            'name_en' => $this->input->post('name_en'),
            'name_th_full' => $this->input->post('name_th_full'),
            'name_th_short' => $this->input->post('name_th_short'),
            'name_en_full' => $this->input->post('name_en_full'),
            'name_en_short' => $this->input->post('name_en_short'),
            'img' => $img,
            'objective' => $this->input->post('objective')

        ]);

        if ($add_category_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม  Category_course',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/course/category');
    }

    public function edit($category_course_id)
    {
        $this->data['title'] = 'Page: Home - Galleries - Edit';
        $this->data['content'] = 'category_course/edit_category_course';
        $this->data['category_course'] = $this->Category_course_model->get_category_course_by_id($category_course_id);

        $this->load->view('app', $this->data);
    }

    public function update($category_course_id)
    {
        $category_course = $this->Category_course_model->get_category_course_by_id($category_course_id);

        $img = $category_course->img;

        if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
            $img = $this->do_upload_img_category_course('img');
        }
        $update_category_course = $this->Category_course_model->update_category_course_by_id($category_course_id,[
            'title' => $this->input->post('title'),
            'name_th' => $this->input->post('name_th'),
            'name_en' => $this->input->post('name_en'),
            'name_th_full' => $this->input->post('name_th_full'),
            'name_th_short' => $this->input->post('name_th_short'),
            'name_en_full' => $this->input->post('name_en_full'),
            'name_en_short' => $this->input->post('name_en_short'),
            'img' => $img,
            'objective' => $this->input->post('objective'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_category_course) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข  Category_course',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/course/category');
    }

    public function destroy($category_course_id)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Category_course_model->delete_category_course_by_id($category_course_id);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ  Category_course',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function do_upload_img_category_course($filename)
    {
        $config['upload_path'] = './storage/uploads/images/category_course';
        $config['allowed_types'] = 'gif|jpg|png';

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
