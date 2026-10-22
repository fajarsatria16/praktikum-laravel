<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoing_letters')->insert(
            [
                [
                'nomor_surat'   => 'SK-01',
                'tanggal'       => '2025-08-10',
                'tujuan'        => 'Yogi',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngantri BBM',
                'created_at'    => now(),
                'updated_at'    => now(),
                ],
                [
                'nomor_surat'   => 'SK-02',
                'tanggal'       => '2025-08-11',
                'tujuan'        => 'Wikan',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngantri BBM',
                'created_at'    => now(),
                'updated_at'    => now(),
                ],
                [
                'nomor_surat'   => 'SK-03',
                'tanggal'       => '2025-08-12',
                'tujuan'        => 'Fajar',
                'perihal'       => 'Undangan',
                'keterangan'    => 'Undangan Ngevoice',
                'created_at'    => now(),
                'updated_at'    => now(),
                ]
            ]
        );
    }
}
