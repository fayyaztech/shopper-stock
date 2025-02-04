<?php $this->extend('front/layout') ?>
<?php $this->section('body') ?>
<div class="bg-gray-50 text-center">
    <div class="rounded-b-2xl bg-teal-600 px-4 pt-6 pb-4 text-white">
        <h1 class="md:text-4xl text-3xl font-extrabold">
            Welcome to Shopper Stock
        </h1>
        <p class="text-md mt-2">
            Your ultimate inventory management system.
        </p>
        <div class="my-6">
            <input type="text" name="search" id="search"
                class="py-3 px-5 rounded-full w-full border-2 border-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-400"
                placeholder="Start Your Search Here">
        </div>
    </div>
    <div class="p-3">
        <div class="image-slider mt-4 relative">
            <p class="text-left font-bold text-lg mb-3">Newly Registered Stores</p>
            <div class="relative w-full h-56">
                <!-- Images with overlay -->
                <div class="absolute inset-0 transition-opacity duration-1000">
                    <img src="/images/stores/1.jpg" alt="Product Image 1" class="w-full h-56 rounded-lg">
                    <div
                        class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                        <span class="text-white text-xl font-semibold">Android Mobile Store</span>
                    </div>
                </div>

                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="/images/stores/2.jpg" alt="Product Image 2" class="w-full h-56 rounded-lg">
                    <div
                        class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                        <span class="text-white text-xl font-semibold">Tech World</span>
                    </div>
                </div>

                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="/images/stores/3.jpg" alt="Product Image 3" class="w-full h-56 rounded-lg">
                    <div
                        class="absolute bottom-0 bg-gradient-to-t from-black via-black/50 to-transparent rounded-lg h-14 w-full flex items-center justify-center">
                        <span class="text-white text-xl font-semibold">Janta Kirana</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- stores starts here -->

        <div class="my-6 bg-sky-100 flex flex-col">
            <h2 class="text-2xl text-left font-bold">All Stores</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <!-- Store cards -->
                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/stores/4.jpg" alt="Store 1" class="w-full h-full object-cover">
                    <a href="/shop-details.html">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-center justify-center">
                            <span class="text-white text-lg font-semibold">Mobile Galaxy</span>
                        </div>
                    </a>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/stores/5.jpg" alt="Store 2" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Gadget Zone</span>
                    </div>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/stores/6.jpg" alt="Store 3" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Smart Tech</span>
                    </div>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/stores/1.jpg" alt="Store 4" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Device Hub</span>
                    </div>
                </div>
            </div>
            <a href="/shops-categories.html"
                class="bg-rose-600 w-40 m-5 p-1 rounded-l-none rounded-r-full font-semibold text-xl self-end">
                See All
            </a>
        </div>

        <!-- stores ends here -->

        <!-- shop categories start here -->

        <div class="my-6 bg-sky-100 flex flex-col">
            <h2 class="text-2xl text-left font-bold">Stores Categories</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <!-- Store cards -->
                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/logos/mobiles.png" alt="Store 1" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                        <span class="text-white text-lg font-semibold">Mobile Stores</span>
                    </div>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/logos/electronics.png" alt="Store 2" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                        <span class="text-white text-lg font-semibold">Electronics Stores</span>
                    </div>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/logos/home.png" alt="Store 3" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                        <span class="text-white text-lg font-semibold">Home Fusnishing</span>
                    </div>
                </div>

                <div
                    class="rounded-lg shadow-lg overflow-hidden relative h-36 hover:scale-105 hover:shadow-xl transition-transform duration-300">
                    <img src="/images/logos/clothing.png" alt="Store 4" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent flex items-end justify-center">
                        <span class="text-white text-lg font-semibold">Clothing</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- shop-categories end here -->
        <!-- offers starts here -->

        <div class="my-6 bg-sky-100">
            <h2 class="text-2xl text-left font-bold">Offers</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
            </div>
        </div>

        <!-- offers ends here -->

    </div>
</div>
<!-- footer starts here -->

<div id="footer"
    class="w-full bg-teal-600 h-20 flex justify-around content-center place-items-center sticky bottom-0 rounded-t-3xl">
    <a href="#">
        <i class="fa-solid fa-house text-white font-extrabold text-5xl"></i>
    </a>
    <a href="#">
        <i class="fa-solid fa-list text-white font-extrabold text-5xl"></i>
    </a>
    <a href="/login">
        <i class="fa-solid fa-user-tie text-white font-extrabold text-5xl"></i>
    </a>
    <a href="#">
        <i class="fa-solid fa-circle-info text-white font-extrabold text-5xl"></i>
    </a>
</div>
<!-- footer ends here -->
<?php $this->endSection() ?>
<?= $this->section('title') ?>Home<?php echo $this->endSection() ?>;