<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_news extends MX_Controller
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
        $this->load->model('Category_news_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'หน้า: ประเภทข่าวสาร';
        $this->data['content'] = 'category_news/category_news';
        $this->data['category_news'] = $this->Category_news_model->get_category_news_and_count_all();

        $this->load->view('app', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'หน้า: ประเภทข่าวสาร - เพิ่ม';
        $this->data['content'] = 'category_news/add_category_news';

        $this->load->view('app', $this->data);
    }

    public function store()
    {

        $add_category_news = $this->Category_news_model->insert_category_news([
            'title' => $this->input->post('title')
        ]);

        if ($add_category_news) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม ประเภทข่าวสาร',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/news');
    }

    public function edit($category_newsid)
    {
        $this->data['title'] = 'หน้า: ประเภทข่าวสาร - แก้ไข';
        $this->data['content'] = 'category_news/edit_category_news';
        $this->data['category_news'] = $this->Category_news_model->get_category_news_by_id($category_newsid);

        $this->load->view('app', $this->data);
    }

    public function update($category_newsid)
    {

        $update_category_news = $this->Category_news_model->update_category_news_by_id($category_newsid, [
            'title' => $this->input->post('title'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_category_news) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข ประเภทข่าวสาร',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/news');
    }

    public function destroy($category_newsid)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Category_news_model->delete_category_news_by_id($category_newsid);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ ประเภทข่าวสาร',
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
