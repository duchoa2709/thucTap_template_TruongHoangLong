<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide:nth-child(odd) {
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    Phan Đức Hòa
                </p>
            </div>
            <div class="swiper-slide"><img
                    src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-40.jpg" alt="">
                <p class="text-[#1b2c65] text-2xl font-bold">
                    end
                </p>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
    </script>
</body>

</html>