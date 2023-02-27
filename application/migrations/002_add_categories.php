<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_categories extends CI_Migration {

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
            'is_menu' => array(
                'type' => 'INT',
                'constraint' => '3',
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '3',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('categories');
    }
}
