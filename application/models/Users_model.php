<?php

class Users_model extends CI_Model {
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $password;
    public $status;
    public $created_at;
    public $updated_at;

    protected $table = 'users';

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

        return $query->result();
    }


    public function insert_address($data){
        $this->db->insert('user_address', $data);

        return $this->db->insert_id();
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

    public function loggedin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table);
        return $query->row();
    }

}
