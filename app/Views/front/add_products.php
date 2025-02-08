<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
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
                class="py-3 px-5 rounded-full w-full border-2 border-rose-600 focus:outline-none focus:ring-2 focus:ring-teal-400"
                placeholder="Products Search Here">
            </div>
        </div>
        <div class="m-2 p-2 bg-cyan-100 ring-2 rounded-xl ring-cyan-400">
            <div class="flex items-center justify-between gap-2 mb-2">
                <div class="flex items-center gap-2">
                    <div class="bg-teal-600 text-white rounded-full p-2">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="text-xl font-semibold">
                        Add a product:
                    </div>
                </div>
                <button type="button" class="text-xl font-semibold bg-teal-700 rounded-full p-2 w-40">
                    ADD
                </button>
            </div>
            <div class="bg-cyan-200 p-2 rounded-xl">
                <form action="submit" class="flex flex-col justify-start items-start gap-3 mt-4">
                    <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="product_name" id="product_name">Product Name</label>
                        <input type="text" placeholder="Enter Product Name" class="w-full  border-2 border-rose-600 rounded-full h-10 pl-4">
                    </div>

                    <!-- if needed can be added later on -->
                    
                    <!-- <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="brand-name">Product Brand Name</label>
                        <input list="brand-names" id="brand-name" name="brand-name" class="w-full rounded-full border-2 border-rose-600 h-10 pl-4" autocomplete="off">

                        <datalist id="brand-names">    
                            <option value="ACER">ACER</option>
                            <option value="ALCATEL">ALCATEL</option>
                            <option value="Apple">Apple</option>
                            <option value="ASUS">ASUS</option>
                            <option value="AT&T">AT&T</option>
                            <option value="BENQ">BENQ</option>
                            <option value="BLACKBERRY">BLACKBERRY</option>
                            <option value="BOSCH">BOSCH</option>
                            <option value="CASIO">CASIO</option>
                            <option value="CAT">CAT</option>
                            <option value="CELKON">CELKON</option>
                            <option value="CHERRY">CHERRY</option>
                            <option value="DELL">DELL</option>
                            <option value="ERICSSON">ERICSSON</option>
                            <option value="FUJITSU SIEMENS">FUJITSU SIEMENS</option>
                            <option value="GIGABYTE">GIGABYTE</option>
                            <option value="GIONEE">GIONEE</option>
                            <option value="GOOGLE">GOOGLE</option>
                            <option value="HAIER">HAIER</option>
                            <option value="HMD">HMD</option>
                            <option value="HONOR">HONOR</option>
                            <option value="HP">HP</option>
                            <option value="HTC">HTC</option>
                            <option value="HUAWEI">HUAWEI</option>
                            <option value="I-MATE">I-MATE</option>
                            <option value="I-MOBILE">I-MOBILE</option>
                            <option value="INFINIX">INFINIX</option>
                            <option value="INQ">INQ</option>
                            <option value="INTEX">INTEX</option>
                            <option value="ITEL">ITEL</option>
                            <option value="JOLLA">JOLLA</option>
                            <option value="KARBONN">KARBONN</option>
                            <option value="KYOCERA">KYOCERA</option>
                            <option value="LAVA">LAVA</option>
                            <option value="LENONO">LENONO</option>
                            <option value="LG">LG</option>
                            <option value="MEIZU">MEIZU</option>
                            <option value="MICROMAX">MICROMAX</option>
                            <option value="MICROSOFT">MICROSOFT</option>
                            <option value="MITSUBISHI">MITSUBISHI</option>
                            <option value="MOTOROLA">MOTOROLA</option>
                            <option value="NEC">NEC</option>
                            <option value="NEONODE">NEONODE</option>
                            <option value="NOKIA">NOKIA</option>
                            <option value="NOTHING">NOTHING</option>
                            <option value="NVIDIA">NVIDIA</option>
                            <option value="ONEPLUS">ONEPLUS</option>
                            <option value="OPPO">OPPO</option>
                            <option value="OSCAL">OSCAL</option>
                            <option value="PALM">PALM</option>
                            <option value="PANASONIC">PANASONIC</option>
                            <option value="PANTECH">PANTECH</option>
                            <option value="PARLA">PARLA</option>
                            <option value="PHILIPS">PHILIPS</option>
                            <option value="PLUM">PLUM</option>
                            <option value="POSH">POSH</option>
                            <option value="PRESTIGIO">PRESTIGIO</option>
                            <option value="QMOBILE">QMOBILE</option>
                            <option value="QTEK">QTEK</option>
                            <option value="RAZER">RAZER</option>
                            <option value="REALME">REALME</option>
                            <option value="ROG">ROG</option>
                            <option value="SAMSUNG">SAMSUNG</option>
                            <option value="SEGA">SEGA</option>
                            <option value="SHARP">SHARP</option>
                            <option value="SIEMENS">SIEMENS</option>
                            <option value="SONY">SONY</option>
                            <option value="SONY ERICSSON">SONY ERICSSON</option>
                            <option value="SPICE">SPICE</option>
                            <option value="SPARK">SPARK</option>
                            <option value="T-MOBILE">T-MOBILE</option>
                            <option value="TCL">TCL</option>
                            <option value="TECNO">TECNO</option>
                            <option value="THOMSON">THOMSON</option>
                            <option value="TOSHIBA">TOSHIBA</option>
                            <option value="VERTU">VERTU</option>
                            <option value="VERYKOOL">VERYKOOL</option>
                            <option value="VIVO">VIVO</option>
                            <option value="VODAFONE">VODAFONE</option>
                            <option value="WIKO">WIKO</option>
                            <option value="XIAOMI">XIAOMI</option>
                            <option value="XINHUA">XINHUA</option>
                            <option value="XOLO">XOLO</option>
                            <option value="YOTA">YOTA</option>
                            <option value="YU">YU</option>
                            <option value="ZTE">ZTE</option>    
                        </datalist>
                        <select id="brand-names"  name="brand-name" class="w-full rounded-full  border-2 border-rose-600 h-10 pl-4 mt-2">
                            <option value="Select Brand Name" selected>Select Brand Name</option>
                            <option value="ACER">ACER</option>
                            <option value="ALCATEL">ALCATEL</option>
                            <option value="Apple">Apple</option>
                            <option value="ASUS">ASUS</option>
                            <option value="AT&T">AT&T</option>
                            <option value="BENQ">BENQ</option>
                            <option value="BLACKBERRY">BLACKBERRY</option>
                            <option value="BOSCH">BOSCH</option>
                            <option value="CASIO">CASIO</option>
                            <option value="CAT">CAT</option>
                            <option value="CELKON">CELKON</option>
                            <option value="CHERRY">CHERRY</option>
                            <option value="DELL">DELL</option>
                            <option value="ERICSSON">ERICSSON</option>
                            <option value="FUJITSU SIEMENS">FUJITSU SIEMENS</option>
                            <option value="GIGABYTE">GIGABYTE</option>
                            <option value="GIONEE">GIONEE</option>
                            <option value="GOOGLE">GOOGLE</option>
                            <option value="HAIER">HAIER</option>
                            <option value="HMD">HMD</option>
                            <option value="HONOR">HONOR</option>
                            <option value="HP">HP</option>
                            <option value="HTC">HTC</option>
                            <option value="HUAWEI">HUAWEI</option>
                            <option value="I-MATE">I-MATE</option>
                            <option value="I-MOBILE">I-MOBILE</option>
                            <option value="INFINIX">INFINIX</option>
                            <option value="INQ">INQ</option>
                            <option value="INTEX">INTEX</option>
                            <option value="ITEL">ITEL</option>
                            <option value="JOLLA">JOLLA</option>
                            <option value="KARBONN">KARBONN</option>
                            <option value="KYOCERA">KYOCERA</option>
                            <option value="LAVA">LAVA</option>
                            <option value="LENONO">LENONO</option>
                            <option value="LG">LG</option>
                            <option value="MEIZU">MEIZU</option>
                            <option value="MICROMAX">MICROMAX</option>
                            <option value="MICROSOFT">MICROSOFT</option>
                            <option value="MITSUBISHI">MITSUBISHI</option>
                            <option value="MOTOROLA">MOTOROLA</option>
                            <option value="NEC">NEC</option>
                            <option value="NEONODE">NEONODE</option>
                            <option value="NOKIA">NOKIA</option>
                            <option value="NOTHING">NOTHING</option>
                            <option value="NVIDIA">NVIDIA</option>
                            <option value="ONEPLUS">ONEPLUS</option>
                            <option value="OPPO">OPPO</option>
                            <option value="OSCAL">OSCAL</option>
                            <option value="PALM">PALM</option>
                            <option value="PANASONIC">PANASONIC</option>
                            <option value="PANTECH">PANTECH</option>
                            <option value="PARLA">PARLA</option>
                            <option value="PHILIPS">PHILIPS</option>
                            <option value="PLUM">PLUM</option>
                            <option value="POSH">POSH</option>
                            <option value="PRESTIGIO">PRESTIGIO</option>
                            <option value="QMOBILE">QMOBILE</option>
                            <option value="QTEK">QTEK</option>
                            <option value="RAZER">RAZER</option>
                            <option value="REALME">REALME</option>
                            <option value="ROG">ROG</option>
                            <option value="SAMSUNG">SAMSUNG</option>
                            <option value="SEGA">SEGA</option>
                            <option value="SHARP">SHARP</option>
                            <option value="SIEMENS">SIEMENS</option>
                            <option value="SONY">SONY</option>
                            <option value="SONY ERICSSON">SONY ERICSSON</option>
                            <option value="SPICE">SPICE</option>
                            <option value="SPARK">SPARK</option>
                            <option value="T-MOBILE">T-MOBILE</option>
                            <option value="TCL">TCL</option>
                            <option value="TECNO">TECNO</option>
                            <option value="THOMSON">THOMSON</option>
                            <option value="TOSHIBA">TOSHIBA</option>
                            <option value="VERTU">VERTU</option>
                            <option value="VERYKOOL">VERYKOOL</option>
                            <option value="VIVO">VIVO</option>
                            <option value="VODAFONE">VODAFONE</option>
                            <option value="WIKO">WIKO</option>
                            <option value="XIAOMI">XIAOMI</option>
                            <option value="XINHUA">XINHUA</option>
                            <option value="XOLO">XOLO</option>
                            <option value="YOTA">YOTA</option>
                            <option value="YU">YU</option>
                            <option value="ZTE">ZTE</option>
                        </select>
                    </div> -->

                    <!-- can be added later on if needed -->
                    
                    <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="p-model">Product Brand Name</label>
                        <input type="text" placeholder="Enter Product Brand Name" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600">
                        <!-- <button type="submit" class=" bg-cyan-500 w-full rounded-full h-10 pl-4 text-xl font-semibold my-2">
                            Add New
                        </button> -->
                    </div>
                    <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="categories">Product Category</label>
                        <select name="categories" id="categories" placeholder="Enter Product Category" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600">
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Home & Living">Home & Living</option>
                            <option value="Health & Beauty">Health & Beauty</option>
                            <option value="Books & Stationary">Books & Stationary</option>
                            <option value="Sports & Outdoor">Sports & Outdoor</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Toys & Games">Toys & Games</option>
                            <option value="Groceries">Groceries</option>
                            <option value="Others">Others</option>
                            <option value="Mobile Phones">Mobile Phones</option>
                        </select>
                    </div>

                    <!-- if needed can be added later on -->
                    
                    <!-- <input type="list"name="categories" id="categories" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600 mt-2">

                        <datalist name="categories" id="categories">
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Home & Living">Home & Living</option>
                            <option value="Health & Beauty">Health & Beauty</option>
                            <option value="Books & Stationary">Books & Stationary</option>
                            <option value="Sports & Outdoor">Sports & Outdoor</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Toys & Games">Toys & Games</option>
                            <option value="Groceries">Groceries</option>
                            <option value="Others">Others</option>
                        </datalist>
                    </div> -->
                    
                    <!-- if needed can be added later on -->

                    <div class=" flex justify-evenly items-start text-left w-full bg-cyan-100 p-2 rounded-xl gap-2">
                        <div>
                            <label for="p-quantity">Product Quantity</label>
                            <input type="number" placeholder="Product Quantity" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600">
                        </div>
                        <div>
                            <label for="p-price">Product MRP Price</label>
                            <input type="number" placeholder="Product Price" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600">
                        </div>
                        <div>
                        <label for="p-price">Product Sell Price</label>
                        <input type="number" placeholder="Product Price" class="w-full rounded-full h-10 pl-4 border-2 border-rose-600">
                        </div>
                    </div>
                    <div class="flex justify-evenly content-center items-start text-left w-full bg-cyan-100 
                    p-4 rounded-xl">
                        <label for="product-stock">Product Available</label>
                        <div>
                        <input type="radio" name="product-stock" id="product-stock-yes">
                        <label for="product-stock-yes">Yes</label>
                        </div>
                        <div>
                        <input type="radio" name="product-stock" id="product-stock-no">
                        <label for="product-stock-no">No</label>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="p-description" class="ml-4">Product Description</label>
                        <textarea name="p-description" id="p-description" cols="30" rows="10" class="w-full rounded-xl p-2 border-2 border-rose-600"></textarea>    
                    </div>
                    <div class="flex flex-col justify-start items-start text-left w-full bg-cyan-100 p-2 rounded-xl">
                        <label for="p-picture" class="ml-4">Product Pictures</label>
                        <input type="file" name="p-picture" id="p-1" class="w-full rounded-full h-10 pl-4">
                        <input type="file" name="p-picture" id="p-2" class="w-full rounded-full h-10 pl-4">
                        <input type="file" name="p-picture" id="p-3" class="w-full rounded-full h-10 pl-4">
                    </div>
                    <button type="submit" class=" bg-cyan-500 w-full rounded-full h-10 pl-4 text-xl font-semibold my-2 ring ring-yellow-300">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>