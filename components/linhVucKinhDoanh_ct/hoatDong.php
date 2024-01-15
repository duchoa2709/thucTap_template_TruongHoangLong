<div class="container mx-auto px-40 mt-40 mb-20">
    <div class="text-center">
        <div class="text-center bg-left-polygon">
            <div class="relative">
                <img src="./public/images/linhVucKinhDoanh_ct/album.png" alt="" class="absolute top-[7px] left-[26rem]">
                <p class="text-[#666666] text-xl">
                    HOẠT ĐỘNG
                </p>
                <p class="text-[#1B2C65] leading-8 text-5xl mt-4 mb-8 font-light">
                    THƯ VIỆN
                    <span class="font-bold">
                        HÌNH ẢNH
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
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
    width: 1200px;
    /* Set the width */
    height: 677px;
    /* Set the height */
}

.test .swiper-slide:after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 677px;
    background: rgba(0, 0, 0, 0.5);
}

.test .swiper-slide-active:after {
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

.swiper-button-prev:after,
.swiper-rtl .swiper-button-next:after {
    content: 'prev';
    color: white;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 19px 25px;
    font-size: 18px;
    font-weight: 700;
    margin-left: 25rem;
}

.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
    content: 'next';
    color: white;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 19px 25px;
    font-size: 18px;
    font-weight: 700;
    margin-right: 25rem;
}
</style>
</head>

<!-- Swiper -->
<div class="test">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 131.png" alt=""></div>
            <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 134.png" alt=""></div>
            <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt=""></div>
            <div class="swiper-slide"><img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt=""></div>
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
    spaceBetween: 50,
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