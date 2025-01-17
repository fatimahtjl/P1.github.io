<!-- NAVBAR -->
<header class="bg-gray-700 sticky top-0 z-50">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="block text-white" href="#">
                    <span class="sr-only">Home</span>
                    <h3 class="text-xl">UgiSport</h3>
                </a>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="#"> About </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="#"> Careers </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="#"> History </a>
                        </li>

                        <li>
                            <a class="rounded-md bg-gray-500 px-5 py-2.5 text-sm font-medium text-gray-100 hover:bg-white hover:text-gray-600 shadow"
                                href="<?= base_url('login') ?>">
                                Login
                            </a>
                        </li>

                        <li>
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-500 hover:text-gray-100 shadow"
                                href="<?= base_url('register') ?>">
                                Register
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="block md:hidden" id="menu-toggle">
                    <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden">
        <nav aria-label="Global">
            <div class="flex items-center gap-4">
                <ul class="flex flex-col items-start gap-4 text-sm bg-gray-700 p-4">
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="#"> About </a>
                    </li>
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="#"> Careers </a>
                    </li>
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="#"> History </a>
                    </li>

                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="<?= base_url('logout') ?>"> Logout </a>
                    </li>

                    <li>
                        <div class="sm:hidden py-5">
                            <a class="rounded-md bg-gray-500 px-5 py-2.5 text-sm font-medium text-gray-100 hover:bg-white hover:text-gray-600 shadow"
                                href="<?= base_url('login') ?>">
                                Login
                            </a>
                        </div>

                        <div class="sm:hidden py-5">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-500 hover:text-gray-100 shadow"
                                href="<?= base_url('register') ?>">
                                Register
                            </a>
                        </div>
                    </li>
                </ul>
        </nav>
    </div>
</header>
<!-- NAVBAR END -->