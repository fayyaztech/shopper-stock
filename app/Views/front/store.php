<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Details</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="font-times font-medium">
    
    <div class="bg-gray-50 text-center">
        <div class="rounded-b-2xl bg-teal-600 px-4 pt-6 pb-4 text-white w-full">
            <h1 id="top" class="mb-2 `md:text-4xl text-3xl font-extrabold">
                Welcome to
            </h1>
            <span class="md:text-4xl text-3xl font-extrabold text-yellow-300 border-b-4 border-white border-double">
                    Hanfis Collection
                </span>
            <p id="store-type" class=" text-md mt-2">
                Mobiles and accessories store.
            </p>
            <div class="my-6">
                <input type="text" name="search" id="search" class="py-3 px-5 text-black rounded-full w-full border-2 border-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-400" placeholder="Start Your Search Here">
            </div>
        </div>
        <div class="p-3">
            <div class="image-slider mt-4 relative">
                <p class="text-left font-bold text-lg mb-3 text-rose-600 underline animate-pulse">What's New...!!!</p>
                <div class="relative w-full h-56">
                    <!-- Images with overlay -->
                    <div class="absolute inset-0 transition-opacity duration-1000">
                        <img src="/images/logos/mobiles.png" alt="Product Image 1" class="w-full h-56 rounded-lg">
                        <div class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Apple 16 Pro</span>
                        </div>
                    </div>

                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                        <img src="/images/logos/electronics.png" alt="Product Image 2" class="w-full h-56 rounded-lg">
                        <div class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">New Trimmer</span>
                        </div>
                    </div>

                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                        <img src="/images/logos/mobiles.png" alt="Product Image 3" class="w-full h-56 rounded-lg">
                        <div class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Moto Edge 50 Fusion</span>
                        </div>
                    </div>
                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                        <img src="/images/logos/mobiles.png" alt="Product Image 3" class="w-full h-56 rounded-lg">
                        <div class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">DSLR Camera</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-lg text-left font-bold">
                    About Hanfis Collection
                </h2>
                <p class="text-left text-sm text-gray-600 font-medium">
                    Hanfis Collection is a mobile and accessories store located in Nirala Bazaar, Aurangabad. We have a wide range of mobiles and accessories available at the best prices. We also provide purchase on loans and easy installments through finance companies/banks.
                </p>
            </div>
            <div class="my-6 bg-sky-100 flex flex-col p-2 rounded-lg">

                <h2 id="products" class="text-2xl text-left font-bold">Products</h2>
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <!-- Store cards -->
                    <div class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img src="/images/logos/mobiles.png" alt="Store 1" class="w-full h-full object-cover">
                        <a href="/products.html">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                                <span class="text-white text-lg font-semibold">
                                    Mobiles
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img src="/images/logos/electronics.png" alt="Store 2" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                            <span class="text-white text-lg font-semibold">Mobile Accessories</span>
                        </div>
                    </div>

                    <div class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img src="/images/logos/home.png" alt="Store 3" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                            <span class="text-white text-lg font-semibold">Electronics</span>
                        </div>
                    </div>

                    <div class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img src="/images/logos/clothing.png" alt="Store 4" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                            <span class="text-white text-lg font-semibold">Others</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-lg text-left font-bold">
                    Store Hours
                </h2>
                <div>
                    <ul class="text-left text-sm text-gray-600 font-medium flex flex-row justify-evenly gap-2">
                        <li>
                            <span class="font-semibold text-lg text-gray-600">Monday - Sunday</span>
                        </li>
                        <li>
                            <span class="font-semibold text-lg text-gray-600">11:00 AM - 10:30 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="help" class="my-6 flex flex-col gap-2">
                <h2 class="text-lg text-left font-bold">
                    Contact Details
                </h2>
                <p class="text-left text-sm text-gray-600 font-medium">
                    <i class="fa-solid fa-phone-alt text-rose-600"></i> 0240-2345678
                </p>
                <p class="text-left text-sm text-gray-600 font-medium">
                    <i class="fa-solid fa-envelope text-rose-600"></i>
                </p>
                <p class="text-left text-sm text-gray-600 font-medium">
                    <i class="fa-brands fa-internet-explorer text-rose-600"></i> Nirala Bazaar, Aurangabad
                </p>
                <p class="text-left text-sm text-gray-600 font-medium">
                    <i class="fa-solid fa-map-marker-alt text-rose-600 mb-2"></i> Nirala Bazaar, Aurangabad
                </p>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.235724751792!2d75.32252017506119!3d19.8810214814964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb999811d84def%3A0xd7d9369dfa54bb83!2sHanfis%20Collection!5e1!3m2!1sen!2sin!4v1738654024223!5m2!1sen!2sin"
                        title="google location" class="h-400 w-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <h1 class="m-2 text-center from-neutral-100 font-extrabold text-xl text-[#F44164] bg-yellow-100 ring-2">
            Thanks for visiting Hanfis Collection
        </h1>
    </div>

    <!-- footer starts here -->

    <div id="footer" class="w-full bg-teal-600 h-20 flex justify-around content-center place-items-center sticky bottom-0 rounded-t-3xl">
        <a href="#" target="_top" class="text-white text-center">
            <i class="fa-solid fa-house text-white font-extrabold text-5xl"></i> <br>Home
        </a>
        <a href="#products" class="text-white text-center">
            <i class="fa-solid fa-list text-white font-extrabold text-5xl"></i>
            <br> Products
        </a>
        <a href="#help" class="text-white text-center">
            <i class="fa-solid fa-circle-info text-white font-extrabold text-5xl"></i>
            <br> Help
        </a>
    </div>

    <!-- footer ends here -->

</body>

</html>
<script src="/js/script.js"></script>