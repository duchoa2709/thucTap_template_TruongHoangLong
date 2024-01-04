<style>
.mySwiper-linhVucHoatDong .swiper-slide {
    height: 430px;
    width: 25%;
    padding-top: 50px;
    padding-bottom: 50px;
    overflow: visible;
    align-items: center;
    transition: transform 0.5s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* .mySwiper-linhVucHoatDong .swiper{
    position: relative;
} */

.mySwiper-linhVucHoatDong .swiper-slide img {
    width: 241px;
    height: 311px;
}

.mySwiper-linhVucHoatDong .swiper-slide-active {
    font-weight: 700;
    padding: 0;
    width: 50%;
    transform: scale(1.2);
    height: 100%;
    /* Thêm dòng này */
}

.mySwiper-linhVucHoatDong .swiper-slide-active img {
    width: 100%;
    height: 400px;
}

.polygon-right .swiper-button-prev:after {
    content: url('./public/images/history/button1.png');
    position: absolute;
    top: 0;
    left: 18rem;
    transform: translate(-50%, -50%) rotate(180deg);
}

.polygon-right .swiper-button-next:after {
    content: url('./public/images/history/button1.png');
    position: absolute;
    top: 27px;
    right: 18rem;
    transform: translate(50%, -50%);
}

.bg-linhVucHoatDong {
    position: relative;
}

.bg-linhVucHoatDong::before {
    content: url('./public/images/history/ourservieces.png');
    position: absolute;
    top: 0;
    left: 200px;
}


.polygon-right {
    position: relative;
}
</style>

<body>
    <div
        class="bg-[url('./public/images/history/bglinhvuchoatdong.png')] bg-no-repeat bg-cover bg-center md:h-full polygon-right">
        <div class="container mx-auto px-40 py-36">
            <!-- title -->
            <div class="text-center bg-linhVucHoatDong pb-10">
                <p class="text-white">
                    TRƯƠNG HOÀNG LONG
                </p>
                <h1 class="text-white text-5xl font-thin">
                    LĨNH VỰC
                    <span class="font-bold">
                        HOẠT ĐỘNG
                    </span>
                </h1>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper-linhVucHoatDong pt-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./public/images/history/chungNhan2.png" />
                        <p class="text-center text-[14px] pt-5 text-white">
                            Đạt top 10 thương hiệu, sản phẩm uy tín ngành xây dựng Việt Nam
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img src="./public/images/history/chungNhan1.png" />
                        <p class="text-center text-[14px] pt-5 text-white">
                            Đạt top 10 thương hiệu, sản phẩm uy tín ngành xây dựng Việt Nam
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img src="./public/images/history/chungNhan3.png" />
                        <p class="text-center text-[14px] pt-5 text-white">
                            Đạt top 10 thương hiệu, sản phẩm uy tín ngành xây dựng Việt Nam
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img src="./public/images/history/chungNhan2.png" />
                        <p class="text-center text-[14px] pt-5 text-white">
                            Đạt top 10 thương hiệu, sản phẩm uy tín ngành xây dựng Việt Nam
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img src="./public/images/history/chungNhan3.png" />
                        <p class="text-center text-[14px] pt-5 text-white">
                            Đạt top 10 thương hiệu, sản phẩm uy tín ngành xây dựng Việt Nam
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper-linhVucHoatDong", {
        effect: "coverflow",
        slidesPerView: 3,
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        spaceBetween: 150,
        initialSlide: 1, /* Thêm dòng này */
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
    });
    </script>
</body>