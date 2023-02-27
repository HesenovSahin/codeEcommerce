<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Orders_model','od_md'); // od_md
//        $this->load->model('Users_model','us_md'); //us_md
//        $this->load->model('Payment_methods_model','pm_md'); //pm_md
//        $this->load->model('Delivery_methods_model','dm_md'); //dm_md
        $this->load->model('Order_status_model','ods_md'); //dm_md


    }

    public function index()
    {
        $data['title'] = 'Orders List';

        $orders = new Orders_model();

        $data['lists'] = $orders->select_all();
//
//        $users = new Users_model();
//
//        $data['users'] = $users->select_all();
//
//        $payment_methods = new Payment_methods_model();
//
//        $data['payment_methods'] = $payment_methods->select_all();
//
//        $delivery_methods = new Delivery_methods_model();
//
//        $data['delivery_methods'] = $delivery_methods->select_all();

        $order_status = new Order_status_model();

        $data['orders_status'] = $order_status->select_all();

        $this->load->admin('orders/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
//                'user_id' => $this->security->xss_clean($this->input->post('user_id')),
//                'payment_method' => $this->security->xss_clean($this->input->post('payment_method')),
//                'delivery_method' => $this->security->xss_clean($this->input->post('delivery_method')),
//                'total_amount' => $this->security->xss_clean($this->input->post('total_amount')),
//                'payment_json' => $this->security->xss_clean($this->input->post('payment_json')),
                'status_id' => $this->security->xss_clean($this->input->post('status_id')),
                'created_at' => date("Y-m-d H:i:s")
            ];
            $insert_id = $this->od_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/orders');
            }

        }

        $data['title'] = 'Orders List';

//        $users = new Users_model();
//
//        $data['users'] = $users->select_all();
//
//        $payment_methods = new Payment_methods_model();
//
//        $data['payment_methods'] = $payment_methods->select_all();
//
//        $delivery_methods = new Delivery_methods_model();
//
//        $data['delivery_methods'] = $delivery_methods->select_all();

        $orders_status = new Order_status_model();

        $data['orders_status'] = $orders_status->select_all();

        $this->load->admin('orders/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
//                'user_id' => $this->security->xss_clean($this->input->post('user_id')),
//                'payment_method' => $this->security->xss_clean($this->input->post('payment_method')),
//                'delivery_method' => $this->security->xss_clean($this->input->post('delivery_method')),
//                'total_amount' => $this->security->xss_clean($this->input->post('total_amount')),
//                'payment_json' => $this->security->xss_clean($this->input->post('payment_json')),
                'status_id' => $this->security->xss_clean($this->input->post('status_id')),
                'updated_at' => date("Y-m-d H:i:s")
            ];

            $affected_rows = $this->od_md->update($id,$request_data);
            redirect('backend/orders');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/orders/edit/'.$id);
            }

        }

        $item = $this->od_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/orders');
        }

        $data['item'] = $item;

        $data['title'] = 'Orders Edit';

//        $brand = $this->us_md->selectDataById($id);
//        $data['brand'] = $brand;

//        $users = new Users_model();
//
//        $data['users'] = $users->select_all();
//
//        $payment_methods = new Payment_methods_model();
//
//        $data['payment_methods'] = $payment_methods->select_all();
//
//        $delivery_methods = new Delivery_methods_model();
//
//        $data['delivery_methods'] = $delivery_methods->select_all();

        $orders_status = new Order_status_model();

        $data['orders_status'] = $orders_status->select_all();

        $this->load->admin('orders/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->od_md->delete($id);
        redirect('backend/orders');
    }

}


