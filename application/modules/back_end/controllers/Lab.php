<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends MX_Controller
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
        $this->load->model('Lab_model');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Page: Labs';
        $this->data['content'] = 'labs_page/labs';
        $this->data['labs'] = $this->Lab_model->get_labs_all();
        $this->load->view('app', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'Page: Labs - Add';
        $this->data['content'] = 'labs_page/add_labs';

        $this->load->view('app', $this->data);
    }

    public function store()
    {
        $add_labs = $this->Lab_model->insert_labs([
        	'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail')
		]);

        if ($add_labs) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'เพิ่ม Group Product',
                'event' => 'add',
                'ip' => $this->input->ip_address(),
            ]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

        redirect('backoffice/page/lab/lab');
    }

    public function show() {}

    public function edit($id)
    {
        $this->data['title'] = 'Page: Labs - Edit';
        $this->data['content'] = 'labs_page/edit_labs';
        $this->data['labs'] = $this->Lab_model->get_labs_by_id($id);

        $this->load->view('app', $this->data);
    }

    public function update($id)
    {
        $update_labs = $this->Lab_model->update_labs_by_id($id, [
            'title' => $this->input->post('title'),
            'detail' => $this->input->post('detail'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

        if ($update_labs) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข Group Product',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

			$this->session->set_flashdata('success', 'Edit Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

        redirect('backoffice/page/lab/lab');
    }

    public function destroy($id)
    {
        $status = 500;
        $response['success'] = 0;

        $labs = $this->Lab_model->delete_labs_by_id($id);

        // Set Response
        if ($labs != false) {
            $status = 200;
            $response['success'] = 1;

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'ลบ Group Product',
                'event' => 'delete',
                'ip' => $this->input->ip_address(),
            ]);
        }

        // Send Response
        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
