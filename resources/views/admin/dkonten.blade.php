<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tambah Data  Konten</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <div class="min-h-full">
          
            <body class="bg-gray-100">
                <div class="container mx-auto p-4 m-5">
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                        <div class="md:flex">
                            <div class="w-full p-8">
                                <h2 class="text-2xl font-bold mb-6 text-gray-900">Tambah Rundown</h2>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="waktu" class="block text-sm font-medium text-gray-700">waktu</label>
                                        <input type="time" id="waktu" name="waktu" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="nama_kegiatan" class="block text-sm font-medium text-gray-700">Nama Kegiatan</label>
                                        <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="pemateri" class="block text-sm font-medium text-gray-700">Pemateri</label>
                                        <input type="text" id="pemateri" name="pemateri" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                        <input type="text" id="lokasi" name="lokasi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                      Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

        </html>