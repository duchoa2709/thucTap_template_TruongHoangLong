<style>
.congTyThanhVien .bg-partners {
    position: relative;
}

.congTyThanhVien .bg-partners::before {
    content: url('./public/images/history/PARTNERS.png');
    position: absolute;
    top: -7px;
    left: 17rem;
}

.congTyThanhVien .swiper {
    width: 100%;
    height: 100%;
}

.congTyThanhVien .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.congTyThanhVien .swiper-slide img {
    display: block;
    height: 90px;
}

.congTyThanhVien .swiper {
    margin-left: auto;
    margin-right: auto;
}

.congTyThanhVien {
    position: relative;
}

.congTyThanhVien .swiper-button-prev:after {
    content: url('./public/images/history/CaretRight.png');
    position: absolute;
    top: 55px;
    left: 0;
    transform: rotate(180deg);
}

.congTyThanhVien .swiper-button-next:after {
    content: url('./public/images/history/CaretRight.png');
    position: absolute;
    top: 60px;
    right: 0;
}
</style>

<div class="container px-40 mx-auto my-40 congTyThanhVien">
    <div class="text-center bg-partners">
        <div class="text-stone-500 font-thin">
            HỢP TÁC & PHÁT TRIỂN
        </div>
        <p class="text-[#1b2c65] text-5xl font-thin">
            CÔNG TY
            <span class="font-bold">
                THÀNH VIÊN
            </span>
        </p>
    </div>


    <!-- Swiper -->
    <div class="swiper mySwiper mt-20">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex flex-col">
                <div class="flex items-center gap-7 border-b-2 pb-5 w-full">
                    <div class="w-1/3">
                        <img src="./public/images/history/logo-nhamientay 1.png" alt="">
                    </div>
                    <div class="w-2/3">
                        <div class="text-slate-950 text-lg font-bold text-left">
                            CÔNG TY CP ĐT XÂY DỰNG & NĂNG LƯỢNG MIỀN TÂY
                        </div>
                    </div>
                </div>
                <div class="text-left flex flex-col w-full">
                    <p class="my-5">
                        <span class="text-slate-950 font-bold">Địa chỉ:</span>Số 140 Đường số 03, Khu nhà ở cán bộ đại
                        học Cần Thơ, An Khánh, Ninh Kiều, TP.Cần Thơ
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Điện thoại:</span> 0272 389 8888
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Email:</span>nhamientay.nmt@gmail.com
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Website:</span> www.nhamientay.vn
                    </p>
                </div>
            </div>
            <div class="swiper-slide flex flex-col">
                <div class="flex items-center gap-7 border-b-2 pb-5 w-full">
                    <div class="w-1/3">
                        <img src="./public/images/history/Logo_Truonghoanglong 1.png" alt="">
                    </div>
                    <div class="w-2/3">
                        <div class="text-slate-950 text-lg font-bold text-left">
                        CÔNG TY TRÁCH NHIỆM HỮU HẠN HIQ LAND
                        </div>
                    </div>
                </div>
                <div class="text-left flex flex-col w-full">
                    <p class="my-5">
                        <span class="text-slate-950 font-bold">Địa chỉ:</span>417 Đường Tạ Quang Bửu, Phường 2, Quận 8, Thành phố Hồ Chí Minh, Việt Nam
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Điện thoại:</span> 0963812359
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Email:</span>info@hiqland.vn
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Website:</span> www.thl.com
                    </p>
                </div>
            </div>
            <div class="swiper-slide flex flex-col">
                <div class="flex items-center gap-7 border-b-2 pb-5">
                    <div class="w-1/3">
                        <img src="./public/images/history/logo-nhamientay 1.png" alt="">
                    </div>
                    <div class="w-2/3">
                        <div class="text-slate-950 text-lg font-bold text-left">
                            CÔNG TY CP ĐT XÂY DỰNG & NĂNG LƯỢNG MIỀN TÂY
                        </div>
                    </div>
                </div>
                <div class="text-left flex flex-col w-full">
                    <p class="my-5">
                        <span class="text-slate-950 font-bold">Địa chỉ:</span>Số 140 Đường số 03, Khu nhà ở cán bộ đại
                        học Cần Thơ, An Khánh, Ninh Kiều, TP.Cần Thơ
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Điện thoại:</span> 0272 389 8888
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Email:</span>nhamientay.nmt@gmail.com
                    </p>
                    <p>
                        <span class="text-slate-950 font-bold">Website:</span> www.nhamientay.vn
                    </p>
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
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>