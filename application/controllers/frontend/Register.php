<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Category_model', 'cat_md');
        $this->load->model('Users_model','user_md');
    }


    public function index(){
        $data['title'] = 'Register';

        $categories = new Category_model();

        $data['lists'] = $categories->join();

        $data['categories'] = category_tree($data['lists']);

        $this->load->frontend('register', $data);
        if($this->input->post()){

            $request_data = [
                'name' => $this->security->xss_clean($this->input->post('name')),
                'surname' => $this->security->xss_clean($this->input->post('surname')),
                'email' => $this->security->xss_clean($this->input->post('email')),
                'phone' => $this->security->xss_clean($this->input->post('phone')),
                'password' => md5($this->input->post('password')),
                // 'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ];


            $insert_id = $this->user_md->insert($request_data);

            if($insert_id > 0){

                $request_data2 = [
                    'user_id' => $insert_id,
                    'country' => $this->security->xss_clean($this->input->post('country')),
                    'city' => $this->security->xss_clean($this->input->post('city')),
                    'address' => $this->security->xss_clean($this->input->post('address'))
                ];

                $insert_id_user_address = $this->user_md->insert_address($request_data2);

                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('frontend/login');
            }

        }

        $data['title'] = 'Users List';

        $categories = new Category_model();

        $data['lists'] = $categories->join();

        $data['categories'] = category_tree($data['lists']);

        $this->load->frontend('register',$data);
    }



}