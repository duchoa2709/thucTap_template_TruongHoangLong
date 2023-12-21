<head>
    <!-- Demo styles -->
    <style>
    .sw-news .swiper {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
    }

    .sw-news .swiper-slide {
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

    .sw-news .swiper-slide img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }

    .sw-news .swiper-button-prev:after {
        content: "";
        position: absolute;
        top: 0%;
        left: -400% !important;
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

    .sw-news .swiper-button-next::after {
        content: "";
        position: absolute;
        top: 0%;
        left: 400% !important;
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

    .sw-news .swiper-button-next {
        right: 20px;
    }

    .sw-news .swiper-button-prev {
        left: 20px;
    }

    /* Increase width for active slide */
    .sw-news .swiper-slide.swiper-slide-active {
        width: 48% !important;
    }

    .sw-news {
        padding-top: 40px;
        position: relative;
    }

    .sw-news .img-news {
        background: linear-gradient(180deg, rgba(251, 251, 251, 0) 0%, rgba(251, 251, 251, 0) 40%, rgba(0, 0, 0, 1) 100%);
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

    .sw-news .text-news {
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