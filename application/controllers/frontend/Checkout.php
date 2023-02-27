<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Category_model', 'cat_md');
        $this->load->model('Delivery_methods_model', 'del_md');
        $this->load->model('Payment_methods_model', 'pay_md');
        $this->load->model('Products_model', 'product_md');
        $this->load->model('Images_model', 'img_md');
        $this->load->model('Orders_model', 'ord_md');
    }


    public function index(){
        $data['title'] = 'Checkout';

        $categories = new Category_model();
        $data['lists'] = $categories->join();
        $data['categories'] = category_tree($data['lists']);

        $del_methods = new Delivery_methods_model();
        $data['del_methods'] = $del_methods->select_all();

        $pay_methods = new Payment_methods_model();
        $data['pay_methods'] = $pay_methods->select_all();

        $user_id = $this->session->userdata('user')->id;

        $data['carts'] = $this->product_md->join_user_product();
        $data['total'] = $this->product_md->getTotalAmount($user_id);

        $this->load->frontend('checkout', $data);

    }

    public function insert(){
        if($this->input->post()){
            $delivery_method = $this->security->xss_clean($this->input->post('delivery_methods'));
            $payment_method = $this->security->xss_clean($this->input->post('payment_methods'));
            if ($this->session->has_userdata('userloggedin')) {
                $user_id = $this->session->userdata('user')->id;
                $amount = $this->product_md->getTotalAmount($user_id);

                $requset_data = [
                    'user_id'    => $user_id,
                    'payment_method' => $payment_method,
                    'delivery_method'   => $delivery_method,
                    'total_amount'      => $amount->amount,
                    'payment_json'     => '',
                    'status_id'     => 'waiting',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ];

                $data1 = [
                    'user_id'    => $user_id,
                    'amount' => $amount->amount,
                ];

//                $data = [
//                    'user_id'    => $user_id,
//                    'product_id' => $id,
//                    'quantity'   => $quantity,
//                    'price'      => $products->price,
//                    'amount'     => $quantity*$products->price,
//                    'created_at' => date("Y-m-d H:i:s"),
//                    'updated_at' => date("Y-m-d H:i:s")
//                ];

                $insert_order_id = $this->load->library('Payriff');

                $payriff =  $this->payriff->create_order($data1);
                redirect($payriff['payment_url']);

            }
        }



    }

}