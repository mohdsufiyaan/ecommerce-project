<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->insert([
			['name' => 'sufiyan',
				'email' => 'sufiyan@111.com',
				'password' => Hash::make('12345'),
			],
			['name' => 'naseem',
				'email' => 'naseem@111.com',
				'password' => Hash::make('12345'),
			],
			['name' => 'malik',
				'email' => 'malik@111.com',
				'password' => Hash::make('12345'),
			],
		]);
	}
}
