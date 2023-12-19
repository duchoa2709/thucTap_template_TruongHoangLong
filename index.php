<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./public/css/styleIndex.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<body>
    <!-- header navbar -->
    <div class="flex items-center fixed w-full bg-white z-50">
        <div class="container mx-auto px-40">
            <div class="flex items-center justify-center">
                <div class="mr-28">
                    <!-- Hình ảnh logo -->
                    <img src="./public/images/LogoHeader.jpg" alt="">
                </div>
                <div>
                    <!-- Danh mục -->
                    <ul class="flex">
                        <li class="ml-12"><a href="" class="text-[#1c2c67] font-bold">TRANG CHỦ</a></li>
                        <li class="ml-12"><a href="#aboutCompany" class=" hover:text-[#1c2c67]">GIỚI THIỆU</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">DỰ ÁN</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">TRUYỀN THÔNG</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">CỔ ĐÔNG</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">TUYỂN DỤNG</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-[#1b2c65]">
            <div class="grid grid-cols-3 divide-x">
                <button class="py-8 px-6">
                    <img class="m-auto" src="./public/images/Search.svg" alt="">
                </button>
                <!-- Tìm Kiếm -->
                <button class="py-8 px-6">
                    <!-- Liên Hệ -->
                    <img class="m-auto" src="./public/images/Phone.svg" alt="">
                </button>
                <button class="py-8 px-6">
                    <!-- Ngôn ngữ -->
                    <div class="flex text-white m-auto">
                        <a href="#">EN</a>
                        <div class="mx-2">|</div>
                        <a href="#">VI</a>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <!-- end header navbar -->

    <!-- banner -->
    <div class="bannerHome">
        <div class="slideshow-container">
            <div class="mySlides fade" style="background-image: url('./public/images/Frame18579.jpg')">
                <div class="textBanner">
                    <div class="text-6xl font-bold bg-[#ebebeb47] p-3 rounded-lg">
                        <p class="text-white">TRƯƠNG HOÀNG LONG</p>
                        <p class="text-white py-2">KIẾN TẠO VỊ THẾ</p>
                        <p class="text-white">VÀ BỀN VỮNG </p>
                    </div>
                    <button class="bg-[#CF4735] text-white px-6 py-3 mt-5">
                        Xem Thêm <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="mySlides fade" style="background-image: url('./public/images/anhnennhadat.jpg')">
                <div class="textBanner">
                    <div class="text-6xl font-bold bg-[#ebebeb47] p-3 rounded-lg">
                        <p class="text-white">TRƯƠNG HOÀNG LONG</p>
                        <p class="text-white py-2">KIẾN TẠO VỊ THẾ</p>
                        <p class="text-white">VÀ BỀN VỮNG </p>
                    </div>
                    <button class="bg-[#CF4735] text-white px-6 py-3 mt-5">
                        Xem Thêm <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
    </div>
    <!-- end banner -->

    <section class="container mx-auto px-40">
        <!-- about Us -->
        <section id="aboutCompany" class="aboutCompany">
            <div class="py-15">
                <div class="w-full flex">
                    <div class="w-1/2 mt-20 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="300" data-aos-anchor-placement="top-bottom">
                        <div class="aboutUs py-8 ">
                            <h3 class="text-[#666666] text-xl">VỀ CHÚNG TÔI</h3>
                        </div>
                        <div class="mt-2">
                            <p class="text-[#1B2C65] leading-8 text-4xl">CÔNG TY CỔ PHẦN</p>
                            <p class="text-[#1B2C65] leading-8 text-4xl my-4">KỸ THUẬT XÂY DỰNG</p>
                            <p class="text-[#1B2C65] leading-8 text-4xl font-bold">TRƯƠNG HOÀNG LONG</p>
                        </div>

                        <p class="mt-14 mb-4 text-xl font-bold">
                            Với định hướng trở thành công ty kỹ thuật xây dựng dẫn <br> đầu khu vực Đông Nam Á,
                        </p>
                        <p class="mb-9 text-xl">
                            HLQ Land đang từng bước hiện thực hóa mục tiêu bằng cách xây <br> dựng công ty theo chuẩn
                            mực
                            Quốc
                            tế.
                        </p>
                        <button class="bg-[#CF4735] text-white px-6 py-3">
                            <a href="" class="flex items-center gap-5 font-bold">Xem thêm
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 30 10"
                                    fill="none">
                                    <path d="M28.6503 5.12609L0.67749 5.12609" stroke="white" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M25.8533 0.926056L29.21 5.1258L25.8533 9.32623" stroke="white"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></i></a>
                        </button>
                    </div>
                    <div class="w-1/2">
                        <div class="imageAboutUs">
                            <img src=".\public\images\imageab.png" alt=""
                                class="max-w-none aos-init aos-animate w-[43vw]" data-aos-duration="500"
                                data-aos-delay="300" data-aos="zoom-in" data-aos-duration="1500">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- end about Us -->
        </section>
    </section>
    <div class="bg-no-repeat bg-bottom pb-96" style="background-image: url('./public/images/anhnennhadat.jpg')">
        <section class="container mx-auto px-40">
            <!-- end container -->
            <!-- our services -->
            <?php include_once('components/home/linhVucHoatDong.php') ?>
            <section>
                <div class="flex ourServieces">
                    <div class="flex items-center ourServieces-prev">
                        <div class="w-full text-right">
                            <button onclick="next()" class="p-5 rounded-full bg-white border-gray-700 shadow-lg mr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 4.5l-7.5 7.5 7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div id="sliderContainer" class="overflow-hidden py-10" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="300" data-aos-offset="500"
                        data-aos-delay="300">
                        <ul id="slider" class="flex w-full">
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Frame18579.jpg" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Frame18579.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                            <li class="m-3 rounded-lg shadow-xl">
                                <div class="rounded-lg h-full mb-6 bg-white sliderContainer-hover">
                                    <img class="h-50 w-full object-cover rounded-md"
                                        src="./public/images/Rectangle269.png" alt="">
                                    <div
                                        class="pt-6 pb-3 mb-3 border-b border-[#1b2c65] text-2xl font-bold mx-8 text-gray-700">
                                        DỰ ÁN
                                    </div>
                                    <p class="mt-2 text-gray-500 mx-8 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores magni
                                        aliquid
                                        tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis non
                                        maiores
                                        inventore veniam consequatur unde animi, voluptatem mollitia.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center ourServieces-next">
                        <div class="w-full text-left">
                            <button onclick="prev()" class="p-5 rounded-full bg-white border-gray-700 shadow-lg ml-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end our services -->
        </section>
    </div>
    </section>

    <script>
    // Tự động chuyển đổi slide sau mỗi 2 giây
    setInterval(function() {
        plusSlides(1);
    }, 2000);
    </script>

    <script src="./public/js/jsIndex.js"></script>
</body>

</html>