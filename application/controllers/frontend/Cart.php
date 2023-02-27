<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->model('Category_model', 'cat_md');
            $this->load->model('Products_model', 'product_md');
            $this->load->model('Images_model', 'img_md');
    }


    public function index(){
        $data['title'] = 'Cart';

        $categories = new Category_model();
        $data['lists'] = $categories->join();
        $data['categories'] = category_tree($data['lists']);

        $user_id = $this->session->userdata('user')->id;
        $data['carts'] = $this->product_md->join_user_product();
        $data['total'] = $this->product_md->getTotalAmount($user_id);

        $this->load->frontend('cart', $data);


    }


    public function add_to_cart(){

        if($this->input->is_ajax_request()){
            $id = $this->security->xss_clean($this->input->post('id'));
            $quantity = $this->security->xss_clean($this->input->post('quantity'));
            $products = $this->product_md->selectDataById($id);
            if(!empty($products)){
                if(!empty(get_cookie('cart_products'))){
                    $cart_products = explode(',',get_cookie('cart_products'));
                    array_push($cart_products,$id,$quantity);
                    $cart_product = implode(',',$cart_products);
                    set_cookie('cart_products',$cart_product,86400);
                }else{
                    $cart_products[] = $id;
                    array_push($cart_products,$quantity);
                    $cart_product = implode(',',$cart_products);
                    set_cookie('cart_products',$cart_product,86400);
                }

                echo json_encode(['process' => true]);
            }

            if ($this->session->has_userdata('userloggedin')) {
                $user_id = $this->session->userdata('user')->id;

                $requset_data = [
                'user_id'    => $user_id,
                'product_id' => $id,
                'quantity'   => $quantity,
                'price'      => $products->price,
                'amount'     => $quantity*$products->price,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
                $insert_id = $this->product_md->insert_user_products($requset_data);
            }
        }
    }

    public function update_cart(){
        if($this->input->is_ajax_request()){
            $id = $this->security->xss_clean($this->input->post('id'));
            $quantity = $this->security->xss_clean($this->input->post('quantity'));
   
            if(!empty(get_cookie('cart_products'))){
                $cart_products = explode(',',get_cookie('cart_products'));
                $index = array_search($id,$cart_products);
                if($index !== false){
                    print_r(get_cookie('cart_products'));
                    $cart_products[$index + 1]=$quantity;
                    $cart_product = implode(',',$cart_products);
                    set_cookie('cart_products',$cart_product,86400);
                    echo json_encode(['process' => true]);
               
            } else {
                echo json_encode(['process' => false, 'error' => 'Cart is empty']);
            }
        }
    }

    // public function delete_cart(){

    //     if($this->input->is_ajax_request()){
    //         $id = $this->security->xss_clean($this->input->post('id'));
    //         if(!empty(get_cookie('cart_products'))){
    //             $cart_products = explode(',',get_cookie('cart_products'));
    //             $index = array_search($id,$cart_products);
    //             if($index !== false){
    //                 unset($cart_products[$index],$cart_products[$index + 1]);
    //                 $cart_product = implode(',',$cart_products);
    //                 set_cookie('cart_products',$cart_product,86400);
    //                 echo json_encode(['process' => true]);
    //             }
    //         }
    //     }
    // }
    

}
}