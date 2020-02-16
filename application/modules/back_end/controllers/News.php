<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller
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
        $this->load->model('News_model');
        $this->load->model('Category_news_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function show($category_id)
    {
        $category_news = $this->Category_news_model->get_category_news_by_id($category_id);
        $this->data['title'] = 'Page: News - list';
        $this->data['content'] = 'news/news';
        $this->data['news'] = $this->News_model->get_news_by_category_news_id($category_id);
        $this->data['category_news'] = $this->Category_news_model->get_category_news_all();
        $this->data['category_news_id'] = $category_news->id;
        $this->data['category_news_title'] = $category_news->title;
        $this->load->view('app', $this->data);
    }

    public function create($category_id)
    {
        $this->data['title'] = 'Page: News - Add';
        $this->data['content'] = 'news/add_news';
        $this->data['category_new'] =$this->Category_news_model->get_category_news_by_id($category_id);

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
        $this->load->view('app', $this->data);
    }

    public function store()
    {

        $add_news = $this->News_model->insert_news([
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'detail' => $this->input->post('detail'),
            'category_news_id' => $this->input->post('category_news_id'),
            'user_id' => $this->data['user']->id
        ]);

        if ($add_news) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม ข่าว',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/news/list/show/' .$this->input->post('category_news_id'));
    }

    public function edit($news_id)
    {
        $this->data['title'] = 'Page: Home - Galleries - Edit';
        $this->data['content'] = 'news/edit_news';
        $this->data['news'] = $this->News_model->get_news_by_id($news_id);
        $category_id= $news->category_news_id;
        $this->data['category_new'] =$this->Category_news_model->get_category_news_by_id($category_id);
        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
        $this->load->view('app', $this->data);
    }

    public function update($news_id)
    {

        $update_news = $this->News_model->update_news_by_id($news_id, [
            'title' => $this->input->post('title'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_news) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข Image News',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/news/list');
    }

    public function destroy($news_id)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->News_model->delete_news_by_id($news_id);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ Image News',
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
