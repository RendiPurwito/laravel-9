<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pekerjaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjas')->insert([
            'nama' => 'Dwi Purwito',
            'jeniskelamin' => 'laki-laki',
            'notelpon' => '085774859389',
        ]);
    }
}
