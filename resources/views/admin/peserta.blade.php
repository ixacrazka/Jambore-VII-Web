<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tambah Data  Peserta</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <div class="min-h-full">
          
            <body class="bg-gray-100">
                <div class="container mx-auto p-4 m-5">
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                        <div class="md:flex">
                            <div class="w-full p-8">
                                <h2 class="text-2xl font-bold mb-6 text-gray-900">Tambah Data</h2>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Anggota</label>
                                        <input type="text" id="nama_anggota" name="nama_anggota" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="kwaran" class="block text-sm font-medium text-gray-700">Kwartir Ranting</label>
                                        <input type="text" id="kwaran" name="kwaran" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="pangkalan" class="block text-sm font-medium text-gray-700">Pangkalan</label>
                                        <input type="text" id="pangkalan" name="pangkalan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="no_gudep" class="block text-sm font-medium text-gray-700">No Gudep</label>
                                        <input type="text" id="no_gudep" name="no_gudep" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="tmpt_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                                        <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                        <input type="text" id="tgl_lahir" name="tgl_lahir" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="gol_darah" class="block text-sm font-medium text-gray-700">Gol Darah</label>
                                        <input type="text" id="gol_darah" name="gol_darah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                                        <input type="text" id="agama" name="agama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="alamat_rumah" class="block text-sm font-medium text-gray-700">Alamat Rumah</label>
                                        <input type="text" id="alamat_rumah" name="alamat_rumah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor Handphone</label>
                                        <input type="text" id="no_hp" name="no_hp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="nama_ortu" class="block text-sm font-medium text-gray-700">Nama Orang Tua</label>
                                        <input type="text" id="nama_ortu" name="nama_ortu" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
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