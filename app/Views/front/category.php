<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Shops</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="p-2 font-times font-medium">
    <div class="bg-gray-100 rounded-xl p-1 w-full h-full ring-2 ring-gray-300">
        <h1 class="bg-white text-center p-1 mb-5 mt-1 rounded-2xl ring-2 ring-yellow-300 ring-offset-1 ring-offset-rose-600 text-[#F44164] font-bold text-2xl">Search Shops By Categories</h1>

        <?php
        foreach ($categories as $category => $stores) {
            echo '<div class="bg-gray-200 flex flex-col rounded-xl">';
            echo '<h2 class="bg-teal-600 font-bold text-white text-2xl text-center rounded-b-xl">' . $category . '</h2>';
            echo '<div class="grid grid-cols-3 gap-4 p-2">';
            foreach ($stores as $store) {
                echo '<div class="p-4 rounded-xl bg-white shadow-md">';
                echo '<h3>' . $store['name'] . '</h3>';
                echo '<img src="' . $store['image'] . '" alt="shop" class="w-full h-30 object-fill border-double border-4 border-black">';
                echo '<p>Address: ' . $store['address'] . '</p>';
                echo '<a href="'.strtolower(str_replace(" ",'-',$store['name'])).'" class="text-blue-500">Visit Store</a>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
        <span>
        </span>
    </div>
</body>

</html>