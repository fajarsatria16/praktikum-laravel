@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')
    <h1 class="text-2xl font-bold text-sage mb-6">Edit Surat Keluar</h1>

    <form action="{{ route('surat-keluar.update', $surat->id) }}" method="POST" class="space-y-4 max-w-xl">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('nomor_surat')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('tanggal')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tujuan</label>
            <input name="tujuan" value="{{ old('tujuan', $surat->tujuan) }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('tujuan')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Perihal</label>
            <input name="perihal" value="{{ old('perihal', $surat->perihal) }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('perihal')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Keterangan</label>
            <textarea name="keterangan" rows="3"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">{{ old('keterangan', $surat->keterangan) }}</textarea>
            @error('keterangan')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-3 pt-2">
            <button type="submit"
                class="px-5 py-2 bg-sage hover:bg-[#4b6e58] text-white text-sm font-medium rounded-md cursor-pointer">
                Simpan Perubahan
            </button>
            <a href="{{ route('surat-keluar.index') }}"
                class="px-5 py-2 bg-ivory border border-tan text-slate-700 text-sm font-medium rounded-md hover:bg-cream">
                Batal
            </a>
        </div>
    </form>
@endsection