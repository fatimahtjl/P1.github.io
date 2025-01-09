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
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->
                        
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
                                href="#"> Services </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="#"> Projects </a>
                        </li>

                        <li>
                            <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                                href="<?= base_url('logout') ?>"> Logout </a>
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
                            href="#"> Services </a>
                    </li>
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="#"> Projects </a>
                    </li>
                    <li>
                        <a class="text-white px-3 py-2 rounded transition hover:text-gray-900 hover:bg-gray-300"
                            href="#"> Blog </a>
                    </li>
                </ul>
        </nav>
    </div>
</header>
<!-- NAVBAR END -->