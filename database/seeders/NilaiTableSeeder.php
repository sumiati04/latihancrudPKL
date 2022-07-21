<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['nis' => '1001', 'kode_mata_pelajaran' => '123', 'nilai' => '90'],
        ];

        DB::table('nilai')->insert($sampel);
    }
}
