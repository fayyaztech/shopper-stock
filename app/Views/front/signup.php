<?php $this->extend('front/layout') ?>
<?php $this->section('body') ?>
<div class="m-2 p-8 rounded-3xl ring-2">
    <h1
        class="text-center my-4 font-extrabold text-xl text-[#000000] bg-cyan-100 p-1 rounded-xl ring-1 ring-yellow-400">
        Enter Your Details For Registration:
    </h1>

    <form action="/signup" method="post" class="flex flex-col mt-7 w-full justify-stretch content-between gap-3">

        <!-- Customer Name -->
        <div class="flex flex-col my-2 gap-2">
            <label for="name" class="text-[#000000] font-semibold">Enter Your Name:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-regular fa-keyboard"></i>
                <input type="text" name="name" placeholder="Enter Your Name"
                    class="w-full h-8 pl-3 font-semibold outline-none" value="<?= old('name') ?>">
            </div>
            <?php if (session('errors.name')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.name') ?></p>
            <?php endif; ?>
        </div>

        <!-- Shop Username -->
        <div class="flex flex-col my-2 gap-2">
            <label for="store_user_name" class="text-[#000000] font-semibold">Enter Shop User Name:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-regular fa-keyboard"></i>
                <input name="store_user_name" type="text" placeholder="Enter Shop Name"
                    class="w-full h-8 pl-3 font-semibold outline-none" value="<?= old('store_user_name') ?>">
            </div>
            <?php if (session('errors.store_user_name')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.store_user_name') ?></p>
            <?php endif; ?>
        </div>

        <!-- Shop Address -->
        <div class="flex flex-col my-2 gap-2">
            <label for="address" class="text-[#000000] font-semibold">Enter Shop Address:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-solid fa-address-card"></i>
                <input name="address" type="text" placeholder="Enter Shop Address"
                    class="w-full h-8 pl-3 font-semibold outline-none" value="<?= old('address') ?>">
            </div>
            <?php if (session('errors.address')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.address') ?></p>
            <?php endif; ?>
        </div>

        <!-- Google Location -->
        <div class="flex flex-col my-2 gap-2">
            <label for="google_map_link" class="text-[#000000] font-semibold">Enter Shop Google Location Link:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-solid fa-map-marker-alt"></i>
                <input type="text" name="google_map_link" placeholder="Enter Shop Google location"
                    class="w-full h-8 pl-3 font-semibold outline-none" value="<?= old('google_map_link') ?>">
            </div>
            <?php if (session('errors.google_map_link')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.google_map_link') ?></p>
            <?php endif; ?>
        </div>

        <!-- Email -->
        <div class="flex flex-col my-2 gap-2">
            <label for="email" class="text-[#000000] font-semibold">Enter Your Email:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter Your Email"
                    class="w-full h-8 pl-3 font-semibold outline-none" value="<?= old('email') ?>">
            </div>
            <?php if (session('errors.email')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.email') ?></p>
            <?php endif; ?>
        </div>

        <!-- Contact Number -->
        <div class="flex flex-col my-2 gap-2">
            <label for="contact" class="text-[#000000] font-semibold">Enter Your Phone Number:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-solid fa-mobile-retro"></i>
                <input type="tel" name="contact" id="phone" placeholder="Enter Your Phone Number" maxlength="10"
                    inputmode="numeric" pattern="[0-9]*" class="w-full h-8 pl-3 font-semibold outline-none"
                    value="<?= old('contact') ?>">
            </div>
            <?php if (session('errors.contact')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.contact') ?></p>
            <?php endif; ?>
        </div>

        <!-- Password -->
        <div class="flex flex-col my-2 gap-2">
            <label for="password" class="text-[#000000] font-semibold">Enter Your Password:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-1">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Enter Your Password"
                    class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
            <?php if (session('errors.password')): ?>
                <p class="text-red-600 text-sm"><?= session('errors.password') ?></p>
            <?php endif; ?>
        </div>

        <!-- Submit Button -->
        <button type="submit" name="submit"
            class="bg-[#F44164] shadow-xl shadow-rose-700/80 text-white font-bold text-xl w-3/4 self-center rounded-full h-12 animate-bounce transition-all hover:bg-rose-600 hover:ring-2 hover:ring-yellow-300">
            Register
        </button>
    </form>
</div>
<?php $this->endSection(); ?>
<?= $this->section('title') ?>Signup<?php echo $this->endSection() ?>;