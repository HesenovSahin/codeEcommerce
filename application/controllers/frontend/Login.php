<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Category_model', 'cat_md');
        $this->load->model('Users_model', 'user_md');
    }


    public function index(){
        $data['title'] = 'Login';

        $categories = new Category_model();

        $data['lists'] = $categories->join();

        $data['categories'] = category_tree($data['lists']);

        if ($this->input->post()) {

            $this->load->library('form_validation');
            $users = new Users_model();

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Şifrə', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->frontend('frontend/login');
            }

            $request_data = [
                'email' => $this->security->xss_clean($this->input->post('email')),
                'password' => md5($this->input->post('password'))
            ];

            $data['users'] = $users->loggedin($request_data['email'], $request_data['password']);

            if ($data['users']) {
                $this->session->set_flashdata('success_message', 'Success');
                $this->session->set_userdata('user', $data['users']);
                $this->session->set_userdata('userloggedin', 1);
                redirect('frontend');
            } else {
                $this->session->set_flashdata('error_message', 'Error');
//                redirect('frontend/login');
            }
        }
        $this->load->frontend('login', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('userloggedin');
//        print_r($_SESSION);
//        exit();

        redirect('frontend/login');
    }

}





