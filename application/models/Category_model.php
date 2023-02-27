<?php

class Category_model extends CI_Model {

    public $title;
    public $parent_id;
    public $status ;
    public $created_at ;
    public $updated_at;


    protected $table = 'category';

    public function join(){
        $this->db->select('b.*, c.title as cattitle');
        $this->db->from('category b');
        $this->db->join('category c', 'c.id=b.parent_id', 'left');
        $query = $this->db->get()->result();

        return $query;

    }
    public function product_categories_insert($data1,$data2){
         $data = array(
                 'products_id' => $data1,
                 'categories_id' => $data2
         );

        $this->db->insert('product_categories', $data);
        return $this->db->insert_id();

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

    public function select_all(){
        $query = $this->db->get($this->table);
//        $this->db->select('*');
//        $this->db->from('category c,category cat');
//        $this->db->where('c.id=cat.parent_id');
//
//        $query = $this->db->get();

        return $query->result();
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


