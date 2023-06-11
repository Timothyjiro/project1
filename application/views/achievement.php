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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: white  ;
        }

        .achiev {
            font-family: 'Josefin Sans', sans-serif;
        }

        .card {
            background-color: #EDE5D8;
            width: 350px;
            height: 320px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            border-radius: 20px;
            box-shadow: 0px 30px 50px rgba(0, 0, 0, 0.5);
            transition: 0.5s;

        }

        .card:hover {
            height: 400px;
        }

        .card .img-box {
            position: absolute;
            top: 20px;
            width: 300px;
            height: 250px;
            background-color: whitesmoke;
            overflow: hidden;
            border-radius: 12px;
            transition: 0.5s;
        }

        .card .img-box img {
            width: 100%;
            height: 100%;
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            object-fit: cover;
        }

        .card:hover .img-box {
            top: -100px;
            scale: 75%;
        }

        .card .describe {
            position: absolute;
            top: 270px;
            text-align: center;
            width: 100%;
            padding: 0 30px;
            height: 25px;
            overflow: hidden;
            color: black;
        }

        .card:hover .describe {
            top: 130px;
            height: 290px;
        }

        hr {
            color: white;
        }
    </style>
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

        <h1 class="w-full text-3xl text-center text-black mt-16 achiev">~ACHIEVEMENT~</h1>

<!-- <hr class="mb-24"> -->
<br><br>
<br><br>

<!-- -- CARD START --- -->
<div class="relative h-96 flex justify-center w-full gap-10 text-black ">
    <div class="card">
        <div class="img-box">
            <img src="assets/img/achivement1.png" alt="">
        </div>
        <div class="describe">
            <h1>WORLD BEST BRAND WINNER</h1>
            <p>5% has been appointed as the only Brand of The Year winner
             in the Café Chain category from Indonesia by The World Branding Awards.</p>
        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="assets/img/achivement2.png" alt="">
        </div>
        <div class="describe">
            <h1>Brand Of The Year</h1>
            <p>Since 2017, it always has been and will always be about quality.
               We work relentlessly to guarantee we deliver on our promise. From harvest, tasting,
               roasting and working together with the producers in Indonesia to produce the best crop to our customers.
               Our passion for coffee is rivaled only by our love of sharing it.</p>
        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="assets/img/achivement3.png" alt="">
        </div>
        <div class="describe">
            <h1>HALAL CERTIFICATION</h1>
            <p>5% coffee strengten its commitment to
               serve the best quality product and become the first Kopi Susu
               Kekinian to obtain Halal Certification from Majelis Ulama Indonesia</p>
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