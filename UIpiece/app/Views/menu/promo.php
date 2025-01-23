<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo - Tidak Ada Promo Saat Ini</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- NAVBAR -->
    <?= $this->include('templates/navbar'); ?>

    <!-- Main Content -->
    <main class="py-16 px-8 lg:px-16">
        <!-- Flexbox Layout -->
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Left Section -->
            <div class="flex-1 lg:pr-12 mb-12 lg:mb-0">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-6">Belum Ada Promo Aktif Saat Ini</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Kami sangat senang dapat memberikan promo terbaik untuk desain UI Anda. Namun, saat ini belum ada
                    promo aktif yang tersedia. Tim kami sedang menyiapkan penawaran menarik yang akan segera hadir.
                </p>
                <a href="/"
                    class="inline-block bg-gray-800 text-white py-3 px-8 rounded-lg shadow-md hover:bg-yellow-400 transition">
                    Kembali ke Beranda
                </a>
            </div>

            <!-- Right Section -->
            <div class="flex-1 flex justify-center">
                <img src="https://img.freepik.com/free-photo/sales-off-cyber-monday-concept_23-2148670065.jpg?t=st=1737547154~exp=1737550754~hmac=f93689115a23468ff33ba19f9491a607aefb721802fe258fcf54454d1d8eba70&w=900"
                    alt="" class="h-auto rounded-md shadow-lg">
            </div>
        </div>

        <!-- Upcoming Promos Section -->
        <section class="mt-16">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Desain UI yang Akan Datang</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Promo Card 1 -->
                <div class="bg-red-500 text-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h4 class="text-2xl font-bold mb-2">Landing Page Kreatif</h4>
                        <p class="text-sm mb-4">Dapatkan desain landing page yang memukau dengan diskon khusus. Segera
                            hadir!</p>
                    </div>
                </div>

                <!-- Promo Card 2 -->
                <div class="bg-blue-500 text-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h4 class="text-2xl font-bold mb-2">Dashboard Admin Profesional</h4>
                        <p class="text-sm mb-4">Promo spesial untuk template dashboard admin modern. Jangan lewatkan!
                        </p>
                    </div>
                </div>

                <!-- Promo Card 3 -->
                <div class="bg-green-500 text-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h4 class="text-2xl font-bold mb-2">Mobile App Interface</h4>
                        <p class="text-sm mb-4">Diskon hingga 70% untuk desain UI aplikasi mobile yang inovatif. Segera
                            hadir!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?= $this->include('templates/footer') ?>

</body>

</html>