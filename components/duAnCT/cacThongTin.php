<style>
.active-navigation-thongtin {
    color: #1b2c65;
    font-weight: bold;
}

.bg-cacthongtin {
    position: relative;
}

.bg-cacthongtin::after {
    content: "";
    position: absolute;
    z-index: -2;
    background-image: url("./public/images/duAnCT/bg-cacthongtin.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    filter: grayscale(100%);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.bg-cacthongtin::before {
    content: "";
    background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 20%, rgba(255, 255, 255, 0) 80%, rgba(255, 255, 255, 1) 100%);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
</style>

<div class="container mx-auto px-40 z-10 mt-40 mb-20">
    <div class="w-full border-y py-3">
        <ul class="flex gap-20">
            <li class="active-navigation-thongtin"><a href="">THÔNG TIN DỰ ÁN</a></li>
            <li><a href="">TIẾN ĐỘ DỰ ÁN</a></li>
            <li><a href="">DOWNLOAD PROFILE</a></li>

        </ul>
    </div>
</div>
<div class="bg-cacthongtin">
    <div class="container mx-auto px-40 z-10 mb-20">
        <div class="my-10">
            <div class="text-blue-950 text-3xl font-bold">Khu phức hợp Marina City</div>
            <div class="text-sm font-medium my-5 leading-8">
                Dự án khu phức hợp nghỉ dưỡng Marina City được định hướng phát triển thành mô hình đô thị du lịch nghỉ
                dưỡng
                giải trí với quy mô 600 ha. Tại đây sẽ cung cấp các hình thức lưu trú cực kỳ đa dạng như nhà phố, biệt
                thự,
                khách sạn, resort… Đặc biệt Marina City còn hội tụ được đầy đủ chuỗi tiện ích giải trí đẳng cấp lần đầu
                tiên
                xuất hiện tại tỉnh Bình Thuận như: 2 sân gôn 18 lỗ tiêu chuẩn quốc tế, cụm các công viên chủ đề, công
                viên
                nước, vườn thú petting zoo…
            </div>
        </div>


        <div class="text-4xl font-bold text-center text-[#1b2c65] my-10">
            Có thể bạn quan tâm
        </div>

        <style>
        .swiperCacThongTin {
            width: 100%;
            height: 348px;
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
            content: url("public/images/duAnCT/arrow_forward_ios.png");
            width: 50px;
            height: 50px;
            position: absolute;
            left: -8rem;
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            content: url("public/images/duAnCT/arrow_forward_ios.png");
            width: 50px;
            height: 50px;
            position: absolute;
            right: -8rem;
            transform: rotate(180deg);
        }
        </style>
        </head>
        <div class="cacThongTin relative">
            <!-- Swiper -->
            <div class="swiper swiperCacThongTin">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="    relative h-[348px]">
                            <img class="w-[386px] h-[243px] z-0" src="./public/images/duAn/1.png" />
                            <div
                                class="w-[352px] h-[130px] z-10 bg-white shadow title-items absolute bottom-0 left-[18px] py-6 px-8 m-auto border-b-4 border-red-500">
                                <div class="text-zinc-800 font-normal text-base mr-10">
                                    KHU CÔNG NGHIỆP PHÚ MỸ 3, BR-VT
                                </div>
                                <a href="#"
                                    class="text-[#1b2c65] font-bold block hover:underline hover:text-[#ff0000] mt-3">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative h-[348px]">
                            <img class="w-[386px] h-[243px] z-0" src="./public/images/duAn/1.png" />
                            <div
                                class="w-[352px] h-[130px] z-10 bg-white shadow title-items absolute bottom-0 left-[18px] py-6 px-8 m-auto border-b-4 border-red-500">
                                <div class="text-zinc-800 font-normal text-base mr-10">
                                    KHU CÔNG NGHIỆP PHÚ MỸ 3, BR-VT
                                </div>
                                <a href="#"
                                    class="text-[#1b2c65] font-bold block hover:underline hover:text-[#ff0000] mt-3">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="    relative h-[348px]">
                            <img class="w-[386px] h-[243px] z-0" src="./public/images/duAn/1.png" />
                            <div
                                class="w-[352px] h-[130px] z-10 bg-white shadow title-items absolute bottom-0 left-[18px] py-6 px-8 m-auto border-b-4 border-red-500">
                                <div class="text-zinc-800 font-normal text-base mr-10">
                                    KHU CÔNG NGHIỆP PHÚ MỸ 3, BR-VT
                                </div>
                                <a href="#"
                                    class="text-[#1b2c65] font-bold block hover:underline hover:text-[#ff0000] mt-3">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="    relative h-[348px]">
                            <img class="w-[386px] h-[243px] z-0" src="./public/images/duAn/1.png" />
                            <div
                                class="w-[352px] h-[130px] z-10 bg-white shadow title-items absolute bottom-0 left-[18px] py-6 px-8 m-auto border-b-4 border-red-500">
                                <div class="text-zinc-800 font-normal text-base mr-10">
                                    KHU CÔNG NGHIỆP PHÚ MỸ 3, BR-VT
                                </div>
                                <a href="#"
                                    class="text-[#1b2c65] font-bold block hover:underline hover:text-[#ff0000] mt-3">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative h-[348px]">
                            <img class="w-[386px] h-[243px] z-0" src="./public/images/duAn/1.png" />
                            <div
                                class="w-[352px] h-[130px] z-10 bg-white shadow title-items absolute bottom-0 left-[18px] py-6 px-8 m-auto border-b-4 border-red-500">
                                <div class="text-zinc-800 font-normal text-base mr-10">
                                    KHU CÔNG NGHIỆP PHÚ MỸ 3, BR-VT
                                </div>
                                <a href="#"
                                    class="text-[#1b2c65] font-bold block hover:underline hover:text-[#ff0000] mt-3">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".swiperCacThongTin", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>