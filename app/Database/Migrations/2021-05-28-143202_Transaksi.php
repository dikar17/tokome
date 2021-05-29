<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
			'id_barang'          => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
				'unsigned'       => true,
			],
			'id_pembeli'          => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
				'unsigned'       => true,
			],
			'jumlah'          => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
			],
			'total_harga'          => [
				'type'           => 'INT',		//tipe data = integer
				'constraint'     => 11,			//length = 5
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
				'null'=>true,	
			],
			'updated_date' => [
				'type' => 'DATETIME',		
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);		//primary key = id_user
		$this->forge->addForeignKey('id_pembeli', 'user','id');		//field id_pembeli pada tabel transaksi dihubungkan dengan tabel user dengan field id
		$this->forge->addForeignKey('id_barang', 'barang','id');
		$this->forge->createTable('transaksi');		//membuat tabel tb_user
	}

	public function down()
	{
		//
		$this->forge->dropTable('transaksi');		//membuat tabel tb_user
	}
}
