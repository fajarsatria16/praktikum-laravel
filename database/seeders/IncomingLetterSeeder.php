<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incoming_letters')->insert(
            [
                [
                'nomor_surat'   => 'SM-01',
                'tanggal'       => '2025-08-10',
                'pengirim'      => 'Yogi',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngantri BBM',
                'created_at'    => now(),
                'updated_at'    => now(),
                ],
                [
                'nomor_surat'   => 'SM-02',
                'tanggal'       => '2025-08-11',
                'pengirim'      => 'Wikan',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngantri BBM',
                'created_at'    => now(),
                'updated_at'    => now(),
                ],
                [
                'nomor_surat'   => 'SM-03',
                'tanggal'       => '2025-08-12',
                'pengirim'      => 'Fajar',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngevoice',
                'created_at'    => now(),
                'updated_at'    => now(),
                ],
            ]
        );
    }
}
