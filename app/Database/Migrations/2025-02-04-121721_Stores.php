<?php

namespace App\Database\Migrations;


use CodeIgniter\Database\Migration;

class Stores extends Migration
{
    public function up()
    {
        //create table stores fields are name ,contact, address, email, google map link , password text
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'store_user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'is_unique'  => true
            ],
            'contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'google_map_link' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'TEXT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',

            ],
            "updated_at" => [
                'type'       => 'DATETIME',

            ],
            'deleted_at' => [
                'type'       => 'DATETIME',

            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('stores');
    }

    public function down()
    {
        $this->forge->dropTable('stores');
    }
}
