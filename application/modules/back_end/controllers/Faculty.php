<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends MX_Controller
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
        $this->load->model('Faculty_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'เกี่ยวกับ: คณาจารย์';
        $this->data['content'] = 'faculty/faculty';
        $this->data['faculty'] = $this->Faculty_model->get_faculty_all();


        $this->load->view('app', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'เกี่ยวกับ: เพิ่ม คณาจารย์';
        $this->data['content'] = 'faculty/add_faculty';

        $this->load->view('app', $this->data);
    }

    public function store()
    {
        $img = '';

        if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
            $img = $this->do_upload_img_faculty('img');
        }

        $add_faculty = $this->Faculty_model->insert_faculty([
            'name_th' => $this->input->post('name_th'),
            'name_en' => $this->input->post('name_en'),
            'status' => $this->input->post('status'),
            'img' => $img,
            'web' => $this->input->post('web'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'education' => $this->input->post('education'),
            'course' => $this->input->post('course'),
            'expert' => $this->input->post('expert')
        ]);

        if ($add_faculty) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม  คณจารย์',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/about/faculty');
    }

    public function edit($faculty_id)
    {
        $this->data['title'] = 'เกี่ยวกับ: แก้ไข คณาจารย์';
        $this->data['content'] = 'faculty/edit_faculty';
        $this->data['faculty'] = $this->Faculty_model->get_faculty_by_id($faculty_id);

        $this->load->view('app', $this->data);
    }

    public function update($faculty_id)
    {
        $faculty = $this->Faculty_model->get_faculty_by_id($faculty_id);
        $img = $faculty->img;

        if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
            $img = $this->do_upload_img_faculty('img');
        }
        $update_faculty = $this->Faculty_model->update_faculty_by_id($faculty_id, [
            'name_th' => $this->input->post('name_th'),
            'name_en' => $this->input->post('name_en'),
            'status' => $this->input->post('status'),
            'img' => $img,
            'web' => $this->input->post('web'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'education' => $this->input->post('education'),
            'course' => $this->input->post('course'),
            'expert' => $this->input->post('expert'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_faculty) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข  คณาจารย์',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/about/faculty');
    }

    public function destroy($faculty_id)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Faculty_model->delete_faculty_by_id($faculty_id);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ  คณาจารย์',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function ajax_get_faculty_and_sort_show()
    {
        $status = 500;
        $response['success'] = 0;

        $faculty = $this->Faculty_model->get_faculty_all();

        // Set Response
        if ($faculty != false) {
            $status = 200;
            $response['success'] = 1;

            $counter = 1;
            $html = '<ul id="sortable">';
            foreach ($faculty as $faculties) {
                $html .= '<li id="' . $faculties->id . '" data-sort="' . $faculties->sort . '">
                <span style="padding: 0px 100px;">' . $counter . ' . </span>
                <img  height="80px" src="' . base_url('storage/uploads/images/faculty/' . $faculties->img) . '"
                </li>';
                $counter++;
            }
            $html .= '</ul>';

            $response['data'] = $html;
        }

        // Send Response
        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function ajax_get_faculty_and_sort_update()
    {
        $status = 500;
        $response['success'] = 0;

        // Set Response
        if ($this->input->post()) {
            $bundle_id = $this->input->post('id');
            $bundle_sort = $this->input->post('sort');
            $counter = 1;
            foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {
                $this->Faculty_model->update_faculty_by_id($id, [
                    'sort' => $counter
                ]);
                $counter++;
            }

            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'จัดเรียง คณาจารย์',
                'event' => 'sort_item',
                'ip' => $this->input->ip_address(),
            ]);
        }

        // Send Response
        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function do_upload_img_faculty($filename)
    {
        $config['upload_path'] = './storage/uploads/images/faculty';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
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
