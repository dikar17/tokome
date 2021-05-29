<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'username'       => [
					'type'       => 'VARCHAR',		//tipe data = varchar
					'constraint' => '15',
			],
			'password' => [
					'type' => 'VARCHAR',
					'constraint' => '100',
			],
			'salt' => [
					'type' => 'TEXT',
			],
			'avatar' => [
					'type' => 'TEXT',
					'null' => true,
			],
			'role' => [
				'type' => 'INT',
				'constraint' => '1',
				'default' => 1,
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
		$this->forge->createTable('user');		//membuat tabel tb_user
		
	}

	public function down()
	{
		//
		$this->forge->dropTable('user');		//membuat tabel tb_user
	}
}
