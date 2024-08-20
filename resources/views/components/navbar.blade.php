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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-[#543310] py-6">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-[#F8F4E1] text-3xl font-bold font-montserrat">JAMBORE CABANG
                    VII</a>
            </div>
            <!-- Menu -->
            <div class="hidden md:flex space-x-4 font-bold font-montserrat">
                <a href="{{ route('kegaiatan.daftar') }}"
                    class="text-[#F8F4E1] hover:bg-[#F8F4E1] hover:text-black px-3 py-2 rounded-md border border-white">DAFTAR
                    KEGIATAN</a>
                <a href="{{ route('camera') }}"
                    class="text-[#F8F4E1] hover:bg-[#F8F4E1] hover:text-black  px-3 py-2 rounded-md border border-white">SCAN
                    BARCODE</a>
            </div>

            <!-- Mobile Menu Button (hidden on large screens) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-[#F8F4E1] focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#EAD8C0] font-bold font-montserrat">
            <a href="{{ route('kegaiatan.daftar') }}"
                class="block text-[#222831] hover:bg-[#BCA37F] hover:text-white px-4 py-2">Daftar Kegiatan</a>
            <a href="{{ route('camera') }}"
                class="block text-[#222831] hover:bg-[#BCA37F] hover:text-white px-4 py-2">Scan
                Barcode</a>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
