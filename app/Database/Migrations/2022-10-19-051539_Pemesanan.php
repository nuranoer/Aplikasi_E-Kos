<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_pemesanan'          => [
				'type'           => 'INT',
				'constraint'     => 15,
				'auto_increment' => true
			],
			'id_kamar'       => [
				'type'           => 'INT',
				'constraint'     => '15',
                'null'           => false,
			],
			'id_penghuni'       => [
				'type'           => 'INT',
                'constraint'     => '15',
                'null'           => false,
			],
			'tanggal_mulai'      => [
                'type'           => 'DATE',
                'null'           => false,
                
			],
			'durasi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => false,
			]
		]);

		// set Primary Key
		$this->forge->addKey('id_pemesanan', TRUE);

		$this->forge->createTable('pemesanan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
