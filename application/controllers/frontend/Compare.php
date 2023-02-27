<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Compare extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Category_model', 'cat_md');
    }


    public function index(){
        $data['title'] = 'Compare';

        $categories = new Category_model();

        $data['lists'] = $categories->join();

        $data['categories'] = category_tree($data['lists']);

        $this->load->frontend('compare', $data);
    }

}
