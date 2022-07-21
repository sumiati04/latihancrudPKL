<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JurusanTableSeeder extends Seeder
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
            ['kode_mata_pelajaran' => '123', 'nama_mata_pelajaran' => 'ipa', 'semester' => '1', 'jurusan' => 'rpl' ],
        ];

        DB::table('jurusan')->insert($sampel);
    }
}
