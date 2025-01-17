<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="<?= base_url(); ?>https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css"
        rel="stylesheet" />
    <title>Usporty</title>

<body>
    <!-- Navbar -->
    <?= $this->include('templates/navdash'); ?>
    <!-- End of Navbar -->

    <!-- CONTENT 1 -->
    <section
        class="relative bg-[url(https://img.freepik.com/free-photo/representation-user-experience-interface-design_23-2150169860.jpg?t=st=1736996131~exp=1736999731~hmac=4a03caa9be6aaef0a9b6b14c32412ef2633517ed7f88b0a917a137f6ebe61910&w=900)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 sm:bg-gradient-to-r sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-start ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Ayo cari UI sesuai selera Kamu di UIpiece!🎉🎉

                    <strong class="block font-extrabold text-rose-500"> Lets go! </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                    Selamat datang di website kami, kami menyediakan berbagai jenis tampilan UI yang sesuai dengan
                    keinginan
                    kamu.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="<?= base_url('menu'); ?>"
                        class="block w-full rounded bg-gray-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                        Ayo Cari!
                    </a>

                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-gray-900 shadow hover:text-gray-600 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Liat Promo
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT 1 END -->

    <!-- CONTENT 2 -->
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Sudah banyak orang yang memakai design UI dari
                kami.</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                UI Design milik kami bukanlah design BIASA.Design yang kami tawarkan sudah pasti
                akan menarik banyak pengunjung menuju Website Anda.
            </p>
        </div>

        <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Penjualan</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">Rp 1jt</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Templates</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100+</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Rating Kepuasan</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">4.5/5.0</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Penggunaan UI</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100+</dd>
            </div>
        </dl>
    </div>
    <!-- CONTETN 2 END -->

    <!-- CONTENT 3 -->
    <h1 class="m-5 text-4xl font-bold " aria-label="Global">INFORMASI TERBARU!!</h1>
    <div class="flex justify-center content-center max-sm:flex-wrap">

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-photo/vertical-banners-sales-promo_23-2150653391.jpg?t=st=1736996592~exp=1737000192~hmac=b13316380c37971898fe928a0bb773916dd3321cd9b61150de14cc96de1c54ef&w=360"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 1st Jan 2025 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">Promo Awal Tahun!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Jangan lewatkan promo awal tahun! Semua produk kami diskon 50%. Segera dapatkan barang impian
                        Anda dengan harga setengah. Belanja sekarang sebelum kehabisan! 🎉🛍️✨
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-vector/abstract-new-arrival-composition-with-flat-design_23-2147884713.jpg?t=st=1736996913~exp=1737000513~hmac=04123066aa060ff2c859fe59e021aad9e5137a0ccdc60b30fc88a66550c7d66c&w=740"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 1st Jan 2025 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">New Product!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Kenalkan produk terbaru kami yang canggih dan penuh gaya! Desain elegan dan teknologi mutakhir
                        untuk pengalaman pengguna maksimal. Segera miliki dan nikmati keunggulannya sekarang juga! 🚀✨
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://img.freepik.com/free-photo/numbers-kit-black-friday-sign-with-shopping-bag_23-2147930788.jpg?t=st=1736997106~exp=1737000706~hmac=5e18070fb444ee4666c4950965d2b60a5185f8e22b7fd8d4a20589ad8dc5dd93&w=360"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 6th Jan 2025 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">Black Friday Sale!</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Siap-siap untuk Black Friday Sale kami! Diskon hingga 50% untuk semua produk favorit Anda.
                        Jangan lewatkan kesempatan ini untuk belanja hemat. Segera mulai belanja sekarang! 🛍️🔥
                    </p>
                </div>
            </div>
        </article>
    </div>
    <!-- CONTENT 3 END -->

    <!-- CONTENT 4 -->
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">PRODUK TERBARU</h2>

                <p class="mt-4 max-w-md text-gray-500">
                    Kenalkan desain UI terbaru kami yang modern dan intuitif! Tingkatkan pengalaman pengguna dengan
                    tampilan elegan dan fungsionalitas cerdas. 🚀✨
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://img.freepik.com/free-vector/smart-home-management-application_23-2148627768.jpg?t=st=1736394213~exp=1736397813~hmac=3a3a0018fe2bd7f5acb64885918ab53b1f50320970c049c23a287190157d70fd&w=900"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- CONTENT 4 END -->

    <!-- TESTIMONI -->
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Pengalaman Luar Biasa dengan Produk Kami!
            </h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>
            </div>
        </div>
    </section>
    <!-- TESTIMONI END -->
    <!-- MAIN END -->

    <!-- Footer -->
    <?= $this->include('templates/footer'); ?>
    <!-- End of Footer -->

    <script>
        // Navbar
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</head>