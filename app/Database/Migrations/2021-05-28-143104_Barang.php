<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'	=> [
					'type'           => 'INT',		//tipe data = integer
					'constraint'     => 11,			//length = 5
					'unsigned'       => true,
					'auto_increment' => true,		//penambahan otomatis
			],
			'nama' => [
					'type' => 'TEXT',
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'stok' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'gambar' => [
				'type' => 'TEXT',
			],
			'created_by' => [
				'type' => 'INT',		//tipe data = datetime
				'constraint' => '11',
			],
			'created_date' => [
					'type' => 'DATETIME',		//tipe data = datetime
			],
			'updated_by' => [
				'type' => 'INT',		
				'constraint' => '11',
				'null'=> true,	
			],
			'updated_date' => [
				'type' => 'DATETIME',		
				'null' => true,	
			],
		]);
		$this->forge->addKey('id', true);		//primary key = id_user
		$this->forge->createTable('barang');		//membuat tabel tb_user
	}

	public function down()
	{
		//
		$this->forge->dropTable('barang');		//membuat tabel tb_user
	}
}
