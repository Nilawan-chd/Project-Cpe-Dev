<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends MX_Controller
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
        $this->load->model('Banner_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'หน้าแรก: แบนเนอร์';
        $this->data['content'] = 'banner/banner';
        $this->data['banners'] = $this->Banner_model->get_banner_all();

        $this->load->view('app', $this->data);
    }

    public function banner_create()
    {
        $this->data['title'] = 'หน้าแรก: แบนเนอร์ - เพิ่ม';
        $this->data['content'] = 'banner/add_banner';

        $this->load->view('app', $this->data);
    }

    public function banner_store()
    {
        $img_cover = '';

        if (isset($_FILES['img_cover']) && $_FILES['img_cover']['name'] != '') {
            $img_cover = $this->do_upload_img_banner('img_cover');
        }

        $add_banner = $this->Banner_model->insert_banner([
            'title' => $img_cover,
            'img_title_alt' => $this->input->post('img_title_alt'),
            'img_url' => $this->input->post('img_url')
        ]);

        if ($add_banner) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม แบนเนอร์',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/banner');
    }

    public function banner_edit($banner_id)
    {
		$this->data['title'] = 'หน้าแรก: แบนเนอร์ - แก้ไข';
        $this->data['content'] = 'banner/edit_banner';
        $this->data['banners'] = $this->Banner_model->get_banner_by_id($banner_id);

        $this->load->view('app', $this->data);
    }

    public function banner_update($banner_id)
    {
        $banner = $this->Banner_model->get_banner_by_id($banner_id);

        $img_cover = $banner->title;

        if (isset($_FILES['img_cover']) && $_FILES['img_cover']['name'] != '') {
            $img_cover = $this->do_upload_img_banner('img_cover');
        }

        $update_banner = $this->Banner_model->update_banner_by_id($banner_id, [
            'title' => $img_cover,
            'img_title_alt' => $this->input->post('img_title_alt'),
            'img_url' => $this->input->post('img_url'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        if ($update_banner) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข แบนเนอร์',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Add Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/home/banner');
    }

    public function banner_destroy($banner_id)
    {
        $status = 500;
        $response['success'] = 0;

        $product = $this->Banner_model->delete_banner_by_id($banner_id);

        if ($product != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ แบนเนอร์',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }





	/***********************************
	 * Sorting (Using Ajax)
	 * ********************************/

    public function ajax_get_banner_and_sort_show()
    {
        $status = 500;
        $response['success'] = 0;

        $banners = $this->Banner_model->get_banner_all();

        // Set Response
        if ($banners != false) {
            $status = 200;
            $response['success'] = 1;

            $counter = 1;
            $html = '<ul id="sortable">';
            foreach ($banners as $banner) {
                $html .= '<li id="' . $banner->id . '" data-sort="' . $banner->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img width="120px;" src="' . base_url('storage/uploads/images/banner/' . $banner->title) . '"</li>';
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

    public function ajax_get_banner_and_sort_update()
    {
        $status = 500;
        $response['success'] = 0;

        // Set Response
        if ($this->input->post()) {
            $bundle_id = $this->input->post('id');
            $bundle_sort = $this->input->post('sort');
            $counter = 1;
            foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {
                $this->Banner_model->update_banner_by_id($id, [
                    'sort' => $counter
                ]);
                $counter++;
            }

            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'จัดเรียง แบนเนอร์',
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

    private function do_upload_img_banner($filename)
	{
		$config['upload_path'] = './storage/uploads/images/banner';
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
