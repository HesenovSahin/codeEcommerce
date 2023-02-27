<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogPage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Categories_model', 'cats_md');
        $this->load->model('Category_model', 'cat_md');
        $this->load->model('Blog_model', 'bg_md');

    }


    public function index(){
        $data['title'] = 'Blog Page';
        $blog = new Blog_model();

        $categories = new Categories_model();

        $data['categories'] = $categories->select_all();

        $data['lists'] = $blog->select_all();

        $categories = new Category_model();
        $data['categories'] = category_tree($categories->join());


        $this->load->frontend('blog_page', $data);
        }

}



