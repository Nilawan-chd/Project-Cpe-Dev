<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category_product extends MX_Controller
{

    private $data = false;

    public function __construct()
    {
        parent::__construct();

        // Middleware
        require_login('backoffice/login');

        // Set Model
        $this->load->model('User_model');
        $this->load->model('Group_product_model');
        $this->load->model('Category_product_model');

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Product Category';
        $this->data['content'] = 'category_product/category_product';
        $this->data['group_products'] = $this->Group_product_model->get_group_product_all();
        $this->data['category_products'] = $this->Category_product_model->get_category_product_all();

        $this->load->view('app', $this->data);
    }

    public function create($group_product_id)
    {
        $group_product = $this->Group_product_model->get_group_product_by_id($group_product_id);

        $this->data['content'] = 'category_product/add_category_product';
        $this->data['group_products'] = $group_product;
        $this->data['group_product_id'] = $group_product->id;
        $this->data['group_product_title'] = $group_product->title;

        $this->load->view('app', $this->data);
    }

    public function store()
    {
        $img_cover = '';
        $img_cover_home = '';

        if (isset($_FILES['img_cover']) && $_FILES['img_cover']['name'] != '') {
            $img_cover = $this->do_upload_img_product('img_cover');
        }

        if (isset($_FILES['img_cover_home']) && $_FILES['img_cover_home']['name'] != '') {
            $img_cover_home = $this->do_upload_img_product('img_cover_home');
        }

        $data = [
            'meta_tag_title' => $this->input->post('meta_tag_title'),
            'meta_tag_description' => $this->input->post('meta_tag_description'),
            'meta_tag_keywords' => $this->input->post('meta_tag_keywords'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'group_product_id' => $this->input->post('group_product_id'),
            'img_cover' => $img_cover,
            'img_title_alt' => $this->input->post('img_title_alt'),
            'img_cover_home' => $img_cover_home,
            'img_home_title_alt' => $this->input->post('img_home_title_alt')
        ];

        $add_category_product = $this->Category_product_model->insert_category_product($data);

        if ($add_category_product) {
            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/product/category/show/' . $this->input->post('group_product_id'));
    }

    public function show($group_product_id)
    {
        $group_product = $this->Group_product_model->get_group_product_by_id($group_product_id);

        $this->data['title'] = 'Product Category';
        $this->data['content'] = 'category_product/category_product';
        $this->data['group_products'] = $this->Group_product_model->get_group_product_all();
        $this->data['category_products'] = $this->Category_product_model->get_category_product_by_group_product_id($group_product_id);
        $this->data['group_product_id'] = $group_product->id;
        $this->data['group_product_title'] = $group_product->title;

        $this->load->view('app', $this->data);
    }

    public function edit($category_product_id)
    {
        $this->data['content'] = 'category_product/edit_category_product';
        /* $category_product*/
        $category_product = $this->Category_product_model->get_category_product_by_id($category_product_id);
        $this->data['category_product_id'] = $category_product->id;
        $this->data['category_product_title'] = $category_product->title;
        $this->data['category_product_description'] = $category_product->description;
        $this->data['category_product_img_cover'] = $category_product->img_cover;
        $this->data['category_product_img_title_alt'] = $category_product->img_title_alt;
        $this->data['category_product_img_cover_home'] = $category_product->img_cover_home;
        $this->data['category_product_img_home_title_alt'] = $category_product->img_home_title_alt;
        $group_product_id = $category_product->group_product_id;
        /* group_products*/
        $group_product = $this->Group_product_model->get_group_product_by_id($group_product_id);
        $this->data['group_products'] = $group_product;
        $this->data['group_product_id'] = $group_product->id;
        $this->data['group_product_title'] = $group_product->title;


        $this->load->view('app', $this->data);
    }

    public function update($id)
    {
        $status = 500;
        $response['success'] = 0;
        $category_product = false;

        $category_product = $this->Category_product_model->update_category_product_by_id($id, [
            'title' => $this->input->post('title'),
            'group_product_id' => $this->input->post('group_product_id'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        // Set Response
        if ($category_product != false) {
            $status = 200;
            $response['success'] = 1;
        }

        // Send Response
        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function destroy($id)
    {
        $status = 500;
        $response['success'] = 0;

        $category_product = $this->Category_product_model->delete_category_product_by_id($id);

        // Set Response
        if ($category_product != false) {
            $status = 200;
            $response['success'] = 1;
        }

        // Send Response
        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function do_upload_img_product($filename)
    {
        $config['upload_path'] = './storage/uploads/images/products';
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