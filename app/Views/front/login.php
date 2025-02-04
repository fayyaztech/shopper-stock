<?= $this->extend('front/layout') ?>
<!-- extend with title -->
<?= $this->section('title') ?>Login<?php echo $this->endSection() ?>;
<?= $this->section('body') ?>
<h1 class="text-center mt-12 from-neutral-100 font-extrabold text-6xl text-[#F44164]">Shopper Stock</h1>

<div class="flex flex-col p-8 mt-7 w-full justify-stretch">
    <h1 class="text-[#F44164] font-semibold text-3xl my-6">Welcome back</h1>
    <form action="login" class="flex flex-col">
        <!-- Input with Icon -->
        <div class="flex items-center border-b-2 border-gray-300 mb-3">
            <i class="fa-regular fa-keyboard"></i>
            <input type="text" placeholder="Enter Email/Mobile Number"
                class="w-full h-8 pl-3 font-semibold outline-none">
        </div>

        <!-- Password Input with Icon -->
        <div class="flex items-center border-b-2 border-gray-300 mb-3">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password/OTP"
                class="w-full h-8 pl-3 font-semibold outline-none">
        </div>
        <div class="my-4 p-2 flex justify-between items-center text-[#F44164] text-lg">
            <!-- Checkbox and Label -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="remember-me" id="checkbox" class="cursor-pointer">
                <label for="checkbox" class="cursor-pointer">Remember me</label>
            </div>

            <!-- Forgot Password -->

            <span class="cursor-pointer hover:underline">Forgot Password?</span>
        </div>


        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#F44164] shadow-xl shadow-rose-700/80 text-white font-bold text-xl w-3/4 self-center rounded-full h-12 animate-pulse hover:bg-yellow-400 hover:text-black">
            Login
        </button>
    </form>
</div>
<div class="flex flex-col items-center my-4">
    <span class="text-2xl font-semibold mb-8">Or Login with</span>
    <div class="flex space-x-8">
        <a href="https://www.facebook.com/login.php/">
            <img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" alt="facebook-icon"
                class="w-12 h-12">
        </a>
        <a href="https://www.instagram.com/accounts/login/">
            <img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000" alt="instagram-icon"
                class="w-12 h-12">
        </a>

        <img src="https://img.icons8.com/?size=100&id=PmVIP6qPDgZv&format=png&color=000000" alt="linkedin-icon"
            class="w-12 h-12">
    </div>
</div>
<div>
    <p class="text-center my-12 text-lg font-semibold">
        Don't have account?
        <a href="/signup"><span class="text-center mt-4 text-lg font-semibold text-rose-600 hover:underline">Sign
                up</span></a>
    </p>
</div>
<?= $this->endSection() ?>