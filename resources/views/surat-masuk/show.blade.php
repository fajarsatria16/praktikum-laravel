@extends('layouts.app')
@section('title', 'Detail Surat Masuk')
@section('content')

    <h1 class="text-2xl font-bold text-sage mb-6">Detail Surat Masuk</h1>
@if ($surat)
    <div class="bg-ivory border border-cream rounded-lg p-5 max-w-xl space-y-3 text-sm">
        <p class="border-b border-cream pb-2">
            <strong class="inline-block w-32 text-slate-500">Nomor Surat</strong>
            {{ $surat->nomor_surat }}
        </p>

        <p class="border-b border-cream pb-2">
            <strong class="inline-block w-32 text-slate-500">Tanggal</strong>
            {{ $surat->tanggal }}
        </p>

        <p class="border-b border-cream pb-2">
            <strong class="inline-block w-32 text-slate-500">Pengirim</strong>
            {{ $surat->pengirim }}
        </p>

        <p class="border-b border-cream pb-2">
            <strong class="inline-block w-32 text-slate-500">Perihal</strong>
            {{ $surat->perihal }}
        </p>

        <p>
            <strong class="inline-block w-32 text-slate-500">Keterangan</strong>
            {{ $surat->keterangan ?? '-' }}
        </p>
    </div>
@else
    <p class="p-4 bg-red-50 text-red-600 border border-red-200 rounded-md text-sm">Surat Tidak Ditemukan</p>
@endif

    <a href="{{ route('surat-masuk.index') }}"
       class="inline-block mt-6 px-5 py-2 bg-ivory border border-tan text-slate-700 text-sm font-medium rounded-md hover:bg-cream">
        Kembali
    </a>
@endsection