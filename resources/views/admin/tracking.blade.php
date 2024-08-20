<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full flex">
        <div class="w-64 bg-gray-800 text-white">
            <x-sidebar></x-sidebar>
        </div>
        <div class="flex-1 flex flex-col">
            <div class="bg-gray-800 text-white">
                <x-headlink></x-headlink>
            </div>
            <div class="flex justify-end px-4 py-6 sm:px-6 lg:px-8">

            </div>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <!-- Wrapper for responsive table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pos</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Scan Tipe</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Waktu Scan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Looping melalui data dari model Daftar -->
                                @foreach ($scan as $row)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $row->daftar->nama_anggota }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <h2 class="font-bold">Nama Pos : {{ $row->pos->nama_pos }}</h2>
                                        <p>{{ $row->pos->deskripsi }}</p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <h2 class="font-bold">{{ $row->scan_tipe }}</h2>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <h2 class="font-bold">{{  \Carbon\Carbon::parse($row->waktu_scan)->format('d-m-Y H:m') }}</h2>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
