<?php

use Illuminate\Database\Seeder;

class PreferctureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefecture')->insert([
			'name' => "北海道",
			'code' => "01",
		]);
    }
}
