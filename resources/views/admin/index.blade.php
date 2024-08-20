<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the admin dashboard */
        .sidebar {
            width: 250px;
        }
        .sidebar-item {
            transition: background-color 0.3s;
        }
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100 flex h-screen">
       <!-- sidebar -->
       <div class="w-64 bg-gray-800 text-white">
      <x-sidebar></x-sidebar>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow py-4 px-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="flex items-center">
                    <div class="relative">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 bg-gray-100 p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">User</h2>
                    <p class="text-gray-700">Deskripsi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Jumlah Peserta:</h2>
                    <p class="text-gray-700">Deskripsi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Jumlah Pos</h2>
                    <p class="text-gray-700">Deskripsi</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Jumlah Materi</h2>
                    <p class="text-gray-700">Deskripsi</p>
                </div>
            </div>
        </main>
    </div>

</body>
</html>