<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = [
            [
                'id'            => 1,
                'nomor_surat'   => 'SM-01',
                'tanggal'       => '2025-08-10',
                'pengirim'      => 'Yogi',
                'perihal'       => 'Undangan',
            ],
            [
                'id'            => 2,
                'nomor_surat'   => 'SM-02',
                'tanggal'       => '2025-08-11',
                'pengirim'      => 'Wikan',
                'perihal'       => 'Undangan',
            ],
            [
                'id'            => 3,
                'nomor_surat'   => 'SM-03',
                'tanggal'       => '2025-08-12',
                'pengirim'      => 'Fajar',
                'perihal'       => 'Undangan',
            ]
        ];


        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id)
    {
        return 'Halaman Surat Masuk dari dengan Id : '.$id;
    }
}
