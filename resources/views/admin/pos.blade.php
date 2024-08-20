<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .print-qr {
            margin-top: 1rem;
            display: inline-block;
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full flex">
        <!-- sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <x-sidebar></x-sidebar>
        </div>
        <!-- Konten Utama -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="bg-gray-800 text-white">
                <x-headlink></x-headlink>
            </div>
            <div class="flex justify-end px-4 py-6 sm:px-6 lg:px-8">
                <a href="{{ route('pos.create') }}"
                    class="bg-slate-800 rounded-md px-4 py-2 text-sm font-medium text-white no-underline">Tambah Pos</a>
            </div>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Pos</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Deskripsi</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        QR-Code</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kuota Kelas</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Masuk</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Looping melalui data dari model Daftar -->
                                @foreach ($pos as $datapos)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $datapos->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $datapos->nama_pos }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $datapos->deskripsi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode($datapos->qr_code) }}"
                                            alt="QR Code" class="qr-code">
                                        <button
                                            class="print-qr bg-gray-800 text-white px-2 py-1 rounded mt-2 m-auto">Print
                                            QR Code</button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $datapos->kuota }} Orang
                                    </td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $datapos->masuk }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $datapos->tanggal }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="action-buttons flex space-x-2">
                                            <a href="{{ route('pos.edit', ['id' => $datapos->id]) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                            <form action="{{ route('pos.destroy', ['id' => $datapos->id]) }}"
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
            </main>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.print-qr').on('click', function() {
                var qrCode = $(this).siblings('.qr-code').attr('src');
                var namaPos = $(this).closest('tr').find('td:nth-child(2)').text().trim();
                console.log(qrCode);

                var printWindow = window.open('', '_blank');
                printWindow.document.write(
                    '<html><head><title>Print QR Code</title><style>body{margin:10px;text-align:center;} img{max-width:100%;height:auto;}</style></head><body>'
                );
                printWindow.document.write('<h1><strong>QR-Code ' + namaPos + '</strong></h1>');
                printWindow.document.write('<img src="' + qrCode + '">');
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
</body>

</html>