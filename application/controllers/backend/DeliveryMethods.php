<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeliveryMethods extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Delivery_methods_model','dm_md');

    }

    public function index()
    {
        $data['title'] = 'Delivery Methods List';

        $delivery_methods = new Delivery_methods_model();

        $data['lists'] = $delivery_methods->select_all();

        $this->load->admin('delivery_methods/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            $insert_id = $this->dm_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/delivery_methods');
            }

        }

        $data['title'] = 'Delivery Methods List';

        $this->load->admin('delivery_methods/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'order' => $this->security->xss_clean($this->input->post('order')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s")
            ];

            $affected_rows = $this->dm_md->update($id,$request_data);
            redirect('backend/delivery_methods');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/delivery_methods/edit/'.$id);
            }

        }

        $item = $this->dm_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/delivery_methods');
        }

        $data['item'] = $item;

        $data['title'] = 'Delivery Methods Edit';

        $this->load->admin('delivery_methods/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->dm_md->delete($id);
        redirect('backend/delivery_methods');
    }

}


