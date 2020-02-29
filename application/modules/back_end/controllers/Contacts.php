<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MX_Controller
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
        $this->load->model('Contact_model');

        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index() {}



    public function edit($contact_id)
    {
        $this->data['title'] = 'Manage Item: contact page';
        $this->data['content'] = 'contact/edit_contact';
        $this->data['contacts'] = $this->Contact_model->get_contact_by_id($contact_id);

        $this->load->view('app', $this->data);
    }

    public function update($contact_id)
    {
        $update_contact_page = $this->Contact_model->update_contact_by_id($contact_id, [
            'title' => $this->input->post('title'),
            'department' => $this->input->post('department'),
            'university' => $this->input->post('university'),
            'address' => $this->input->post('address'),
            'web' => $this->input->post('web'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'facebook' => $this->input->post('facebook'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if ($update_contact_page) {

            logger_store([
                'user_id' => $this->data['user']->id,
                'detail' => 'แก้ไข Info Contact Page',
                'event' => 'update',
                'ip' => $this->input->ip_address(),
            ]);

            $this->session->set_flashdata('success', 'Update Done');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('backoffice/page/contact/info/edit/'.$contact_id);
    }

}
