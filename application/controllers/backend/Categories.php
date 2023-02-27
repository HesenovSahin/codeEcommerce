<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Categories_model','cat_md');

    }

    public function index()
    {
        $data['title'] = 'Categories List';

        $categories = new Categories_model();

        $data['lists'] = $categories->select_all();

        $this->load->admin('categories/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'is_menu' => $this->security->xss_clean($this->input->post('is_menu')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];
            $insert_id = $this->cat_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/categories');
            }

        }

        $data['title'] = 'Categories List';

        $this->load->admin('categories/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'is_menu' => $this->security->xss_clean($this->input->post('is_menu')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->cat_md->update($id,$request_data);
            redirect('backend/categories');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/categories/edit/'.$id);
            }

        }

        $item = $this->cat_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/categories');
        }

        $data['item'] = $item;

        $data['title'] = 'Categories Edit';

        $this->load->admin('categories/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->cat_md->delete($id);
        redirect('backend/categories');
    }

}


