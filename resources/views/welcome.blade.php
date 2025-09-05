<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title . ' - ' . 'TK IT KHALEFA EL RAHMAN' : 'TK IT KHALEFA EL RAHMAN' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-50 font-poppins" x-data="{ sidebarOpen: false, userMenuOpen: false }" style="font-family: poppins;">

    <div class="flex min-h-screen">
        <div id="Sidebar"
            class="w-[280px] flex flex-col gap-[30px] p-[30px] shrink-0 h-screen overflow-y-scroll no-scrollbar ">
            <div class="flex justify-center">
                <h1 class="text-3xl font-bold text-[#00A6DB]">Khaleefa El Rahman </h1>
            </div>
            <div class="general-menu flex flex-col gap-[18px]">
                <h3 class="font-bold  text-gray-700 text-sm leading-[21px]">Menu</h3>
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->is('admin/dashboard') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }}">
                    <div class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                            <rect width="7" height="9" x="3" y="3" rx="1" />
                            <rect width="7" height="5" x="14" y="3" rx="1" />
                            <rect width="7" height="9" x="14" y="12" rx="1" />
                            <rect width="7" height="5" x="3" y="16" rx="1" />
                        </svg>
                    </div>
                    <p class="font-semibold text-lg  text-center ">Dashboard</p>
                </a>
                <a href="{{ route('akun.index') }}"
                    class="{{ request()->is('admin/data-akun') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }} ">
                    <div class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        {{-- <img src="img/icons/profile-2user.svg" alt="icon">  --}}
                    </div>

                    <p class="font-semibold text-lg ">Data Akun</p>
                </a>
                <a href="{{ route('data-guru.index') }}"
                    class="{{ request()->is('admin/data-guru') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }}">
                    <div class="w-6 h-6">
                        {{-- <img src="img/icons/note-favorite.svg" alt="icon">  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round">
                            <circle cx="12" cy="8" r="5" />
                            <path d="M20 21a8 8 0 0 0-16 0" />
                        </svg>
                    </div>
                    <p class="font-semibold text-center text-lg  hover:text-white">Data guru</p>
                </a>
                <a href="{{ route('data-murid.index') }}"
                    class="{{ request()->is('admin/data-murid') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }} ">
                    <div class="w-6 h-6">
                        {{-- <img src="img/icons/profile-2user.svg" alt="icon">  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round">
                            <circle cx="12" cy="8" r="5" />
                            <path d="M20 21a8 8 0 0 0-16 0" />
                        </svg>
                    </div>

                    <p class="font-semibold text-lg ">Data Murid</p>
                </a>
                <a href="{{ route('data-kelas.index') }}"
                    class="{{ request()->is('admin/data-kelas') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }}">
                    <div class="w-6 h-6">
                        {{-- <img src="img/icons/crown.svg" alt="icon">  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-school">
                            <path d="M14 22v-4a2 2 0 1 0-4 0v4" />
                            <path d="m18 10 4 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-8l4-2" />
                            <path d="M18 5v17" />
                            <path d="m4 6 8-4 8 4" />
                            <path d="M6 5v17" />
                            <circle cx="12" cy="9" r="2" />
                        </svg>
                    </div>
                    <p class="font-semibold text-lg ">Data Kelas</p>
                </a>


                <a href="{{ route('activity.index') }}"
                    class="{{ request()->is('admin/activity') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }} ">
                    <div class="w-6 h-6">
                        {{-- <img src="img/icons/profile-2user.svg" alt="icon">  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-activity">
                            <path
                                d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" />
                        </svg>
                    </div>

                    <p class="font-semibold text-lg ">Activity Log</p>
                </a>

                <a href="/admin/laporan"
                    class="{{ request()->is('admin/laporan') ? 'flex justify-center items-center gap-[10px]  h-12 rounded-full  bg-[#00A6DB] shadow-sm shadow-[#00A6DB] text-white' : 'flex justify-center items-center gap-[10px] cursor-pointer p-[12px_16px] h-12 rounded-full border  text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all' }}">
                    <div class="w-6 h-6">
                        <!-- <img src="img/icons/hierarchy-square-3.svg" alt="icon"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-file">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        </svg>
                    </div>
                    <p class="font-semibold text-lg ">Laporan</p>
                </a>
            </div>
            <hr class="background-grey">
            <div class="general-menu flex flex-col gap-[18px]">
                <h3 class="font-bold text-gray-700 text-sm leading-[21px]">others</h3>
                <form action="/logout" method="post"
                    class=" flex items-center gap-[10px] p-[12px_16px] h-12 rounded-full border background-grey justify-center text-[#00A6DB] hover:bg-[#00A6DB] hover:shadow-sm hover:shadow-[#00A6DB] hover:border-none hover:text-white transition-all"*>
                    @csrf
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    <button type="submit">
                        Log out
                    </button>

                </form>

            </div>
        </div>

        <div class="flex-1 flex flex-col sm:ml-64 transition-all duration-300 ease-in-out">
            <header class="fixed top-0 right-0 left-0 sm:left-64 z-10 bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-4 py-3 sm:px-6">
                    <div class="flex items-center gap-4">
                        <button @click="sidebarOpen = !sidebarOpen" class="sm:hidden">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <h1 class="md:text-xl font-semibold text-sm">Halo, {{ Auth::user()->name }}</h1>
                        <span class="text-sm text-gray-500">{{ now()->isoFormat('dddd, D MMMM YYYY') }}</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="relative hidden sm:block">
                            <input type="text" placeholder="Cari data..."
                                class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <button class="p-2 text-gray-400 hover:text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center focus:outline-none">
                                <img class="w-8 h-8 rounded-full object-cover"
                                    src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                    alt="{{ Auth::user()->name }}">
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 w-48 mt-2 py-2 bg-white rounded-md shadow-xl z-20">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit
                                    Profil</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                                <div class="border-t border-gray-100"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 mt-16">
                <div class="container mx-auto px-6 py-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

</body>

</html>
