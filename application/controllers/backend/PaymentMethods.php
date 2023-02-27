<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentMethods extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Payment_methods_model','pm_md');

    }

    public function index()
    {
        $data['title'] = 'Payment Methods List';

        $payment_methods = new Payment_methods_model();

        $data['lists'] = $payment_methods->select_all();

        $this->load->admin('payment_methods/index',$data);
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
            $insert_id = $this->pm_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/payment_methods');
            }

        }

        $data['title'] = 'Payment Methods List';

        $this->load->admin('payment_methods/create',$data);

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
            redirect('backend/payment_methods');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/payment_methods/edit/'.$id);
            }

        }

        $item = $this->pm_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/payment_methods');
        }

        $data['item'] = $item;

        $data['title'] = 'Payment Methods Edit';

        $this->load->admin('payment_methods/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->pm_md->delete($id);
        redirect('backend/payment_methods');
    }

}



