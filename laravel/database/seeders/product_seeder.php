<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('products')->insert([
			['name' => 'oppo',
				'price' => '25000',
				'catagroy' => 'mobile',
				'galary' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcHMhA45G1jV1yuP0RVOIm5ZQlKb4CNBV0Aw&usqp=CAU',
				'description' => 'oppo mobile is best and best cermra and more feature',
			],
			['name' => 'loptop',
				'price' => '45000',
				'catagroy' => 'L.G laptop',
				'galary' => 'https://cdn.mos.cms.futurecdn.net/6t8Zh249QiFmVnkQdCCtHK.jpg',
				'description' => ' l.g laptop has best microproccess and 8 gb ram',
			],
			['name' => 'freez',
				'price' => '23000',
				'catagroy' => 'hp freez ',
				'galary' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSU-FpEzl7yw3rCUjFYDZotiObrR9D0VMN1kOrlJc5F4eWYabR4wJrBdMXn7tw5gUolqHMOgxMY&usqp=CAc',
				'description' => 'hp freez is take minimum electricity voltage 200v',
			],
		]);
	}
}
