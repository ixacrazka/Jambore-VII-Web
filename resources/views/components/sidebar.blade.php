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

    <!-- Sidebar -->
    <div class="sidebar bg-gray-800 text-white flex flex-col">
        <div class="p-4">
            <a href="{{ route('admin') }}" class="text-2xl font-bold">Admin</a>
        </div>
        <nav class="flex-1">
            <ul>
                <li class="sidebar-item p-4">
                    <a href="{{ route('admin') }}" class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item p-4">
                    <a href="{{ route('admin.content') }}" class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 21h6">
                            </path>
                        </svg>
                        Konten
                    </a>
                </li>
                <li class="sidebar-item p-4">
                    <a href="{{ route('admin.materi') }}" class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 21h6">
                            </path>
                        </svg>
                        Materi
                    </a>
                </li>
                <li class="sidebar-item p-4">
                    <a href="{{ route('admin.pos') }}" class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11V7a4 4 0 018 0v4a4 4 0 01-8 0zM7 15h10"></path>
                        </svg>
                        Pos/Kelas
                    </a>
                </li>
                <li class="sidebar-item p-4">
                    <a href="{{ route('admin.daftar') }}" class="flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11V7a4 4 0 018 0v4a4 4 0 01-8 0zM7 15h10"></path>
                        </svg>
                        Daftar Peserta
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4">
            <a href="{{ route('actionlogout') }}" class="flex items-center">
                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
                Logout
            </a>
        </div>
    </div>
