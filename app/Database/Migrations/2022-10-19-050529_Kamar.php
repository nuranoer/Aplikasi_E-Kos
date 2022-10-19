<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kamar extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kamar'          => [
				'type'           => 'INT',
				'constraint'     => 9,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_kamar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
                'null'           => false,
			],
			'deskripsi_kamar'       => [
				'type'           => 'text',
                'null'           => false,
			],
			'status_kamar'      => [
                'type'           => 'VARCHAR',
                'null'           => false,
                'constraint'    => '100',
			],
			'harga_kamar' => [
                'type'           => 'INT',
                'constraint'     => '15',
                'null'           => false,
			],
			'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '300',
                'null'           => false,
			]
		]);

		// set Primary Key
		$this->forge->addKey('id_kamar', TRUE);

		$this->forge->createTable('kamar', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kamar');
    }
}
