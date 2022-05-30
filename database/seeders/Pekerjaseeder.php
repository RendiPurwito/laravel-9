<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Pekerjaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$faker = Faker::create('id_ID');

        DB::table('pekerjas')->insert([
            'nama' => $faker->name,
            'jeniskelamin' => 'laki-laki',
            'notelpon' => $faker->e164PhoneNumber,
        ]);
    }
}
