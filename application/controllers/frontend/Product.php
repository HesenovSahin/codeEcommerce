<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Category_model', 'cat_md');
        $this->load->model('Images_model', 'img_md');
        $this->load->model('Products_model', 'pr_md');
        $this->load->model('Brands_model', 'br_md');
    }


    public function index($id){

        $id = $this->security->xss_clean($id);
        $data['title'] = 'Product';
        $products = new Products_model();
        $data['lists'] = $products->join();
        $data['product'] = $products->selectDataById($id);

        $images = new Images_model();
        $data['images'] = $images->select_all();
        $data['item'] = $images->getId($id);


        $brands = new Brands_model();
        $data['brands'] = $brands->select_all();

        $categories = new Category_model();
        $data['categories'] = category_tree($categories->join());


        $this->load->frontend('product', $data);
    }

}





