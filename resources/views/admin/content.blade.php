<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rundwon Acara</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <x-sidebar></x-sidebar>
        </div>
        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="bg-gray-800 text-white">
                <x-headlink></x-headlink>
            </div>
            <!-- Tombol Create di luar tabel -->
            <div class="flex justify-end px-4 py-6 sm:px-6 lg:px-8">
                <a href="{{ route('content.create') }}"
                    class="bg-slate-800 rounded-md px-4 py-2 text-sm font-medium text-white no-underline">Tambah
                    Kegiatan</a>
            </div>

            <!-- Wrapper untuk tabel -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Waktu</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Kegiatan</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Pemateri</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Lokasi</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Looping melalui data dari model Daftar -->
                        @foreach ($content as $dkonten)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $dkonten->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dkonten->waktu }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $dkonten->nama_kegiatan }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dkonten->pemateri }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dkonten->lokasi }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="action-buttons flex space-x-2">
                                        {{-- <a href="/dkonten/{{ $dkonten->id }}/update"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</a> --}}
                                        <form action="{{ route('content.destroy', ['id' => $dkonten->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
