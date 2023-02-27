<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Category_model','ct_md');

    }

    public function index()
    {
        $data['title'] = 'Category List';

        $category = new Category_model();

        $data['lists'] = $category->select_all();

//        $cats = new Category_model();
//        $data['cats'] = $cats->select_all();

        $this->load->admin('category/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            $insert_id = $this->ct_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/category');
            }

        }

        $data['title'] = 'Category List';
        $category = new Category_model();

        $data['lists'] = $category->select_all();

//        $cats = new Category_model();
//        $data['cats'] = $cats->select_all();


        $this->load->admin('category/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'parent_id' => $this->security->xss_clean($this->input->post('parent_id')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s")
            ];

            $affected_rows = $this->ct_md->update($id,$request_data);
            redirect('backend/category');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/category/edit/'.$id);
            }

        }

        $item = $this->ct_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/category');
        }

        $data['item'] = $item;

        $data['title'] = 'Category Edit';

        $category = new Category_model();

        $data['lists'] = $category->select_all();

//        $cats = new Category_model();
//        $data['cats'] = $cats->select_all();

        $this->load->admin('category/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->ct_md->delete($id);
        redirect('backend/category');
    }

}



