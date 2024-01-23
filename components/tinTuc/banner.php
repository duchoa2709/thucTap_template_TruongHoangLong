<style>
.banner__content a {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}

.banner__content a:hover {
    color: #fff;
    text-decoration: underline;
}

.banner__content span {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}

.banner_background {
    background-image: url('./public/images/tinTuc/banner.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 700px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    position: relative;
}

.banner_background::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0.6446953781512605) 100%);
    z-index: 1;
}

.img-tinTucChinh {
    position: relative;
}

.img-tinTucChinh::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.6446953781512605) 100%);
    z-index: 1;
}

.tinTuc_title {
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
}
</style>

<section class="mb-[25rem]">
    <div class="banner_background">
        <div class="container mx-auto px-40 z-10 relative mb-52">
            <div class="row">
                <div class="col-12">
                    <div class="banner__content pb-16">
                        <h1 class="font-extrabold text-5xl text-white">TIN TỨC</h1>
                        <div class="flex mt-7 text-zinc-300 font-semibold">
                            <a href="#" class="">Trang chủ</a>
                            <span class="mx-2">></span>
                            <a href="#">Dự Án</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tinTucChinh -->
            <div class="flex absolute top-[120px]">
                <div class="w-3/5 img-tinTucChinh">
                    <img class="h-full w-full object-cover" src="./public/images/tinTuc/anh1.png" />
                    <div class="tinTuc_title pl-10 pr-20 pb-5">
                        <!-- date -->
                        <div class="flex justify-between items-center mb-3 opacity-90 text-white">
                            23, tháng 02, 2022
                        </div>
                        <!-- title -->
                        <div class="text-white text-xl font-bold mb-3">
                            TRÚNG THẦU DỰ ÁN VĂN PHÒNG C.P. GROUP TRÚNG THẦU DỰ ÁN THẦU DỰ ...
                        </div>
                    </div>
                </div>
                <div class="w-2/5">
                    <div class="flex flex-col">
                        <div class="h-1/2 img-tinTucChinh">
                            <img class="h-full w-full object-cover" src="./public/images/tinTuc/thongTin2.png" alt="">
                            <div class="tinTuc_title pl-10 pr-40 pb-5 mb-3 text-[15px]">
                                <!-- date -->
                                <div class="flex justify-between items-center mb-3 opacity-90 text-white">
                                    23, tháng 02, 2022
                                </div>
                                <!-- title -->
                                <div class="text-white font-bold ">
                                    LỄ KHỞI CÔNG DỰ ÁN THE METROPOLE; 3 TÒA THÁP CĂN HỘ
                                </div>
                            </div>
                        </div>
                        <div class="h-1/2 img-tinTucChinh">
                            <img class="h-full w-full object-cover" src="./public/images/tinTuc/thongTin3.png" alt="">
                            <div class="tinTuc_title pl-10 pr-40 pb-5 text-[15px] mb-3">
                                <!-- date -->
                                <div class="flex justify-between items-center mb-3 opacity-90 text-white">
                                    23, tháng 02, 2022
                                </div>
                                <!-- title -->
                                <div class="text-white font-bold">
                                    LỄ KHỞI CÔNG DỰ ÁN KHU PHỨC HỢP VỊNH ĐẦM SELAVIA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>