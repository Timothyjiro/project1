<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="icon" href="assets/img/logofix.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="">

        <!-- NAVBAR -->
        <nav class="sticky top-0 bg-white/75 backdrop-blur-lg grid grid-cols-2 py-2 px-14 z-50">
            <div class="ml-10">
                <a href="<?php echo site_url('welcome') ?>"><img src="assets/img/logofix.png" id="logo" width="70px" /></a>
            </div>
            <div class="flex justify-end gap-8 m-6 mx-7">
                <a href="<?php echo site_url('achievement') ?>" class="hover:text-green-800 transition duration-300 ease-in">ACHIEVEMENT</a>
                <a href="<?php echo site_url('news') ?>" class="hover:text-green-800 transition duration-300 ease-in">NEWS</a>
                <a href="<?php echo site_url('menu') ?>" class="hover:text-green-800 transition duration-300 ease-in">MENU</a>
                <a href="<?php echo site_url('ourstory') ?>" class="hover:text-green-800 transition duration-300 ease-in">OURSTORY</a>
                <a href="<?php echo site_url('feedback') ?>" class="hover:text-green-800 transition duration-300 ease-in">FEEDBACK</a>
            </div>
        </nav>

        <div class="">
        <div class="bg-[#ede5db] h-[565px]">
            <h1 class="text-6xl font-bold absolute top-[200px] left-[670px]">Avocado <br> Cappucino</h1>
            <p class="text-xl absolute top-[340px] left-[670px]">A combination of avocado mixed with cappuccino which<br> is complemented by whipped cream sprinkled with selected<br>chocolate that will make you happy</p>
            <h1 class="text-2xl font-semibold absolute top-[280px] left-[990px] bg-black text-white px-2 py-1 rounded-full">30 K</h1>
            <div class="absolute top-[150px] left-[150px] flex justify-center bg-white/95 rounded-full px-[30px] py-[30px] ">
                <img src="assets/img/mockup13.png" class="w-[380px]" alt="">
            </div>
        </div>


        <div class="">
            <h2 class="font-semibold font-sans text-3xl bg-100% text-center pt-4">OUR MENU</h2>
            <br>
            <hr class="mx-24">
            <br>
        </div>
        <!-- MENU -->
        <div>

            <div class="grid grid-cols-3 grid-rows-2 px-20 gap-2 mt-4">

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%] duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup6.png" class="w-48" alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Iced Palm Sugar</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">27 K</h2>
                    <p class="mx-2 py-2 text-center">Two shots of Espresso with a combination of the sweetness of palm sugar and fresh milk</p>
                    <button class="mt-4 bg-white border/85  hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%] duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup7.png" class="w-48 " alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Iced Latte</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">25 K</h2>
                    <p class="mx-2 py-2 text-center">Two shots of Espresso with fresh milk without sugar</p>
                    <button class="mt-4 bg-white border/85 hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%]  duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup8.png" class="w-48 " alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Iced Mocha</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">26 K</h2>
                    <p class="mx-2 py-2 text-center">Two shots of Espresso with 5% coffee's signature chocolate and fresh milk</p>
                    <button class="mt-4 bg-white border/85 hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%] duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup9.png" class="w-48 " alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Iced Caramel</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">27 K</h2>
                    <p class="mx-2 py-2 text-center">A blend of coffee with the freshest choice of milk and also a creamy caramel taste</p>
                    <button class="mt-4 bg-white border/85 hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%] duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup11.png" class="w-[80%] " alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Hot Latte</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">22 K</h2>
                    <p class="mx-2 py-2 text-center">one shot espresso with steam milk and layered with very soft thin foam on top</p>
                    <button class="mt-4 bg-white border/85 hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

                <div class="my-4 rounded-2xl p-8 flex flex-col justify-center mx-6 shadow-2xl z-0 relative bg-[#ede5db] hover:bg-[#e5d9ca] hover:scale-[95%] duration-500">
                    <div class="flex justify-center bg-white/95 rounded-full mx-12 py-4 ">
                        <img src="assets/img/mockup12.png" class="w-[80%] " alt="">
                    </div>
                    <h1 class="text-center text-2xl font-bold pt-4">Hot Mocha</h1>
                    <h2 class="text-xl font-bold px-2 py-[2px] absolute z-10 bg-white/90 text-black rounded-md top-[220px] border border-black right-[110px]">22 K</h2>
                    <p class="mx-2 py-2 text-center">one shot of espresso with special chocolate that we have selected from selected plantations</p>
                    <button class="mt-4 bg-white border/85 hover:border-black border font-bold py-2 px-4 hover:bg-white/40 rounded transition-colors duration-500">Add to order +</button>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <footer class="mt-24">
            <div class="px-10 p-4 bg-gray-100 text-black">
                <div class="">
                    <div class="grid grid-cols-4 gap-2">
                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Products</h4>
                            <ul>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="#" class="">Coffee</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Tea Series</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Milk Series</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Croffle</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Cookies and Cream</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Marchandise</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Informations</h4>
                            <ul>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Founder of 5%</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Promotions</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Fun Fact</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Our Story</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Feedback</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Locations</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Contact Us</h4>
                            <p><a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">customercare@5percentcoffee.id</a></p>
                            <br>
                            <p>Customer Hotline : <a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">(021)1500280</a></p>
                            <p>Contact : <a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">+628115484222</a></p>
                            <div class="grid grid-cols-5 gap-3 w-48 mt-2 ml-[-3px]">
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/instagram-new--v1.png" /></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/facebook-new.png" /></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/whatsapp--v1.png" /></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/twitter.png" /></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/youtube-play--v1.png" /></a>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <img src="assets/img/logofix.png" alt="" class="w-32">
                            <p class="font-semibold mt-2 ml-1.5 text-sm">©1780 5%COFFEE.ID, ALL RIGHT RESERVED.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-200 text-black p-2 px-4 ">
                <div class="flex justify-between">
                    <div class="text-left text-sm ml-5">
                        <div>
                            Copyright company. All Right Reserved
                        </div>
                        <div>
                            Designed by XID RPL
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>