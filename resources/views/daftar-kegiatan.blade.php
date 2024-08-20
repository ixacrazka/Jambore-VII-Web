<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jambore cabang Bogor VII</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts for more dynamic font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Lora:wght@400&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <x-navbar></x-navbar>

    
    <div class="flex items-center justify-center min-h-screen">
        <form action="{{ route('kegaiatan.daftar.cek') }}" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md"
            method="get">
            @csrf
            <h2 class="text-2xl font-semibold mb-6 text-center">Daftarkan Kegiatan Anda Disini</h2>

            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700 font-medium mb-2">Masukan Nomor HP yang sudah
                    terdaftar</label>
                <input type="text" id="no_hp" name="no_hp"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#543310] focus:border-transparent"
                    placeholder="Masukkan nomor HP">
                @if (session('alert'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2"
                        role="alert">
                        <strong class="font-bold">Peringatan!</strong>
                        <span class="block sm:inline">{{ session('alert') }}</span>
                        
                    </div>
                @endif
            </div>

            <div class="flex items-center justify-between mt-6">
                <button type="submit"
                    class="bg-[#543310] text-white px-4 py-2 rounded-lg hover:bg-[#4b2d0e] focus:outline-none focus:ring-2 focus:ring-[#543310] focus:ring-opacity-50">Kirim</button>
            </div>
        </form>
    </div>


    <!-- Footer Section -->
    <footer class="bg-[#543310] text-white py-7 mt-10 pb-16">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Diskominfo Website.</p>
        </div>
    </footer>
</body>

</html>
