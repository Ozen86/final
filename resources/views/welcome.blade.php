<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJA Kerja - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
            theme: {
                extend: {
                    colors: {
                        primary: '#1E40AF',
                        secondary: '#6B7280',
                    },
                    fontFamily: {
                        poppins: ['Poppins', sans-serif],
                    },
                    spacing: {
                        '25': '100px',
                    },
                },
            },
        };
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <!-- Navbar -->
    <nav class="fixed w-full bg-white dark:bg-gray-800 drop-shadow-md z-50">
        <!-- [Perubahan 1]: Mengurangi padding horizontal dan mengganti max-w-6xl dengan max-w-7xl -->
        <!-- Fungsi: Mengurangi padding horizontal dari p-7 (28px) menjadi px-4 (16px) untuk mendekatkan elemen ke tepi, dan mengubah max-w-6xl (1152px) menjadi max-w-7xl (1280px) untuk memperlebar container -->
        <div class="max-w-7xl mx-auto flex justify-between pt-4 pb-4 items-center px-4">
            <a href="/" class="font-bold text-3xl text-black dark:text-white">SIJA PKL</a>
            <button id="navbar-toggle" class="md:hidden text-gray-600 dark:text-gray-300 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <!-- [Perubahan 2]: Menyesuaikan padding pada menu -->
            <!-- Fungsi: Mengurangi padding horizontal pada menu hamburger dengan px-4 (16px) agar lebih dekat ke tepi saat dibuka -->
            <ul id="navbar-menu" class="bg-white dark:bg-gray-800 flex justify-between items-center flex-col gap-5 text-gray-400 absolute overflow-y-scroll w-full left-0 top-20 px-4 transition-all duration-500 ease-out h-0 md:static md:flex-row md:h-auto md:top-auto md:overflow-auto md:justify-center md:w-fit">
                <li><a href="Home" class="hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a></li>
                <li><a href="About" class="hover:text-blue-600 dark:hover:text-blue-400 transition">About</a></li>
                <li><a href="How To" class="hover:text-blue-600 dark:hover:text-blue-400 transition">How To</a></li>
                <li><a href="Contact" class="hover:text-blue-600 dark:hover:text-blue-400 transition">Contact</a></li>
                <li>
                    <a href="#" class="bg-blue-700 transition-colors hover:bg-blue-800 text-white py-2 px-2 rounded-md block">
                        Sign in
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- [Perubahan 3]: Memindahkan text "Selamat Datang" ke kiri -->
    <!-- Fungsi: Menghapus justify-center dari <header> dan mx-auto dari <div>, serta menambahkan ml-0 untuk memastikan teks berada di sisi kiri -->
    <header class="min-h-screen flex items-start pt-[100px] pb-7">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center max-w-7xl px-4 ml-0 md:pl-36">
            <div class="mb-10 md:mb-10">
                <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                    Selamat Datang <br>
                    Di <span class="font-bold">Web</span> SIJA PKL
                </h1>
                <p class="mb-5 mt-7 max-w-md text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit quisquam voluptate nulla iure, autem nam praesentium deserunt quaerat veniam in optio? Officiis, dolore. Ducimus hic deserunt placeat commodi reiciendis et?</p>
                <a href="#" class="bg-blue-700 hover:bg-blue-800 transition-colors text-white py-3 px-7 rounder-md mr-4 mt-1 inline-block text-lg">Get Started</a>
            </div>
            <div class="flex justify-center md:justify-end">
                <!-- [Perubahan 2]: Memperbaiki path gambar -->
                <!-- Fungsi: Menggunakan path relatif untuk memastikan gambar dapat ditemukan saat dijalankan secara lokal -->
                <img src="/img/welcome-image.jpg" alt="SIJA PKL Image" class="max-w-full h-auto rounded-lg shadow-md md:translate-x-28">
            </div>  
        </div>
    </header>

    <!-- JavaScript untuk Toggle Menu -->
    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('h-0');
            navbarMenu.classList.toggle('h-64');
        });
    </script>
</body>
</html>