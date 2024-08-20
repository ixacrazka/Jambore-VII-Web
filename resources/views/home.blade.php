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

    <div class="relative mt-8 mx-auto max-w-full overflow-hidden slider-container">
        <div class="slider-wrapper flex">
            <img src="img/jambore.png" alt="Image 2" class="slider-image">
        </div>
    </div>
    <div class="text-center my-3"> 
        <a href="{{ route('detail') }}" class="bg-[#543310] text-white font-bold py-2 px-4 rounded" type="button">
            Detail Kegiatan
        </a>
    </div>


  <div class="container mx-auto mt-8 px-4">
        <h2 class="text-2xl font-bold mb-4 text-center">Jadwal Acara Jambore</h2>

        <!-- Table for Day 1 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 1 - 13 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Bidang</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 - 11.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kedatangan dan Mendirikan Tenda</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 - 12.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ishoma</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">13.00 - 15.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.00 - 17.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ulang Janji</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">17.30 - 18.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Sore 1</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 - 19.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sholat Magrib</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.30 - 22.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Malam</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Malam 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Table for Day 2 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 2 - 14 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Bidang</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.00 - 06.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Shubuh + Mensprit</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 - 06.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Olahraga</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 - 07.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sarapan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.00 - 07.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Pagi 1</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.30 - 08.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Persiapan Upacara Pembukaan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 - 11.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Orgakum</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Upacara Hari Pramuka dan Pembukaan Jamcab</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 - 13.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ishoma</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">13.00 - 15.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">15.00 - 17.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Gelar senja</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">17.00 - 18.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Sore 2</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 - 19.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ishoma</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.00 - 22.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Malam 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Table for Day 3 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 3 - 15 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Bidang</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.00 - 06.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Shubuh + Mensprit</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 - 06.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Olahraga</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 - 07.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sarapan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.00 - 07.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Pagi 2</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.30 - 08.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Persiapan Materi Rotasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 - 11.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 - 13.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ishoma</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">13.00 - 15.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.00 - 17.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Karnaval</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">17.300 - 18.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Sore3</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 - 19.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Solat Magrib</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.30 - 22.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Malam dan Upacara Penutupan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Table for Day 4 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 4 - 16 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Bidang</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.00 - 06.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Shubuh + Mensprit</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 - 06.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Olahraga</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 - 08.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Evaluasi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 - 09.90</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pembersihan Tenda</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">09-00 - Selesai</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pemerintahan</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm"> Sayonara</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- TABEL ROTASI KEGIATAN -->
        <div class="relative mt-8 mx-auto w-9xl">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-4">Rotasi Kegiatan Jambore</h1>
        </div>
        <!-- Table for Day 1 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 1 - 13 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Durasi</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">00.00 -
                                08.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">8 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Selamat Datang Peserta Jambore Cabang Kota BOGOR 2024 di Taman Tanah Sareal Campsite</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 -
                                10.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">2 jam 30 menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Daftar Ulang & Mendirikan Perkemahan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">10.30 -
                                11.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Persiapan Kegiatan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 -
                                12.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Masak, Makan
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.00 -
                                12.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Siang
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.30 -
                                15.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi: Zona 1, Zona 2, Zona 3, Zona 4, Zona 5, Zona 6</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">15.30 -
                                16.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Petang</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.00 -
                                16.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Mandi, Masak</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.30 -
                                18.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam 30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Ulang Janji</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 -
                                18.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Petang</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.30 -
                                19.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Makan Malam</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.00 -
                                19.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Malam</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.30 -
                                21.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam 30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pentas Seni & Jumpa Tokoh</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">21.00 -
                                00.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 Jam</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Tidur, Korve</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Table for Day 2 -->
        <div class="mt-6 border border-black rounded-md">
            <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 2 - 14 Agustus</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-slate-200 border rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Durasi</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">00.00 -
                                03.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Tidur, Korve</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">03.00 -
                                04.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam 30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.30 -
                                05.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Pagi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.00 -
                                05.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.30 -
                                06.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Senam Pagi
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 -
                                06.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sarapan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 -
                                07.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Siap Giat</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.00 -
                                07.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Pagi</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.30 -
                                08.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Upacara HUT Pramuka</td>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 -
                                08.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pembukaan JAMCAB VII</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.30 -
                                11.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">2 Jam 30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Parade Pasukan</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 -
                                12.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Masak, Makan
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.00 -
                                12.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Siang
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.30 -
                                15.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 Jam
                            </td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi: Zona 1, Zona 2, Zona 3, Zona 4, Zona 5, Zona 6</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">15.30 -
                                16.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Petang</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.00 -
                                16.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Mandi, Masak</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.30 -
                                17.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jamt</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Gelar Senja</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">17.30 -
                                18.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Sore</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 -
                                18.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Petang</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.30 -
                                19.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Makan Malam</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.00 -
                                19.30</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur Berjamaah, Tadarus/Ibadah Malam</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.30 -
                                21.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 Jam 30 Menit</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pentas Seni & Jumpa Tokoh</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">21.00 -
                                00.00</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 Jam</td>
                            <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Tidur, Korve</td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
                <!-- Table for Day 3 -->
                <div class="mt-6 border border-black rounded-md">
                    <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 3 - 15 Agustus</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-slate-200 border rounded-lg">
                            <thead>
                                <tr>
                                    <!-- table head -->
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Durasi</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">00.00 -
                                        03.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 jam
                                    </td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat,
                                        Tidur, Korve</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">03.00 -
                                        04.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam 30
                                        menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.30 - 05.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Shubuh berjamaah, Tadarus/Ibadah Pagi</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.00 -
                                        05.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.30 -
                                        06.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Senam Pagi</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 - 06.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sarapan</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 - 07.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Siap Giat</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.00 - 07.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Pagi</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.30 - 08.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Menuju Zona Kegiatan</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">08.00 - 11.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi: Zona 1, Zona 2, Zona 3, Zona 4, Zona 5, Zona 6
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 - 12.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Masak, Makan</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.00 - 12.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Dzuhur berjamaah, Tadarus/Ibadah Siang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">12.30 - 15.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kegiatan Rotasi: Zona 1, Zona 2, Zona 3, Zona 4, Zona 5, Zona 6</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">15.30 - 16.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Ashar berjamaah, Tadarus/Ibadah Petang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.00 - 16.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Mandi, Masak</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">16.30 - 17.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Kunjungan ke Pameran</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">17.30 - 18.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Apel Sore</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.00 - 18.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Maghrib berjamaah, Tadarus/Ibadah Petang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">18.30 - 19.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Makan Malam</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.00 - 19.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Isya berjamaah, Tadarus/Ibadah Malam</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">19.30 - 21.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam 30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Pentas Seni & Jumpa Tokoh</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">21.00 - 00.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Tidur, Korve</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
                <!-- Table for Day 4 -->
                <div class="mt-6 border border-black rounded-md">
                    <h3 class="text-xl font-semibold mb-4 ml-2 text-center">Hari 4 - 16 Agustus</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-slate-200 border rounded-lg">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Waktu</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Durasi</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 text-center text-sm">Kegiatan Umum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">00.00 -
                                        03.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">3 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Istirahat, Tidur, Korve</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">03.00 - 04.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam 30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">04.30 - 05.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Adzan, Iqamah, Shalat Shubuh berjamaah, Tadarus/Ibadah Pagi</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.00 -
                                        05.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Mandi, Masak</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">05.30 -
                                        06.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Senam Pagi</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.00 - 06.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Sarapan</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">06.30 -  07.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Bongkar Perkemahan</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.00 -  07.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Penutupan Jamcab VII</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">07.30 -
                                        09.30</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">2 jam</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Karnaval & Sayonara</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">09-30 - 11.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">1 jam 30 menit</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Operasi Semut & Pengambilan Atribut</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">11.00 - 00.00</td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm"> 12 jam </td>
                                    <td class="px-4 py-2 border-b border-gray-500 text-center align-middle text-sm">Selamat Kepada Peserta Jambore Cabang Kota Bogor 2024 <br> Salam Sukses & Lanjutkan Perjuangan Mu</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>

        <!-- Footer Section -->
        <footer class="bg-[#543310] text-white py-7 mt-10 pb-16">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Diskominfo Website.</p>
            </div>
        </footer>
</body>

</html>