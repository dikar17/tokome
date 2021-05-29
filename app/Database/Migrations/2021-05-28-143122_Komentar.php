<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
				'unsigned'       => true,
				'auto_increment' => true,		//penambahan otomatis
			],
			'id_barang'       => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
				'unsigned'       => true,
			],
			'id_user'       => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
				'unsigned'       => true,
			],
			'komentar' => [
					'type' => 'TEXT',
			],
			'created_by' => [
				'type' => 'INT',		//tipe data = datetime
				'constraint' => '11',
			],
			'created_date' => [
					'type' => 'DATETIME',		//tipe data = datetime
					'null' => true,
			],
			'updated_by' => [
				'type' => 'INT',		
				'constraint' => '11',		
			],
			'updated_date' => [
					'type' => 'DATETIME',		
					'null' => true,		
			],
		]);
		$this->forge->addKey('id', true);		//primary key = id
		$this->forge->addForeignKey('id_user', 'user','id');		//field id_pembeli pada tabel transaksi dihubungkan dengan tabel user dengan field id
		$this->forge->addForeignKey('id_barang', 'barang','id');
		$this->forge->createTable('komentar');		//membuat tabel komentar
	}

	public function down()
	{
		//
		$this->forge->dropTable('komentar');		//membuat tabel tb_user
	}
}
