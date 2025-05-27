<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJA PKL</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a href="#" class="bg-blue-700 transition-colors hover:bg-white text-white hover:text-blue-700 py-2 px-2 rounded-md block">
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
                <a href="#" class="bg-blue-700 hover:bg-white transition-colors text-white hover:text-blue-700 py-3 px-7 rounded-md mr-4 mt-1 inline-block text-lg">Get Started</a>
            </div>
            <div class="flex justify-center md:justify-end">
                <!-- [Perubahan 2]: Memperbaiki path gambar -->
                <!-- Fungsi: Menggunakan path relatif untuk memastikan gambar dapat ditemukan saat dijalankan secara lokal -->
                <img src="/img/welcome-image.jpg" alt="SIJA PKL Image" class="max-w-full h-auto rounded-lg shadow-md md:translate-x-28">
            </div>  
        </div>
    </header>
    
    <section class="dark:bg-gray-800 text-center">
        <div class="max-w-6xl mx-auto px-7 py-10">
            <div class="mb-14">
                <p class="text-white text-lg">Features</p>
                <h1 class="font-bold text-4xl">Our Special Features</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray rounded-xl py-6 px-4 border border-white hover:border-blue-600 transition-colors border-4">
                    <div class="bg-blue-200 text-gray-800 w-16 h-16 rounded-md mx-auto flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-globe"></i>
                    </div>
                    <h2 class="font-bold text-2xl my-3 text-white-800">Kemudahan Akses</h2>
                    <p class="max-w-md mx-auto text-gray-400">Siswa dapat mendaftar PKL secara digital, memilih instansi, dan mengirim pengajuan tanpa perlu formulir manual.</p>
                </div>
                <div class="bg-gray rounded-xl py-6 px-4 border border-white hover:border-blue-600 transition-colors border-4">
                    <div class="bg-blue-200 text-gray-800 w-16 h-16 rounded-md mx-auto flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-eye"></i>
                    </div>
                    <h2 class="font-bold text-2xl my-3 text-white-800">Monitoring</h2>
                    <p class="max-w-md mx-auto text-gray-400 md:pt-8">Guru dan pembimbing dapat memantau kegiatan melalui sistem secara real-time.</p>
                </div>
                <div class="bg-gray rounded-xl py-6 px-4 border border-white hover:border-blue-600 transition-colors border-4">
                    <div class="bg-blue-200 text-gray-800 w-16 h-16 rounded-md mx-auto flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-industry"></i>                    
                    </div>
                    <h2 class="font-bold text-2xl my-3 text-white-800">Data Instansi Mitra</h2>
                    <p class="max-w-md mx-auto text-gray-400 ">Direktori instansi lengkap dengan profil dan kontak untuk membantu siswa memilih tempat PKL yang sesuai.</p>
                </div>
                <div class="bg-gray rounded-xl py-6 px-4 border border-white hover:border-blue-600 transition-colors border-4">
                    <div class="bg-blue-200 text-gray-800 w-16 h-16 rounded-md mx-auto flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-file"></i>
                    </div>
                    <h2 class="font-bold text-2xl my-3 text-white-800">Laporan Otomatis</h2>
                    <p class="max-w-md mx-auto text-gray-400 ">Aktivitas dan penilaian siswa direkap otomatis menjadi laporan akhir yang siap digunakan sekolah.</p>
                </div>
            </div>     
        </div>
    </section>

    <section class="bg-gray">
        <div class="max-w-6xl mx-auto px-7 py-10">
            <div class="mb-14 text-center">
                    <p class="text-gray-500 text-lg">Mitra</p>
                    <h1 class="font-bold text-4xl">Our Mitra</h1>                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                <div class="border border-gray-200 hover:border-4 rounded-lg p-4 transition-all duration-100 ease-in-out">
                    <img src="/img/gama.jpg" class="w-full h-32 object-cover object-center rounded-md" alt="">
                    <p class="md:pt-2 text-gray-400 text-lg">Technology</p>
                    <h2 class="text-2xl font-bold my-2">PT Gamatechno</h2>
                    <a href="#" class="flex justify-start items-center gap-4 hover:text-blue-600 transition-colos mb-2"><span class="font-bold">Website</span> <i class="fas fa-arrow-right text-blue-600"></i> </a>
                </div>
                <div class="border border-gray-200 hover:border-4 rounded-lg p-4 transition-all duration-100 ease-in-out">
                    <img src="/img/Profil-CV-KHS.jpg" class="w-full h-32 object-cover object-center rounded-md" alt="">
                    <p class="md:pt-2 text-gray-400 text-lg">Technology</p>
                    <h2 class="text-2xl font-bold my-2">CV KHS Quick Tractor</h2>
                    <a href="#" class="flex justify-start items-center gap-4 hover:text-blue-600 transition-colos mb-2"><span class="font-bold">Website</span> <i class="fas fa-arrow-right text-blue-600"></i> </a>
                </div>
                <div class="border border-gray-200 hover:border-4 rounded-lg p-4 transition-all duration-100 ease-in-out">
                    <img src="/img/images.png" class="w-full h-32 object-cover object-center rounded-md" alt="">
                    <p class="md:pt-2 text-gray-400 text-lg">Technology</p>
                    <h2 class="text-2xl font-bold my-2">Botika</h2>
                    <a href="#" class="flex justify-start items-center gap-4 hover:text-blue-600 transition-colos mb-2 md:pt-8"><span class="font-bold">Website</span> <i class="fas fa-arrow-right text-blue-600"></i> </a>
                </div>
                <div class="border border-gray-200 hover:border-4 rounded-lg p-4 transition-all duration-100 ease-in-out">
                    <img src="/img/multi.png" class="w-full h-32 object-cover object-center rounded-md" alt="">
                    <p class="md:pt-2 text-gray-400 text-lg">Technology</p>
                    <h2 class="text-2xl font-bold my-2">PT Multiintegra</h2>
                    <a href="#" class="flex justify-start items-center gap-4 hover:text-blue-600 transition-colos mb-2"><span class="font-bold">Website</span> <i class="fas fa-arrow-right text-blue-600"></i> </a>
                </div>
                <div class="border border-gray-200 hover:border-4 rounded-lg p-4 transition-all duration-100 ease-in-out">
                    <img src="/img/aqsa.png" class="w-full h-32 object-cover object-center rounded-md" alt="">
                    <p class="md:pt-2 text-gray-400 text-lg">Technology</p>
                    <h2 class="text-2xl font-bold my-2">PT Aksa Digital Group</h2>
                    <a href="#" class="flex justify-start items-center gap-4 hover:text-blue-600 transition-colos mb-2"><span class="font-bold">Website</span> <i class="fas fa-arrow-right text-blue-600"></i> </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="dark:bg-gray-800 text-white">
        <div class="max-w-6xl mx-auto px-7 py-10 grid grid-cols-1 md:grid-cols2 lg:grid-cols-4 gap-12 lg:justify-items-center">
            <div>
                <h1 class="font-bold text-3xl">Lorem Ipsum</h1>
                <p class="my-4 text-slate-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit est enim quas facere eius quam, sed, repellendus vero accusantium dolore voluptas nulla tempora eaque voluptate?</p>
                <div class="flex justify-start items-center gap-3">
                <a href="#" class="w-12 h-12 bg-white text-black text-2xl rounded-xl flex justify-center items-center"><i class="fab fa-facebook-f"></i></a>    
                <a href="#" class="w-12 h-12 bg-white text-black text-2xl rounded-xl flex justify-center items-center"><i class="fab fa-linkedin"></i></a>    
                <a href="#" class="w-12 h-12 bg-white text-black text-2xl rounded-xl flex justify-center items-center"><i class="fab fa-instagram"></i></a>    
                </div>
            </div>
            <div class="text-slate-400 flex flex-col gap-3">
                <h2 class="font-bold text-2xl text-white">About</h2>
                <a href="#">About Us</a>
                <a href="#">Features</a>
                <a href="#">Mitra</a>
            </div>
            <div class="text-slate-400 flex flex-col gap-3">
                <h2 class="font-bold text-2xl text-white">Support Us</h2>
                <a href="#">FAQs</a>
                <a href="#">Contact Us</a>
                <a href="#">Support Center</a>
                <a href="#">Security</a>
            </div>
            <div class="text-slate-400 flex flex-col gap-3">
                <h2 class="font-bold text-2xl text-white">Partners</h2>
                <a href="#">SIJA</a>
                <a href="#">Stembayo</a>
            </div>

        </div>

    </footer>
   
    <!-- JavaScript untuk Toggle Menu -->
    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('h-0');
            navbarMenu.classList.toggle('h-80');
        });
    </script>
</body>
</html>