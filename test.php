<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Demo styles -->
    <style>
    html,
    body {
        position: relative;
        height: 100%;
        background: #;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .duAnCT-title .swiper {
        width: 21%;
        height: 220px;
    }

    .duAnCT-title .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 300ms linear !important;
        /* Added this line */
    }

    .duAnCT-title .swiper {
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <div class="duAnCT-title">
        <div class="swiper mySwiper-title">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="p-10 bg-[#142D65] showDialog text-left absolute">
                        <p class="text-white mt-3 text-3xl font-extrabold pb-5">
                            KHU THƯƠNG MẠI
                        </p>
                        <p class="text-white mt-2 leading-8 text-white text-sm font-normal">
                            Dự án sở hữu tuyến phố thương mại mở ngoài trời sầm uất, nhộn
                            nhịp, đầy sắc màu, được bố trí giữa lòng dự án.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-10 bg-[#142D65] showDialog text-left absolute">
                        <p class="text-white mt-3 text-3xl font-extrabold pb-5">
                            aaaaa
                        </p>
                        <p class="text-white mt-2 leading-8 text-white text-sm font-normal">
                            Dự án sở hữu tuyến phố thương mại mở ngoài trời sầm uất, nhộn
                            nhịp, đầy sắc màu, được bố trí giữa lòng dự án.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-10 bg-[#142D65] showDialog text-left absolute">
                        <p class="text-white mt-3 text-3xl font-extrabold pb-5">
                            bbbb
                        </p>
                        <p class="text-white mt-2 leading-8 text-white text-sm font-normal">
                            Dự án sở hữu tuyến phố thương mại mở ngoài trời sầm uất, nhộn
                            nhịp, đầy sắc màu, được bố trí giữa lòng dự án.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper-title", {
        slidesPerView: 1,
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    </script>
</body>

</html>