<?php

use Illuminate\Database\Seeder;

class BillsDetailsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\BillDetail::class, 10)->create();
	}
}
