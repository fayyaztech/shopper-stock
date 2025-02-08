<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
<div class="bg-gray-50 text-center">
<div class="rounded-b-2xl bg-teal-600 px-4 pt-6 pb-4 text-white w-full">
            <h1 id="top" class="mb-2 `md:text-4xl text-3xl font-extrabold">
                Welcome to Dashboard
            </h1>
            <span class="md:text-4xl text-3xl font-extrabold text-yellow-300 border-b-4 border-white border-double">
                    Shop Name
                </span>
            <div class="my-6">
                <input type="text" name="search" id="search" class="py-3 px-5 text-black rounded-full w-full border-2 border-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-400" placeholder="Start Your Search Here">
            </div>
        </div>
        <div class="m-2 p-2 bg-cyan-300 ring-2 rounded-xl ring-cyan-400 h-screen">
            <span class="text-2xl font-bold text-left mb-2">
            Your Dashboard
            </span>
            <div class="grid grid-cols-2 items-center justify-between gap-4 mb-2 mt-4">
            <a href="/product-list">
                <div class="bg-cyan-100 rounded-xl h-20 p-2 shadow-lg shadow-gray-500">
                    <p class="text-3xl font-bold">
                        35
                    </p>
                    <p class="text-lg font-normal">
                        Products
                    </p>
                </div>
            </a>    
                <div class="bg-cyan-100 rounded-xl h-20 p-2 shadow-lg shadow-gray-500">
                    <p class="text-3xl font-bold">
                        101
                    </p>
                    <p class="text-lg font-normal">
                        Visitors
                    </p>
                </div>
                <a href="/add_products">
                    <div class="bg-cyan-100 rounded-xl h-20 p-2 shadow-lg shadow-gray-500">
                    <div class="bg-teal-600 text-white rounded-full p-2 w-auto">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <p>
                        Upload Products
                    </p>
                </div>
                </a>    
                <div class="bg-cyan-100 rounded-xl h-20 p-2 shadow-lg shadow-gray-500">
                    <p>
                        Upload Banner
                    </p>
                    <input type="file" name="" id="">
                </div>
            </div>
        </div>
    </div>
        
    </div>
</div>
</body>
</html>