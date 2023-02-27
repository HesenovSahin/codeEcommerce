<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

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
                'constraint' => '100',
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'content' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'video' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'cat_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'is_monset' => array(
                'type' => 'INT',
                'constraint' => '3',
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '3',
            ),
            'created_at datetime default current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blog');
    }

    public function down()
    {
        $this->dbforge->drop_table('blog');
    }
}

