<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="icon" href="assets/img/logofix.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/news.css">
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

        <section>
            <div class="circle"></div>
            <div class="content">
                <div class="textBox">
                    <h2>It's not just Coffee<br>It's <span class="textt">5% COFFEE</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <a href="#" class="klik">Learn More</a>
                </div>
                <div class="imgBox">
                    <img src="assets/img/mockup6.png" class="mockup6">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="assets/img/mockup6.png" onclick="imgSlider('assets/img/mockup6.png'); changeCircleColor('#7D3100'); text('#7D3100'); a('#7D3100')" width="100" height="100"></li>
                <li><img src="assets/img/mockup7.png" onclick="imgSlider('assets/img/mockup7.png'); changeCircleColor('#017143'); text('#017143'); a('#017143')" width="100" height="100"></li>
                <li><img src="assets/img/mockup8.png" onclick="imgSlider('assets/img/mockup8.png'); changeCircleColor('#D96300'); text('#D96300'); a('#D96300')" width="100" height="100"></li>
            </ul>
            <ul class="sci">
                <li><a href="#"><img src="assets/img/facebook.png" width="50" height="50"></a></li>
                <li><a href="#"><img src="assets/img/twitter.png" width="50" height="50"></a></li>
                <li><a href="#"><img src="assets/img/instagram.png" width="50" height="50"></a></li>
            </ul>
        </section>


        <!-- FOOTER -->
        <footer class="">
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

    <script type="text/javascript">
        function imgSlider(anything) {
            document.querySelector('.mockup6').src = anything;
        }

        function text(color) {
            const textt = document.querySelector('.textt');
            textt.style.color = color;
        }

        function a(color) {
            const klik = document.querySelector('.klik');
            klik.style.background = color;
        }

        function changeCircleColor(color) {
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>