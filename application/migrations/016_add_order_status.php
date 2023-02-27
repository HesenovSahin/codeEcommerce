
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_order_status extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(

            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'varchar',
                'constraint' => 255,
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('order_status');
    }

    public function down()
    {
        $this->dbforge->drop_table('order_status');
    }
}



