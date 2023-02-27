<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_settings extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'some' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'any' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => '3',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('settings');
    }

    public function down()
    {
        $this->dbforge->drop_table('settings');
    }
}
