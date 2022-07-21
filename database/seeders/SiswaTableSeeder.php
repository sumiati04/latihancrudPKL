<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaTableSeeder extends Seeder
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
            ['nis' => '1001', 'nama_siswa' => 'Sumiati', 'alamat_siswa' => 'Bdg', 'tanggal_lahir' => '2005-01-04'],
            ['nis' => '1002', 'nama_siswa' => 'Siti Salimah', 'alamat_siswa' => 'Bdg', 'tanggal_lahir' => '2004-05-19'],
            ['nis' => '1003', 'nama_siswa' => 'Suci Oktaviani', 'alamat_siswa' => 'Bdg', 'tanggal_lahir' => '2004-10-24'],
        ];

        DB::table('siswa')->insert($sampel);
    }
}
