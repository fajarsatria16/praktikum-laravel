@extends('layouts.app')

@section('title', 'Halaman Surat Keluar')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
        <h1 class="text-2xl font-bold text-sage">Daftar Surat Keluar</h1>

        @can('manage-letters')
            <a href="{{ route('surat-keluar.create') }}"
               class="px-4 py-2 bg-sage hover:bg-[#4b6e58] text-white text-sm font-medium rounded-md">
                + Tambah Surat Keluar
            </a>
        @endcan
    </div>

    @if (session('success'))
        <p class="p-3 mb-4 bg-cream/60 text-sage border border-sage/30 rounded-md text-sm font-medium">
            {{ session('success') }}
        </p>
    @endif

    <div class="overflow-x-auto rounded-lg border border-cream">
        <table class="w-full text-sm text-left border-collapse">
            <thead class="bg-cream text-slate-800 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nomor Surat</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3">Tujuan</th>
                    <th class="px-4 py-3">Perihal</th>
                    <th class="px-4 py-3">Keterangan</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-cream">
                @forelse ($suratKeluar as $surat)
                <tr class="hover:bg-ivory">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-medium">{{ $surat->nomor_surat }}</td>
                    <td class="px-4 py-3">{{ $surat->tanggal }}</td>
                    <td class="px-4 py-3">{{ $surat->tujuan }}</td>
                    <td class="px-4 py-3">{{ $surat->perihal }}</td>
                    <td class="px-4 py-3">{{ $surat->keterangan ?? '-' }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('surat-keluar.show', $surat->id) }}"
                               class="px-2.5 py-1 bg-ivory border border-tan text-slate-700 text-xs font-medium rounded hover:bg-cream">
                                Detail
                            </a>

                            @can('manage-letters')
                                <a href="{{ route('surat-keluar.edit', $surat->id) }}"
                                   class="px-2.5 py-1 bg-tan text-white text-xs font-medium rounded hover:opacity-90">
                                    Edit
                                </a>
                                <form action="{{ route('surat-keluar.destroy', $surat->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Hapus surat keluar ini?')"
                                        class="px-2.5 py-1 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 cursor-pointer">
                                        Hapus
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-slate-500">Belum ada data surat keluar.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection