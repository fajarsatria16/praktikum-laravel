<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ivory text-slate-800 min-h-screen flex flex-col">
    <header class="bg-white shadow-sm border-b border-cream">
        <div class="max-w-5xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-xl font-bold text-sage">Sistem Informasi Surat</h2>

            <nav class="flex flex-wrap items-center gap-4 text-sm font-medium">
                <a href="{{ route('dashboard') }}" class="hover:text-sage">Dashboard</a>
                <a href="{{ route('surat-masuk.index') }}" class="hover:text-sage">Surat Masuk</a>
                <a href="{{ route('surat-keluar.index') }}" class="hover:text-sage">Surat Keluar</a>

                @auth
                    <span class="text-tan">|</span>
                    <span class="text-slate-600">
                        {{ auth()->user()->name }}
                        <span class="px-2 py-0.5 text-xs rounded bg-cream text-slate-800 font-semibold">
                            {{ auth()->user()->role }}
                        </span>
                    </span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1.5 bg-red-600 text-white rounded-md hover:bg-red-700 cursor-pointer">
                            Keluar
                        </button>
                    </form>
                @endauth
        </nav>
        </div>
    </header>

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 py-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-cream">
            @yield('content')
        </div>
    </main>

    <footer class="bg-white border-t border-cream py-4 text-center text-sm text-slate-500">
        Sistem Informasi Surat
    </footer>
</body>
</html>