<style>
.bg-services-gradient {
    background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.8995973389355743) 50%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<!-- Header navbar -->
<?php include_once('components/header.php') ?>
<!-- end header navbar -->

<!-- banner -->
<?php include_once('components/home/banner-home.php') ?>
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
                        HLQ Land đang từng bước hiện thực hóa mục tiêu bằng cách xây <br> dựng công ty theo chuẩn mực
                        Quốc tế.
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
                        <img src=".\public\images\imageab.png" alt="" class="max-w-none aos-init aos-animate w-[43vw]"
                            data-aos-duration="500" data-aos-delay="300" data-aos="zoom-in" data-aos-duration="1500">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end about Us -->
    </section>
</section>
<!-- our services -->
<div class="bg-no-repeat bg-bottom pb-96 bg-cover" style="background-image: url('./public/images/anhnennhadat.jpg')">
    <div class="bg-services-gradient">
        <section class="container mx-auto px-40">
            <!-- end container -->
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
                                        aliquid tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis
                                        non maiores inventore veniam consequatur unde animi, voluptatem mollitia.
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
                                        aliquid tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis
                                        non maiores inventore veniam consequatur unde animi, voluptatem mollitia.
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
                                        aliquid tenetur explicabo. In, dolorum, ex quia consequuntur culpa odit officiis
                                        non maiores inventore veniam consequatur unde animi, voluptatem mollitia.
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
</div>

<!-- project -->
<div class="bg-no-repeat bg-bottom py-32 bg-cover h-full"
    style="background-image: url('./public/images/bgProject.png')">
    <section class="container mx-auto px-40">
        <div class="flex items-center">
            <div class="text-left w-1/2 text-white">
                <p class="mb-3">
                    CÔNG TRÌNH ỨNG DỤNG
                </p>
                <p class="text-5xl">
                    <span class="text-white font-bold">
                        DỰ ÁN
                    </span>
                    NỔI BẬT
                </p>
            </div>

            <div class="w-1/2 project-home">
                <ul class="flex justify-end items-center text-white">
                    <li class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </li>
                    <li class="mr-8 font-bold active-list-project">
                        TẤT CẢ
                    </li>
                    <li class="mr-8">
                        CÔNG NGHIỆP
                    </li>
                    <li class="mr-8">
                        DÂN DỤNG
                    </li>
                    <li class="mr-8">
                        TỔNG THẦU
                    </li>
                    <button class="bg-[#CF4735] text-white px-3 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                    </button>
                </ul>
            </div>

        </div>

        <!-- =============================================================== -->
            <!-- Tin tức, nổi bật -->
            <?php include_once('components/home/slideProject.php') ?>
        <!-- =============================================================== -->

    </section>

</div>
<!-- =============================================================== -->
    <!-- Tin tức, nổi bật -->
    <?php include_once('components/home/news.php') ?>
<!-- =============================================================== -->

<!-- =============================================================== -->
    <!-- Đối tác -->
    <?php include_once('components/home/partners.php') ?>
<!-- =============================================================== -->

<!-- =============================================================== -->
    <!-- footer -->
    <?php include_once('components/footer.php') ?>
<!-- =============================================================== -->


<script>
// Tự động chuyển đổi slide sau mỗi 2 giây
setInterval(function() {
    plusSlides(1);
}, 2000);
</script>

<script src="./public/js/jsIndex.js"></script>
</body>

</html>