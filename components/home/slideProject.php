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
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
    }

    .swiper {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
    }

    .swiper-slide {
        width: 100%;
        height: 455px;
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: width 1s ease;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .swiper-slide img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }

    .swiper-button-prev:after {
        content: "";
        position: absolute;
        top: 50%;
        left: -260% !important;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        color: #333;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background: #fff;
    }

    .swiper-button-next::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 260% !important;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        color: #333;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background: #fff;
    }

    .swiper-button-next {
        right: 20px;
    }

    .swiper-button-prev {
        left: 20px;
    }

    /* Increase width for active slide */
    .swiper-slide.swiper-slide-active {
        width: 48% !important;
    }

    .sw-news {
        padding-top: 40px;
        position: relative;
    }

    .img-news {
        background: linear-gradient(180deg, rgba(251, 251, 251, 0) 0%, rgba(251, 251, 251, 0) 55%, rgba(0, 0, 0, 1) 100%);
        z-index: 1;
        position: relative;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Change height to auto to allow content to determine height */
        padding: 20px;
        /* Add padding to create space for text */
        box-sizing: border-box;
        /* Ensure padding is included in the total height */
        color: #fff;
        /* Set text color */
        text-align: left;
        /* Align text to the left */
    }

    .text-news {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 20px;
        color: #fff;
    }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="sw-news">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative" style="background-image: url('./public/images/Rectangle 330.png');">
                    <div class="img-news">
                        <div class="text-news">
                            <p class="font-light text-sm">Long Thạnh Mỹ,Quận 9,TP.HCM</p>
                            <p class="text-2xl font-bold">Happy One Central</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative " style="background-image: url('./public/images/Rectangle 331.png');">
                    <div class="img-news">
                        <div class="text-news">
                            <p class="font-light text-sm">Long Thạnh Mỹ,Quận 9,TP.HCM</p>
                            <p class="text-2xl font-bold">Happy One Central</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative " style="background-image: url('./public/images/Rectangle 330.png');">
                    <div class="img-news">
                        <div class="text-news">
                            <p class="font-light text-sm">Long Thạnh Mỹ,Quận 9,TP.HCM</p>
                            <p class="text-2xl font-bold">Happy One Central</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative " style="background-image: url('./public/images/Rectangle 331.png');">
                    <div class="img-news">
                        <div class="text-news">
                            <p class="font-light text-sm">Long Thạnh Mỹ,Quận 9,TP.HCM</p>
                            <p class="text-2xl font-bold">Happy One Central</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative " style="background-image: url('./public/images/Rectangle 330.png');">
                    <div class="img-news">
                        <div class="text-news">
                            <p class="font-light text-sm">Long Thạnh Mỹ,Quận 9,TP.HCM</p>
                            <p class="text-2xl font-bold">Happy One Central</p>
                        </div>
                    </div>
                </div>
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
        slidesPerView: 4,
        spaceBetween: 30,
        speed: 2400,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            300: {
                slidesPerView: 2,
                spaceBetween: 10,
            }
        }
    });
    </script>
</body>

</html>