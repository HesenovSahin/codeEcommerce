<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
       $this->load->model('Category_model', 'cat_md');
        $this->load->model('Images_model', 'img_md');
        $this->load->model('Products_model', 'pr_md');
    }


    public function index(){

        $data['title'] = 'Home page';

        $products = new Products_model();
        $data['lists'] = $products->select_all();

        $images = new Images_model();
//        $data['images'] = $images->select_all();
        $data['images'] = $images->select_main();



        $categories = new Category_model();
        $data['categories'] = category_tree($categories->join());

        $includes = ['includes/main', 'includes/hotdeals', 'includes/electronics', 'includes/updates'];

        $this->load->main($includes, $data);
    }


}
