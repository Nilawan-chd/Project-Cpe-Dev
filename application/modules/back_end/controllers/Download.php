<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends MX_Controller
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
        $this->load->model('Download_model');
        $this->load->model('Category_download_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function show($category_id)
    {
        $category_download = $this->Category_download_model->get_category_download_by_id($category_id);
        $this->data['title'] = 'หน้า: ดาวน์โหลด';
        $this->data['content'] = 'download/download';
        $this->data['download'] = $this->Download_model->get_download_by_category_download_id($category_id);
        $this->data['category_download'] = $this->Category_download_model->get_category_download_all();
        $this->data['category_download_id'] = $category_download->id;
        $this->data['category_download_title'] = $category_download->title;

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
        $this->load->view('app', $this->data);
    }

    public function create($category_id)
    {
        $this->data['title'] = 'หน้า: ดาวน์โหลด - เพิ่ม';
        $this->data['content'] = 'download/add_download';
        $this->data['category_download'] = $this->Category_download_model->get_category_download_by_id($category_id);

         $this->load->view('app', $this->data);
    }

    public function store()
    {
        $file = '';
        if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
            $file = $this->do_upload_file_download('file');
        }
        $add_download = $this->Download_model->insert_download([
            'title' => $this->input->post('title'),
            'category_downloads_id' => $this->input->post('category_download_id'),
            'file' => $file
        ]);

        if ($add_download) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม รายการดาวน์โหลด',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/download/download/show/' . $this->input->post('category_download_id'));
    }

    public function edit($download_id)
    {
        $download = $this->Download_model->get_download_by_id($download_id);

        $category_download_id = $download->category_downloads_id;

        $this->data['title'] = 'หน้า: ดาวน์โหลด - แก้ไข';
        $this->data['content'] = 'download/edit_download';
        $this->data['download'] = $download;
        $this->data['category_download'] = $this->Category_download_model->get_category_download_by_id($category_download_id);

        $this->load->view('app', $this->data);
    }

    public function update($download_id)
    {
        $download = $this->Download_model->get_download_by_id($download_id);


        $file = $download->file;
        if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
            $file = $this->do_upload_file_download('file');
        }

        $update_download = $this->Download_model->update_download_by_id($download_id, [
            'title' => $this->input->post('title'),
            'category_downloads_id' => $this->input->post('category_download_id'),
            'file' => $file,
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_download) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข  รายการดาวน์โหลด',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/download/download/show/' . $this->input->post('category_download_id'));
    }

    public function destroy($download_id)
    {
        $status = 500;
        $response['success'] = 0;

        $download = $this->Download_model->delete_download_by_id($download_id);

        if ($download != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ  รายการดาวน์โหลด',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function do_upload_file_download($filename)
    {
        $config['upload_path'] = './storage/uploads/images/products';
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx|rtf|txt|rar|zip';
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
