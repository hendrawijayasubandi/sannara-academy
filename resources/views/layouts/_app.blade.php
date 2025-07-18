<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sannara Academy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header class="bg-frosty-white font-heading absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4 lg:px-8">
                <!-- Logo -->
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                            alt="" class="h-8 w-auto" />
                    </a>
                </div>
                <!-- Tombol menu untuk mobile -->
                <div class="flex lg:hidden">
                    <button id="openMenu" type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <!-- Menu desktop: semua link di kanan -->
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <div class="flex items-center gap-x-8">
                        <a href="#" class="text-base font-semibold text-gray-900">Home</a>
                        <a href="#" class="text-base font-semibold text-gray-900">Program List</a>
                        <a href="#" class="text-base font-semibold text-gray-900">About Us</a>
                        <a href="#"
                            class="text-base font-semibold text-white bg-primary hover:bg-white hover:text-primary border border-primary px-4 py-2 rounded-md transition">
                            Book Now!
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div id="mobileMenu"
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 
                transform transition-transform duration-300 translate-x-full lg:hidden">
                <!-- Background backdrop -->
                <div class="fixed inset-0 z-40 bg-black/20"></div>

                <!-- Sidebar menu mobile -->
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-frosty-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                alt="" class="h-8 w-auto" />
                        </a>
                        <button id="closeMenu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Program
                                    List</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">About
                                    Us</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="block w-full text-center rounded-md bg-primary text-white hover:bg-white hover:text-primary border border-primary px-4 py-2.5 text-base font-semibold transition">
                                    Book Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="bg-frosty-white font-heading font-bold text-center text-primary text-md py-4">
            Sannara &copy; 2025 All Right Reserved
        </footer>
    </div>
    <script>
        const openBtn = document.getElementById('openMenu');
        const closeBtn = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        openBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenu.classList.add('translate-x-0');
        });

        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
        });
    </script>
</body>

</html>
