<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ivory min-h-screen flex items-center justify-center">


    <div class="w-full max-w-md bg-white border border-cream rounded-xl shadow-sm p-6">
        <h1 class="text-2xl font-bold text-sage mb-6 text-center">Login SIM-Surat</h1>

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                <input type="password" name="password"
                    class="w-full px-3 py-2 border border-tan rounded-md focus:outline-none focus:ring-2 focus:ring-sage">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full px-4 py-2 bg-sage hover:bg-[#4b6e58] text-white font-medium rounded-md cursor-pointer">
                Masuk
            </button>
        </form>
    </div>

</body>
</html>