<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_download extends MX_Controller
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
        $this->load->model('Category_download_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'หน้า: ประเภทดาวน์โหลด';
        $this->data['content'] = 'category_download/category_download';
        $this->data['category_download'] = $this->Category_download_model->get_category_download_and_count_all();

        $this->load->view('app', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'หน้า: ประเภทดาวน์โหลด - เพิ่ม';
        $this->data['content'] = 'category_download/add_category_download';

        $this->load->view('app', $this->data);
    }

    public function store()
    {

        $add_category_download = $this->Category_download_model->insert_category_download([
            'title' => $this->input->post('title')

        ]);

        if ($add_category_download) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม  ประเภทดาวน์โหลด',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/download/category');
    }

    public function edit($category_download_id)
    {
        $this->data['title'] = 'หน้า: ประเภทดาวน์โหลด - แก้ไข';
        $this->data['content'] = 'category_download/edit_category_download';
        $this->data['category_download'] = $this->Category_download_model->get_category_download_by_id($category_download_id);

        $this->load->view('app', $this->data);
    }

    public function update($category_download_id)
    {
        $update_category_download = $this->Category_download_model->update_category_download_by_id($category_download_id,[
            'title' => $this->input->post('title'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_category_download) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข  ประเภทดาวน์โหลด',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/download/category');
    }

    public function destroy($category_download_id)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Category_download_model->delete_category_download_by_id($category_download_id);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ  ประเภทดาวน์โหลด',
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
