<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_category extends CI_Migration
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
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
            ),
            'parent_id' => array(
                'type' => 'int',
                'constraint' => 5,
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '3',
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('category');
    }

    public function down()
    {
        $this->dbforge->drop_table('category');
    }
}


