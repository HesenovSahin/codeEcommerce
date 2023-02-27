<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_product_categories extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'products_id' => array(
                'type' => 'INT',
                'constraint' => 10,
            ),
            'categories_id' => array(
                'type' => 'INT',
                'constraint' => 10,
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('product_categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_categories');
    }
}



