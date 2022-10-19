<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_penghuni'          => [
				'type'           => 'INT',
				'constraint'     => 15,
				'auto_increment' => true
			],
			'nama_penghuni'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
                'null'           => false,
			],
			'pass_penghuni'       => [
				'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => false,
			],
			'email_penghuni'      => [
                'type'           => 'VARCHAR',
                'null'           => false,
                'constraint'    => '200',
			],
			'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => false,
			],
			'nohp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => false,
            ],
            'alamat_penghuni' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => false,
			]
		]);

		// set Primary Key
		$this->forge->addKey('id_penghuni', TRUE);

		$this->forge->createTable('penghuni', TRUE);
        
    }

    public function down()
    {
        $this->forge->dropTable('penghuni');
    }
}
