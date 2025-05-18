<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarProperty.id</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">

    <!-- Header -->
<header class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/komplek-perumahan.jpg') }}');">
        <div class="absolute inset-0 opacity-30" style="background-color: #FA760A;"></div>
        <div class="relative z-10 p-6 flex flex-col justify-between h-full">
            <!-- Navbar -->
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-28 w-auto md:h-32 lg:h-36 xl:h-40">

                </div>
                <nav class="space-x-6 hidden md:flex text-white">
                    <a href="#about" class="hover:text-orange-400">About</a>
                    <a href="#benefit" class="hover:text-orange-400">Benefit</a>
                    <a href="#testimoni" class="hover:text-orange-400">Testimoni</a>
                    <a href="#contact" class="bg-orange-500 px-4 py-2 rounded text-white">Hubungi</a>
                </nav>
            </div>

            <!-- Hero Text -->
         <div class="h-screen flex items-center">
                <div class="text-white max-w-xl ml-8">
                    <h1 class="text-5xl font-bold">BelajarProperty.id</h1>
                    <p class="mt-4 text-lg">"Di BelajarProperty.id, properti bukan lagi hal yang menakutkan untuk pemula!"</p>
                    <a href="#masuk" class="inline-block mt-6 bg-orange-500 hover:bg-orange-600 px-6 py-3 rounded-lg text-white text-lg font-semibold">
                        Masuk
                    </a>
                </div>
            </div>

        </div>
    </header>

    <!-- Navigasi Section -->
    <section class="flex justify-center space-x-4 py-6 bg-white">
        <button class="px-4 py-2 bg-gray-200 rounded-full">Ragam Materi</button>
        <button class="px-4 py-2 bg-gray-200 rounded-full">Aset Bank</button>
        <button class="px-4 py-2 bg-gray-200 rounded-full">Secondary</button>
        <button class="px-4 py-2 bg-gray-200 rounded-full">Primary</button>
    </section>

    <!-- About Us -->
    <section id="about" class="p-8 bg-white">
        <h2 class="text-2xl font-bold mb-4">About Us</h2>
        <div class="md:flex items-center gap-8">
            <div class="flex-1">
                <p class="mb-4"><strong>BelajarProperty.id</strong> adalah komunitas pembelajaran properti modern khusus generasi muda...</p>
                <p class="mb-4">Kami berbeda karena fokus pada pembelajaran yang aplikatif dan kolaborasi nyata...</p>
                <p><strong>Khusus untuk 100 member pertama</strong>, kami menawarkan harga spesial Rp499.000 (normal Rp999.000)...</p>
            </div>
            <img src="rumah.png" alt="Rumah" class="w-full md:w-1/3 mt-6 md:mt-0">
        </div>
    </section>

    <!-- Benefit Section -->
    <section id="benefit" class="bg-gray-100 py-10 px-4">
        <h2 class="text-2xl font-bold text-center mb-8">Benefit</h2>
        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div class="bg-white p-4 rounded shadow">
                <img src="video-icon.png" alt="Video" class="mx-auto h-12 mb-4">
                <p>Belajar bersama lewat video pelatihan, diskusi, dan webinar</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="kolaborasi-icon.png" alt="Kolaborasi" class="mx-auto h-12 mb-4">
                <p>Kesempatan kolaborasi dengan sesama member lain untuk proyek properti</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <img src="mentor-icon.png" alt="Mentor" class="mx-auto h-12 mb-4">
                <p>Dukungan mentor yang berpengalaman di bidang properti</p>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="bg-orange-500 text-white py-10 px-4">
        <h2 class="text-2xl font-bold text-center mb-8">Testimoni</h2>
        <div class="md:flex justify-between items-center">
            <div class="md:w-2/3">
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="md:w-1/3">
                <img src="testimoni-wanita.png" alt="Testimoni" class="w-full mt-4 md:mt-0">
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-10 px-4 bg-white">
        <h2 class="text-2xl font-bold text-center mb-6">FAQ</h2>
        <div class="space-y-4 max-w-2xl mx-auto">
            <div class="border-b pb-2">Pertanyaan umum 1</div>
            <div class="border-b pb-2">Pertanyaan umum 2</div>
            <div class="border-b pb-2">Pertanyaan umum 3</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6">
        &copy; 2025 BelajarProperty.id
    </footer>

</body>
</html>
