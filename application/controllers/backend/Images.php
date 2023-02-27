<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Images_model','img_md');
        $this->load->model('Products_model','pr_md');

    }

    public function index()
    {
        $data['title'] = 'Images List';

        $images = new Images_model();

        $data['lists'] = $images->select_all();

        $products = new Products_model();

        $data['products'] = $products->select_all();

        $this->load->admin('images/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $new_name = time().''.rand(1,10000);
            $config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => $new_name
            ];
            $this->load->library('upload',$config);

            if ( ! $this->upload->do_upload('path'))
            {
                $error = array('error' => $this->upload->display_errors());
//                $this->load->view('upload_form', $error);
            }
            else
            {
                $image_file = $this->upload->data('file_name');
//                print_r($image_file);
                $request_data = [
                    'path' => $image_file,
                    'main' => $this->security->xss_clean($this->input->post('main')),
                    'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ];
                $insert_id = $this->img_md->insert($request_data);
                redirect('backend/images');
                if($insert_id > 0){
                    $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');
                }
            }
        }

        $products = new Products_model();

        $data['products'] = $products->select_all();

        $data['title'] = 'Images List';

        $this->load->admin('images/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'path' => $image_file,
                'main' => $this->security->xss_clean($this->input->post('main')),
                'product_id' => $this->security->xss_clean($this->input->post('product_id')),
                'updated_at' => date("Y-m-d H:i:s"),
            ];

            $affected_rows = $this->img_md->update($id,$request_data);
            redirect('backend/images');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/images/edit/'.$id);
            }

        }

        $item = $this->img_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/images');
        }

        $data['item'] = $item;

        $data['title'] = 'Images Edit';

        $products = new Products_model();

        $data['products'] = $products->select_all();

        $this->load->admin('images/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $images = new Images_model();
        if($images->selectDataById($id)){
            $data  = $images->selectDataById($id);
            if(file_exists('./uploads/'.$data->path)){
                unlink('./uploads/'.$data->path);
            }
            $this->img_md->delete($id);
            redirect('backend/images');
        }

    }

}

