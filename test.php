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
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .test .swiper {
        width: 100%;
        height: 677px;
    }

    .test .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1200px; /* Set the width */
        height: 677px; /* Set the height */
    }

    .test .swiper-wrapper img{
        object-fit: cover;
    }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="test">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt=""></div>
                <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 131.png" alt=""></div>
                <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt=""></div>
                <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 134.png" alt=""></div>
                <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
</body>

</html>