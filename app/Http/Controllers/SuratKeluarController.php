<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = [
            [
                'id'            => 1,
                'nomor_surat'   => 'SK-01',
                'tanggal'       => '2025-08-10',
                'tujuan'        => 'Yogi',
                'perihal'       => 'Undangan',
            ],
            [
                'id'            => 2,
                'nomor_surat'   => 'SK-02',
                'tanggal'       => '2025-08-11',
                'tujuan'        => 'Wikan',
                'perihal'       => 'Undangan',
            ],
            [
                'id'            => 3,
                'nomor_surat'   => 'SK-03',
                'tanggal'       => '2025-08-12',
                'tujuan'        => 'Fajar',
                'perihal'       => 'Undangan',
            ]
        ];


        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluarDetail = [
            1=>[
                'id'            => 1,
                'nomor_surat'   => 'SK-01',
                'tanggal'       => '2025-08-10',
                'tujuan'        => 'Yogi',
                'perihal'       => 'Undangan Ngantri BBM',
            ],
            2=>[
                'id'            => 2,
                'nomor_surat'   => 'SK-02',
                'tanggal'       => '2025-08-11',
                'tujuan'        => 'Wikan',
                'perihal'       => 'Undangan',
            ],
            3=>[
                'id'            => 3,
                'nomor_surat'   => 'SK-03',
                'tanggal'       => '2025-08-12',
                'tujuan'        => 'Fajar',
                'perihal'       => 'Undangan',
            ]
        ];
        $surat = $suratKeluarDetail[$id] ?? null;
        return view('surat-keluar.show', compact('surat'));
    }
}