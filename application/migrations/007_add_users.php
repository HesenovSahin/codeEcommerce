<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
            ),
            'surname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
