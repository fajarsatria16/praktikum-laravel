@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
    <h1 class="text-2xl font-bold text-sage mb-6">Tambah Surat Masuk</h1>

    <form action="{{ route('surat-masuk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 max-w-xl">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat') }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('nomor_surat') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('tanggal') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Pengirim</label>
            <input name="pengirim" value="{{ old('pengirim') }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('pengirim') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Perihal</label>
            <input name="perihal" value="{{ old('perihal') }}"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
            @error('perihal') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
            <select name="category_id"
                class="w-full px-3 py-2 border border-tan rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-sage">
                <option value="">-- Tanpa kategori --</option>
                @foreach ($categories as $kategori)
                    <option value="{{ $kategori->id }}" @selected(old('category_id') == $kategori->id)>
                        {{ $kategori->nama }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Keterangan</label>
            <textarea name="keterangan" rows="3"
                class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">{{ old('keterangan') }}</textarea>
            @error('keterangan') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Lampiran (PDF/JPG/PNG, maks. 2 MB)</label>
            <input type="file" name="lampiran" accept=".pdf,.jpg,.jpeg,.png"
                class="w-full text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-cream file:text-slate-800 hover:file:bg-tan/40 cursor-pointer">
            @error('lampiran') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-3 pt-2">
            <button type="submit"
                class="px-5 py-2 bg-sage hover:bg-[#4b6e58] text-white text-sm font-medium rounded-md cursor-pointer">
                Simpan
            </button>
            <a href="{{ route('surat-masuk.index') }}"
                class="px-5 py-2 bg-ivory border border-tan text-slate-700 text-sm font-medium rounded-md hover:bg-cream">
                Batal
            </a>
        </div>
    </form>
@endsection