<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderStatus extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Order_status_model','ods_md');

    }

    public function index()
    {
        $data['title'] = 'Order Status List';

        $order_status = new Order_status_model();

        $data['lists'] = $order_status->select_all();

        $this->load->admin('order_status/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            $insert_id = $this->ods_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/order_status');
            }

        }

        $data['title'] = 'Order Status List';

        $this->load->admin('order_status/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s")
            ];

            $affected_rows = $this->ods_md->update($id,$request_data);
            redirect('backend/order_status');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/order_status/edit/'.$id);
            }

        }

        $item = $this->ods_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/order_status');
        }

        $data['item'] = $item;

        $data['title'] = 'Order Status Edit';

        $this->load->admin('order_status/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->ods_md->delete($id);
        redirect('backend/order_status');
    }

}



