<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Brands_model','bd_md');

    }

    public function index()
    {
        $data['title'] = 'Brands List';

        $pages = new Brands_model();

        $data['lists'] = $pages->select_all();

        $this->load->admin('brands/index',$data);
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

            if ( ! $this->upload->do_upload('logo'))
            {
                $error = array('error' => $this->upload->display_errors());
//                $this->load->view('upload_form', $error);
            }
            else
            {
                $image_file = $this->upload->data('file_name');
//                print_r($brand_file);
                $request_data = [
                    'title' => $this->security->xss_clean($this->input->post('title')),
                    'status' => $this->security->xss_clean($this->input->post('status')),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                    'logo' => $image_file
                ];
                $insert_id = $this->bd_md->insert($request_data);
                redirect('backend/brands');
                if($insert_id > 0){
                    $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');
            }
            }
        }



        $data['title'] = 'Brands List';

        $this->load->admin('brands/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s"),
            ];

            $affected_rows = $this->bd_md->update($id,$request_data);
            redirect('backend/brands');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/brands/edit/'.$id);
            }

        }

        $item = $this->bd_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/brands');
        }

        $data['item'] = $item;

        $data['title'] = 'Brands Edit';

        $this->load->admin('brands/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $brands = new Brands_model();
        if($brands->selectDataById($id)){
            $data  = $brands->selectDataById($id);
            if(file_exists('./uploads/'.$data->logo)){
                unlink('./uploads/'.$data->logo);
            }
            $this->bd_md->delete($id);
            redirect('backend/brands');
        }

    }

}

