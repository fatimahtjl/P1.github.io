<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?= base_url(); ?>https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css"
        rel="stylesheet" />
    <title>Usporty</title>

<body>
    <!-- Navbar -->
    <?= $this->include('templates/navbar'); ?>
    <!-- End of Navbar -->

    <!-- CONTENT 1 -->
    <section
        class="relative bg-[url(https://img.freepik.com/free-photo/woman-enjoying-her-financially-independence-while-buying-car_23-2149434358.jpg?t=st=1735176050~exp=1735179650~hmac=a60c32c2daef5e276d334848c9f8cd0a77edd800134c3b9660e38835c4f323ab&w=900)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 sm:bg-gradient-to-r sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-start ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Ayo cari mobil sesuai keinginan kamu 🚗

                    <strong class="block font-extrabold text-rose-500"> Lets go! </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                    Selamat datang di website kami, kami menyediakan berbagai jenis mobil yang sesuai dengan keinginan
                    kamu.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="<?= base_url('menu');?>"
                        class="block w-full rounded bg-gray-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
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
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Trusted by eCommerce Businesses</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
                provident impedit esse recusandae facere libero harum sequi.
            </p>
        </div>

        <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Downloads</dt>

                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86k</dd>
            </div>
        </dl>
    </div>
    <!-- CONTETN 2 END -->

    <!-- CONTENT 3 -->
    <h1 class="m-5 text-4xl font-bold " aria-label="Global">Informasi Terbaru</h1>
    <div class="flex justify-center content-center max-sm:flex-wrap">

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">How to position your furniture for positivity</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                        atque dignissimos. Molestias explicabo corporis voluptatem?
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">How to position your furniture for positivity</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                        atque dignissimos. Molestias explicabo corporis voluptatem?
                    </p>
                </div>
            </div>
        </article>

        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg m-5">
            <img alt=""
                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                class="absolute inset-0 h-full w-full object-cover" />

            <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                <div class="p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022 </time>

                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-white">How to position your furniture for positivity</h3>
                    </a>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                        atque dignissimos. Molestias explicabo corporis voluptatem?
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
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

                <p class="mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
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
    <section class="bg-gray-50">
        <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
            <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
                <h2 class="max-w-xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Read trusted reviews from our customers
                </h2>

                <div class="mt-8 flex gap-4 lg:mt-0">
                    <button aria-label="Previous slide" id="keen-slider-previous"
                        class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <button aria-label="Next slide" id="keen-slider-next"
                        class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                        <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
                <div id="keen-slider" class="keen-slider">
                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                            <div>
                                <div class="flex gap-0.5 text-green-500">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                                <div class="mt-4">
                                    <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        No, Rose, they are not breathing. And they have no arms or legs … Where are
                                        they?
                                        You know what? If we come across somebody with no arms or legs, do we bother
                                        resuscitating them? I mean, what quality of life do we have there?
                                    </p>
                                </div>
                            </div>

                            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                &mdash; Michael Scott
                            </footer>
                        </blockquote>
                    </div>

                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                            <div>
                                <div class="flex gap-0.5 text-green-500">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                                <div class="mt-4">
                                    <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        No, Rose, they are not breathing. And they have no arms or legs … Where are
                                        they?
                                        You know what? If we come across somebody with no arms or legs, do we bother
                                        resuscitating them? I mean, what quality of life do we have there?
                                    </p>
                                </div>
                            </div>

                            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                &mdash; Michael Scott
                            </footer>
                        </blockquote>
                    </div>

                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                            <div>
                                <div class="flex gap-0.5 text-green-500">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                                <div class="mt-4">
                                    <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        No, Rose, they are not breathing. And they have no arms or legs … Where are
                                        they?
                                        You know what? If we come across somebody with no arms or legs, do we bother
                                        resuscitating them? I mean, what quality of life do we have there?
                                    </p>
                                </div>
                            </div>

                            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                &mdash; Michael Scott
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONI END -->
    <!-- MAIN END -->

    <!-- Footer -->
    <?= $this->include('templates/footer'); ?>
    <!-- End of Footer -->

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

        const keenSlider = new KeenSlider(
            '#keen-slider',
            {
                loop: true,
                slides: {
                    origin: 'center',
                    perView: 1.25,
                    spacing: 16,
                },
                breakpoints: {
                    '(min-width: 1024px)': {
                        slides: {
                            origin: 'auto',
                            perView: 2.5,
                            spacing: 32,
                        },
                    },
                },
            },
            []
        )

        const keenSliderPrevious = document.getElementById('keen-slider-previous')
        const keenSliderNext = document.getElementById('keen-slider-next')

        keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
        keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>
</body>

</head>