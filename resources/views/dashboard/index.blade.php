<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class = "bg-black">
    <nav class="bg-gray-800 text-white relative w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle w-8 h-8 flex justify-center items-center text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                    aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
                <a class="font-medium text-blue-600 md:py-6 dark:text-blue-500" href="#"
                    aria-current="page">Landing</a>
                <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                    href="#">Account</a>
                <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                    href="#">Work</a>
                <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                    href="#">Blog</a>

                <div
                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                    <button type="button"
                        class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                        Dropdown
                        <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            About
                        </a>
                        <div
                            class="hs-dropdown relative [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover]">
                            <button type="button"
                                class="flex justify-between w-full items-center text-sm text-gray-800 rounded-lg py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Sub Menu
                                <svg class="md:-rotate-90 ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 md:mt-2 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute md:border before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    About
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    Downloads
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    Team Account
                                </a>
                            </div>
                        </div>

                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            Team Account
                        </a>
                    </div>
                </div>

                <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-s md:border-gray-300 md:my-6 md:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500"
                    href="{{ url('login_admin') }}">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    Log in
                </a>
            </div>
        </div>
    </nav>

    <section class="bg-cover bg-center h-screen relative flex items-center text-white"
        style="background-image: url('https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8M;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Cafe XYZ</h1>
            <p class="text-lg mb-8">Delightful coffee and cozy atmosphere</p>
            <a href="#"
                class="bg-yellow-500 text-gray-900 hover:bg-yellow-400 px-6 py-3 rounded-full text-lg font-semibold transition duration-300">View
                Menu</a>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Photo Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery.jpg" alt="Gallery Image 1"
                        class="w-full h-48 object-cover mb-4 rounded">
                </div>
                <!-- Tambahkan lebih banyak gambar galeri di sini -->
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery2.jpg" alt="Galery Image 2"
                        class="w-full h-48 object-cover mb-4 rounded">
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="/gambar/galery3.jpg" alt="Galery Image 2"
                        class="w-full h-48 object-cover mb-4 rounded">
                </div>
            </div>
    </section>

    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide"> <!-- Menu Item 7 -->
                    <img src="/gambar/latte.jpg">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 7</h3>
                    <p class="text-gray-700 mb-4">Description.</p>
                    <span class="text-yellow-500 font-bold text-lg">$14.99</span>
                </li>
                <li class="glide__slide"> <!-- Menu Item 8 -->
                    <img src="/gambar/caramel latte.jpg">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 8</h3>
                    <p class="text-gray-700 mb-4">Description.</p>
                    <span class="text-yellow-500 font-bold text-lg">$16.99</span>
                </li>
                <!-- Tambahkan lebih banyak item menu di sini sesuai kebutuhan -->
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Menu</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item1.jpg" alt="Menu Item 1" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 1</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 1.</p>
                    <span class="text-yellow-500 font-bold text-lg">$10.99</span>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item2.jpg" alt="Menu Item 2" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 2</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 2.</p>
                    <span class="text-yellow-500 font-bold text-lg">$12.99</span>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item3.jpg" alt="Menu Item 3" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 3</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 3.</p>
                    <span class="text-yellow-500 font-bold text-lg">$9.99</span>
                </div>

                <!-- Menu Item 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item4.jpg" alt="Menu Item 4" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 4</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 4.</p>
                    <span class="text-yellow-500 font-bold text-lg">$11.99</span>
                </div>

                <!-- Menu Item 5 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item5.jpg" alt="Menu Item 5" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 5</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 5.</p>
                    <span class="text-yellow-500 font-bold text-lg">$13.99</span>
                </div>

                <!-- Menu Item 6 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="menu_item6.jpg" alt="Menu Item 6" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Menu Item 6</h3>
                    <p class="text-gray-700 mb-4">Description of Menu Item 6.</p>
                    <span class="text-yellow-500 font-bold text-lg">$8.99</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">About Us</h2>
            <p class="text-lg mb-8">Follow us on social media:</p>

            <div class="flex justify-center mb-6">
                <!-- Instagram -->
                <a href="https://www.instagram.com/your_instagram" class="mr-6">
                    <img src="/gambar/instagram.png" alt="Instagram" class="w-8 h-8">
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/your_whatsapp_number" class="mr-6">
                    <img src="/gambar/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/your_twitter" class="mr-6">
                    <img src="/gambar/Twitter.png" alt="Twitter" class="w-8 h-8">
                </a>
            </div>

            <p class="text-lg">Kami percaya bahwa kopi bukan sekadar minuman, tapi sebuah pengalaman. Dengan
                biji-biji terbaik dan proses roasting yang hati-hati, kami memberikan Anda sebuah cangkir kopi
                yang mengajak Anda menjelajahi dunia rasa yang luar biasa.</p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <!-- Add contact form or information here -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8 text-white text-center">
        <div class="container mx-auto">
            &copy; 2023 Cafe XYZ. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../../node_modules/preline/dist/preline.js"></script>
    <script>
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            focusAt: 'center',
            breakpoints: {
                768: {
                    perView: 1
                }
            }
        }).mount();
    </script>
</body>

</html>
