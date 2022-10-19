<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_pembayaran'          => [
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
			'tanggal'      => [
                'type'           => 'VARCHAR',
                'null'           => false,
                'constraint'    => '100',
			],
			'nominal' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
			],
			'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
			],
            'bulan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
			]
		]);

		// set Primary Key
		$this->forge->addKey('id_pembayaran', TRUE);

		$this->forge->createTable('pembayaran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
