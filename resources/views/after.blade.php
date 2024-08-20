<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Informasi</title>
    <!-- Memuat file Tailwind CSS -->
  @vite('resources/css/app.css')
    <!-- Memuat file html5-qrcode -->
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
</head>
<body>
    <!-- Main container -->
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Informasi Regu</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Informasi Regu dan Scan Barcode Pos</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama Regu</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Kwartir Ranting</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Pangkalan</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">No Gudep</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Lahir</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tempat Lahir</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Agama</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Alamat Rumah</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">No HP</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama Orang Tua</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Alamat Orang Tua</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">No HP Orang Tua</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">...</dd>
                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
                <div class="mt-6">
                <a href="/camera" id="scan-button" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Scan Barcode</a>
            </div>
            </div>
            <!-- Scan Barcode Modal -->
            <div id="scan-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div id="reader" class="w-full h-64"></div>
                    <button id="close-button" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>
        </div>

        <!-- New Card with Table -->
        <div class="max-w-2xl mx-auto bg-white p-6 mt-6 rounded-lg shadow-md">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Keterangan Pos</h3>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pos</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pendaftaran</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08:00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kelas 1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pos 1</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Kegiatan 1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:30</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:30</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kelas 2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pos 2</td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize QR Code Reader
        const html5QrCode = new Html5Qrcode("reader");

        document.getElementById('scan-button').addEventListener('click', () => {
            document.getElementById('scan-modal').classList.remove('hidden');
            html5QrCode.start({ facingMode: "environment" }, { fps: 10, qrbox: 250 },
                qrCodeMessage => {
                    console.log(qrCodeMessage);
                    // Handle the scanned QR code message
                },
                errorMessage => {
                    console.log(errorMessage);
                })
                .catch(err => {
                    console.error(err);
                });
        });

        document.getElementById('close-button').addEventListener('click', () => {
            html5QrCode.stop().then(ignore => {
                document.getElementById('scan-modal').classList.add('hidden');
            }).catch(err => {
                console.error(err);
            });
        });
    </script>
</body>
</html>
