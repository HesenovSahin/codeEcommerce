<?php

class Products_model extends CI_Model {

    public $title;
    public $description;
    public $quantity;
    public $price;
    public $brand_id;
    public $status ;
    public $created_at ;
    public $updated_at;


    protected $table = 'products';

    public function join(){
        $this->db->select('p.*, b.title as brand_title,b.logo as brand_logo,i.path as image_path,i.product_id as img_pr_id');
        $this->db->from('products p');
        $this->db->join('brands b', 'p.brand_id=b.id', 'left');
        $this->db->join('images i', 'i.product_id=p.id', 'left');
        $query = $this->db->get()->result();

        return $query;

    }

    public function join_user_product(){
        $this->db->select('i.path as image_path,p.title as product_title,up.*');
        $this->db->from('user_products up');
        $this->db->join('users u', 'up.user_id=u.id','left');
        $this->db->join('products p', 'p.id=up.product_id', 'left');
        $this->db->join('images i', 'i.product_id=up.product_id', 'left');
        $this->db->where('i.main',1);
        $query = $this->db->get()->result();

        return $query;

    }

    public function getTotalAmount($user_id){
        $this->db->select_sum('up.amount');
        $this->db->from('user_products up');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row();

        return $query;

    }


    public function insert($data){
        // $data = array(
        //         'fullname' => $this->fullname,
        //         'password' => $this->password,
        //         'email' => $this->email,
        //         'status' => $this->status
        // );

        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function insert_user_products($data){

        $this->db->insert('user_products', $data);

        return $this->db->insert_id();
    }

    public function insert_pivot($data){
        $this->db->insert('product_categories', $data);

        return $this->db->insert_id();
    }



    public function select_all(){
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function getLastElementById(){

        $this->db->select('p.id');
        $this->db->from('products p');
        $this->db->order_by('updated_at', 'DESC');
        $query = $this->db->get($this->table);

        return $query->row();
    }

    public function selectDataById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);

        return $query->row();
    }



    public function update($id,$data){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this -> db -> where('id', $id);
        $this -> db -> delete($this->table);
    }

}

