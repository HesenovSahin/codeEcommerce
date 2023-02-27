<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Products_model','pr_md');
        $this->load->model('Brands_model','bd_md');
        $this->load->model('Category_model','cat_md');


    }

    public function index()
    {
        $data['title'] = 'Products List';

        $products = new Products_model();

        $data['lists'] = $products->select_all();

        $brands = new Brands_model();

        $data['brands'] = $brands->select_all();

        $category = new Category_model();

        $data['category'] = $category->select_all();

        $this->load->admin('products/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'created_at' => date("Y-m-d H:i:s"),
            ];
            $insert_id = $this->pr_md->insert($request_data);



//            $datas['product_id'] = $this->pr_md->getLastElementById();

            if($insert_id > 0){
                $datas = [
                    'product_id' => $insert_id,
                    'categories_id' => $this->security->xss_clean($this->input->post('categories_id')),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                    ];

                $insert_id_pivot = $this->pr_md->insert_pivot($datas);

                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/products');
            }

        }

        $data['title'] = 'Products List';

        $brands = new Brands_model();

        $data['brands'] = $brands->select_all();

        $category = new Category_model();

        $data['category'] = $category->select_all();


        $this->load->admin('products/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'title' => $this->security->xss_clean($this->input->post('title')),
                'description' => $this->security->xss_clean($this->input->post('description')),
                'quantity' => $this->security->xss_clean($this->input->post('quantity')),
                'price' => $this->security->xss_clean($this->input->post('price')),
                'brand_id' => $this->security->xss_clean($this->input->post('brand_id')),
                'status' => $this->security->xss_clean($this->input->post('status')),
                'updated_at' => date("Y-m-d H:i:s")
            ];

            $affected_rows = $this->pr_md->update($id,$request_data);
            redirect('backend/products');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/products/edit/'.$id);
            }

        }

        $item = $this->pr_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/products');
        }

        $data['item'] = $item;

        $data['title'] = 'Products Edit';

//        $brand = $this->bd_md->selectDataById($id);
//        $data['brand'] = $brand;

        $brands = new Brands_model();

        $data['brands'] = $brands->select_all();

        $category = new Category_model();

        $data['category'] = $category->select_all();

        $this->load->admin('products/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->pr_md->delete($id);
        redirect('backend/products');
    }

}


