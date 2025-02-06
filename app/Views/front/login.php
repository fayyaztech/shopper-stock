<?= $this->extend('front/layout') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('body') ?>
<h1 class="text-center mt-12 font-extrabold text-6xl text-[#F44164]">Shopper Stock</h1>

<div class="flex flex-col p-8 mt-7 w-full">
    <h1 class="text-[#F44164] font-semibold text-3xl my-6">Welcome back</h1>

    <?php $errors = session('errors') ?? []; ?>

    <form action="/login" method="post" class="flex flex-col">
        <!-- Username or Email Input -->
        <div class="flex flex-col my-2">
            <label for="username" class="text-[#F44164] font-semibold">Username / Email:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-regular fa-user text-gray-500"></i>
                <input type="text" name="username" placeholder="Enter Username or Email"
                    class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
            <?php if (isset($errors['username'])): ?>
                <p class="text-red-500 text-sm"><?= esc($errors['username']) ?></p>
            <?php endif; ?>
        </div>

        <!-- Password Input -->
        <div class="flex flex-col my-2">
            <label for="password" class="text-[#F44164] font-semibold">Password:</label>
            <div class="flex items-center border-b-2 border-gray-300 mb-3">
                <i class="fa-solid fa-lock text-gray-500"></i>
                <input type="password" name="password" placeholder="Enter Password"
                    class="w-full h-8 pl-3 font-semibold outline-none">
            </div>
            <?php if (isset($errors['password'])): ?>
                <p class="text-red-500 text-sm"><?= esc($errors['password']) ?></p>
            <?php endif; ?>
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="my-4 p-2 flex justify-between items-center text-[#F44164] text-lg">
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="remember-me" id="checkbox" class="cursor-pointer">
                <label for="checkbox" class="cursor-pointer">Remember me</label>
            </div>
            <a href="/forgot-password" class="hover:underline text-[#F44164]">Forgot Password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#F44164] shadow-xl shadow-rose-700/80 text-white font-bold text-xl w-3/4 self-center rounded-full h-12 animate-pulse hover:bg-yellow-400 hover:text-black">
            Login
        </button>
    </form>
</div>

<!-- Social Media Login -->
<div class="flex flex-col items-center my-4">
    <span class="text-2xl font-semibold mb-8">Or Login with</span>
    <div class="flex space-x-8">
        <a href="https://www.facebook.com/login.php/" class="text-blue-600 text-3xl">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/accounts/login/" class="text-pink-600 text-3xl">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/login/" class="text-blue-500 text-3xl">
            <i class="fa-brands fa-linkedin"></i>
        </a>
    </div>
</div>

<!-- Signup Link -->
<div>
    <p class="text-center my-12 text-lg font-semibold">
        Don't have an account?
        <a href="/signup" class="text-rose-600 hover:underline">Sign up</a>
    </p>
</div>

<?= $this->endSection() ?>