<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komplain extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_komplain'          => [
				'type'           => 'INT',
				'constraint'     => 15,
				'auto_increment' => true
			],
			'id_penghuni'       => [
				'type'           => 'INT',
				'constraint'     => '15',
                'null'           => false,
			],
			'id_kamar'       => [
				'type'           => 'INT',
                'constraint'     => '15',
                'null'           => false,
			],
			'perihal'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
                
			],
			'isi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
			]
		]);

		// set Primary Key
		$this->forge->addKey('id_komplain', TRUE);

		$this->forge->createTable('komplain', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('komplain');
    }
}
