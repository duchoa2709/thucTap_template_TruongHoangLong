<style>
.tienIch {
    position: relative;
}

.tienIch::before {
    content: "";
    top: 10px;
    left: 22.5rem;
    position: absolute;
    width: 31rem;
    height: 100%;
    background: url("./public/images/duAnCT/utilities.png");
    z-index: 1;
    background-repeat: no-repeat;
}

.test .swiper {
    width: 100%;
    height: 677px;
    position: static;
}

.test .mySwiper-content {
    width: 449px;
    height: 248px;
    position: absolute;
    top: 33rem;
    right: 68rem;
}

.test .mySwiper .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1200px;
    /* Set the width */
    height: 677px;
    /* Set the height */
}

.test .mySwiper-content .swiper-slide {
    position: absolute;
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.test .swiper-slide .img-slide-tienIch::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 677px;
    background: rgba(0, 0, 0, 0.5);
}

.test .swiper-slide-active .img-slide-tienIch::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 677px;
    background: rgba(0, 0, 0, 0);
}

.test .swiper-wrapper img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.img-slide-tienIch {
    width: 100%;
    height: 677px;
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
}

.duAnCT-title .swiper {
    margin-left: auto;
    margin-right: auto;
}

.duAnCT-title {
    position: absolute;
    top: 550px;
    left: -180px;
    width: 100%;
    height: 680px;
}
</style>

<div class="container mx-auto px-40 z-10 mt-40 mb-20">
    <div class="text-center">
        <div class="tienIch">
            <p class="text-[#666666] text-xl">TIỆN ÍCH NỘI KHU</p>
            <p class="text-[#1B2C65] leading-8 text-5xl mt-4 mb-8 font-bold">
                TIỆN ÍCH
                <span class="font-light">
                    HOÀN HẢO
                </span>
            </p>
        </div>
        <p class="text-[#666666] text-xl">
            Với đẳng cấp 5 sao phục vụ những dịch vụ tốt nhất, Khu phúc hợp Marina City cam kết sẽ làm hài lòng những vị
            khách khó tính nhất với huỗi tiện ích cao cấp.
        </p>
    </div>
</div>

<!-- Swiper -->
<div class="test mt-10 mb-40 relative">
    <div class="swiper mySwiper static">
        <div class="swiper-wrapper static">
            <div class="swiper-slide">
                <div class="img-slide-tienIch">
                    <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 131.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="img-slide-tienIch">
                    <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 134.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="img-slide-tienIch">
                    <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="img-slide-tienIch">
                    <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="img-slide-tienIch">
                    <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                </div>
            </div>
        </div>
    </div>
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
                            KHU THƯƠNG MẠI
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
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper1 = new Swiper(".mySwiper", {
    slidesPerView: 'auto',
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    spaceBetween: 30,
    simulateTouch: false, // Tắt chức năng kéo slide
});

var swiper2 = new Swiper(".mySwiper-title", {
    slidesPerView: 1,
    // effect: "fade", // Hiệu ứng fade đã được kích hoạt
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    simulateTouch: false, // Tắt chức năng kéo slide
});
</script>