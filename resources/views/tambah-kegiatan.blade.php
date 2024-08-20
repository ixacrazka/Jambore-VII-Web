<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jambore cabang Bogor VII</title>
    <!-- Include Tailwind CSS -->
    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts for more dynamic font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Lora:wght@400&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <div class="flex flex-col items-center justify-center mt-10">
        @if (session('alert'))
            <div class="w-full max-w-md mb-4">
                <div class="bg-green-400 border bg-success border-blue-400 text-blue-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Berhasil!</strong>
                    <span class="block sm:inline">{{ session('alert') }}</span>
                </div>
            </div>
        @endif
    </div>


    <!-- Card for displaying kegiatan details -->
    <div class="flex items-center justify-center ">
        <div class="bg-white p-8 rounded-lg shadow-md m-5 w-full max-w-md ">
            <h2 class="text-2xl font-semibold mb-6 text-center">Peserta</h2>
            <h4>Nama : {{ $peserta->nama_anggota }}</h4>
            <h4>Nomor HP : {{ $peserta->no_hp }}</h4>
            <h3 class="text-lg font-semibold my-3 ">Detail Kegiatan Peserta</h3>
            <ul class="space-y-2">
                @foreach ($activities as $row)
                    <li>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox"
                                {{ in_array($row->id, $followedActivities) ? 'checked' : '' }} disabled>
                            @if (in_array($row->id, $followedActivities))
                                <b class="ml-2">{{ $row->nama_pos }} <span class="text-green-400">(Sudah
                                        Diikuti)</span></b>
                            @else
                                <span class="ml-2">{{ $row->nama_pos }}</span>
                            @endif

                        </label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="flex items-center justify-center ">
        <form action="{{ route('kegaiatan.daftar.tambah') }}" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md"
            method="post">
            @csrf
            <h2 class="text-2xl font-semibold mb-6 text-center">Daftarkan Kegiatan Anda Disini</h2>

            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700 font-medium mb-2">Nomor HP
                    terdaftar</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ $no_hp }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#543310] focus:border-transparent"
                    placeholder="Masukkan nomor HP" readonly>
            </div>

            <div class="mb-4">
                <label for="kegiatan" class="block text-gray-700 font-medium mb-2">Pilih Kegiatan</label>
                <select id="kegiatan" name="kegiatan[]" multiple
                    class="select2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#543310] focus:border-transparent">
                    @foreach ($pos as $row)
                        <option value="{{ $row->id }}">{{ $row->nama_pos }}</option>
                    @endforeach
                </select>
                @error('kegiatan')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-6">
                <button type="submit"
                    class="bg-[#543310] text-white px-4 py-2 rounded-lg hover:bg-[#4b2d0e] focus:outline-none focus:ring-2 focus:ring-[#543310] focus:ring-opacity-50">Kirim</button>
            </div>
        </form>
    </div>

    <!-- Include jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>
