<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Blog_model','bg_md');
        $this->load->model('Categories_model','cat_md');

    }

    public function index()
    {
        $data['title'] = 'Blog List';

        $blog = new Blog_model();

        $categories = new Categories_model();

        $data['categories'] = $categories->select_all();

        $data['lists'] = $blog->select_all();

        $this->load->admin('blog/index',$data);
    }

    public function create(){

        if($this->input->post()) {

            $new_name = time() . '' . rand(1, 10000);
            $config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => $new_name
            ];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
//                $this->load->view('upload_form', $error);
            } else {
                $image_file = $this->upload->data('file_name');

                $request_data = [
                    'title' => $this->security->xss_clean($this->input->post('title')),
                    'description' => $this->security->xss_clean($this->input->post('description')),
                    'content' => $this->security->xss_clean($this->input->post('content')),
                    'image' => $image_file,
//                'video' => $this->security->xss_clean($this->input->file('video')),
                    'cat_id' => $this->security->xss_clean($this->input->post('cat_id')),
                    'is_monset' => $this->security->xss_clean($this->input->post('is_monset')),
                    'status' => $this->security->xss_clean($this->input->post('status')),
                    'created_at' => date("Y-m-d H:i:s")
                ];
//                print_r($request_data);
                $insert_id = $this->bg_md->insert($request_data);

                if ($insert_id > 0) {
                    $this->session->set_flashdata('success_message', 'Məlumat uğurla əlavə edildi');

                    redirect('backend/blog');
                }

            }
        }

        $categories = new Categories_model();

        $data['categories'] = $categories->select_all();

        $data['title'] = 'Blog List';

        $this->load->admin('blog/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $new_name = time() . '' . rand(1, 10000);
            $config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => $new_name
            ];

            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $image_file = $this->upload->data('file_name');


            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'content' => $this->security->xss_clean($this->input->post('content')),
                'image' => $image_file,
//                'video' => $this->security->xss_clean($this->input->file('video')),
                'cat_id' => $this->security->xss_clean($this->input->post('cat_id')),
                'is_monset' => $this->security->xss_clean($this->input->post('is_monset')),
                'status' => $this->security->xss_clean($this->input->post('status')),
            ];

            $affected_rows = $this->bg_md->update($id,$request_data);
            redirect('backend/blog');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/blog/edit/'.$id);
            }

        }

        $item = $this->bg_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/blog');
        }

        $categories = new Categories_model();

        $data['categories'] = $categories->select_all();

        $data['item'] = $item;

        $data['title'] = 'Blog Edit';

        $this->load->admin('blog/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->bg_md->delete($id);
        redirect('backend/blog');
    }

}


