<?php $this->extend('front/layout') ?>
<?php $this->section('body') ?>
<div class="m-2 p-8 rounded-3xl ring-2">
    <h1
        class="text-center my-4 font-extrabold text-xl text-[#F44164] bg-cyan-100 p-1 rounded-xl ring-1 ring-yellow-400">
        Enter Your Details For Registration:
    </h1>
    <form action="submit" class="flex flex-col mt-7 w-full justify-stretch content-between gap-3">

        <!-- customer name -->
        <div class="flex flex-col my-2 gap-2">
            <label for="name" class="text-[#F44164] font-semibold">Enter Your Name:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-regular fa-keyboard"></i>
                <input type="text" placeholder="Enter Your Name" class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
        </div>

        <!-- shop namme -->
        <div class="flex flex-col my-2 gap-2">
            <label for="name" class="text-[#F44164] font-semibold">Enter Shop Name:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-regular fa-keyboard"></i>
                <input type="text" placeholder="Enter Shop Name" class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
        </div>

        <!-- shop address starts here -->
        <div class="flex flex-col my-2 gap-2">
            <label for="name" class="text-[#F44164] font-semibold">Enter Shop Address:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" placeholder="Enter Shop Address" class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
        </div>
        <!-- shop address ends here -->

        <!-- shop address google location starts here -->
        <div class="flex flex-col my-2 gap-2">
            <label for="name" class="text-[#F44164] font-semibold">Enter Shop Google location:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" placeholder="Enter Shop Google location"
                    class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
        </div>

        <!-- shop address google location ends here -->

        <!-- official email address -->

        <div class="flex flex-col my-2 gap-2">
            <label for="email" class="text-[#F44164] font-semibold">Enter Your Email:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter Your Email" class=" w-full h-8 pl-3 font-semibold outline-none">
            </div>

            <!-- contact Number -->

            <div class="flex flex-col my-2 gap-2 ">
                <label for="phone" class="text-[#F44164] font-semibold">Enter Your Phone Number:</label>
                <div class="flex items-center border-b-2 border-gray-300 mb-3">
                    <i class="fa-solid fa-mobile-retro"></i>
                    <input type="tel" name="phone " id="phone" placeholder="Enter Your Phone Number" maxlength="10"
                        inputmode="numeric" pattern="[0-9]*" class=" w-full h-8 pl-3 font-semibold outline-none ">
                </div>
            </div>
        </div>
        <button type="submit"
            class="bg-[#F44164] shadow-xl shadow-rose-700/80 text-white font-bold text-xl w-3/4 self-center rounded-full h-12 animate-bounce transition-all hover:bg-rose-600 hover:ring-2 hover:ring-yellow-300 ">
            Register
        </button>
    </form>
</div>
<?php $this->endSection(); ?>
<?= $this->section('title') ?>Signup<?php echo $this->endSection() ?>;