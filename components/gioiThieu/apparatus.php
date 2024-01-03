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
    .bg-initiator {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.5970763305322129) 0%, rgba(245, 246, 252, 0.7959558823529411) 50%, rgba(227, 231, 246, 1) 100%);
    }

    .swiper-slide {
        text-align: left;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide:nth-child(odd) {
        margin-top: 50px;
    }

    .apparatus {
        position: relative;
    }

    .apparatus .swiper-button-next:after {
        content: url('./public/images/gioithieu/Arrow.png');
        position: absolute;
        top: 50%;
        left: 300%;
        transform: translate(-50%, -50%) rotate(180deg);
        width: 40px;
        height: 40px;
        color: #333;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .apparatus .swiper-button-prev:after {
        content: url('./public/images/gioithieu/Arrow.png');
        position: absolute;
        top: 50%;
        left: -300%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        color: #333;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        padding: 5px;
        display: flex;
    }

    .title-apparatus {
        position: relative;
    }

    .title-apparatus::before {
        content: url('./public/images/gioithieu/apparatus.png');
        position: absolute;
        top: 0;
        left: 74%;
        transform: translateX(-50%);
        width: 100%;
        height: 100%;
    }

    .textbg-initiator {
        position: relative;
    }

    .textbg-initiator::before {
        position: absolute;
        content: url('./public/images/gioithieu/initiator.png');
        width: 100%;
        height: 100%;
        top: 0;
        left: 10px;
    }

    .content-initiator .short-description-initiator {
        position: relative;
    }

    .content-initiator .short-description-initiator::before {
        position: absolute;
        content: url('./public/images/gioithieu/“.png');
        width: 100%;
        height: 100%;
        top: 30px;
        left: -80px;
    }

    .polygon-right {
        position: relative;
    }

    .polygon-right::before {
        content: url('./public/images/gioithieu/polygonright.png');
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(458%, -35%);
    }
    </style>
</head>

<body>
    <div class="bg-initiator">
        <div class="container mx-auto px-40 py-96">
            <section class="initiator pb-52">
                <div class="flex polygon-right">
                    <div class="w-1/2">
                        <img src="./public\images\gioithieu\chuTich.png" alt="">
                    </div>
                    <div class="w-1/2 text-left">
                        <p class="text-[#666666] text-lg py-7 textbg-initiator">
                            VỀ CHÚNG TÔI
                        </p>
                        <p class="text-[#1b2c65] text-4xl font-thin pb-2">
                            THÔNG ĐIỆP
                        </p>
                        <p class="text-[#1b2c65] text-4xl font-bold">
                            TỪ CHỦ TỊCH
                        </p>
                        <div class="content-initiator">
                            <p
                                class="text-[#666666] text-lg ml-20 mt-10 py-7 w-11/12 font-semibold short-description-initiator ">
                                <i>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.
                                </i>
                            </p>
                            <p class="text-[#333] mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae qui molestias, rerum
                                placeat
                                aut incidunt sint. Temporibus quam tempore beatae rerum perspiciatis obcaecati dolore.
                                Quas
                                distinctio facere facilis quos suscipit.
                            </p>

                            <p class="text-[#333] mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae illo unde natus
                                laborum
                                itaque eveniet odio! Nulla tempore eaque ipsa ut eligendi nisi, vero et deserunt,
                                adipisci
                                quos facilis officiis?
                            </p>

                            <p class="text-[#333] mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias sapiente blanditiis,
                                quibusdam ad omnis voluptates est illum tempora porro aperiam praesentium rerum,
                                eligendi
                                molestiae laudantium laboriosam modi minima optio laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Swiper -->
            <section class=" apparatus">
                <div class="title-apparatus pb-28">
                    <p class="text-[#666666] text-lg text-center pb-2">
                        ĐỘI NGŨ
                    </p>
                    <p class="text-[#1b2c65] text-4xl font-bold text-center">
                        <span class="font-normal">
                            BAN
                        </span>
                        LÃNH ĐẠO
                    </p>
                </div>
                <div class="swiper swiper-apparatus">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./public/images/gioithieu/NGUYỄN HÀ ANH.png" alt=""
                                class="w-[267px] h-[353px] object-cover mb-8">
                            <p class="text-[#1b2c65] text-2xl font-bold text-left">
                                NGUYỄN HÀ ANH
                            </p>
                            <p class="text-[#666666] text-lg">
                                Phó Giám Đốc
                            </p>
                        </div>
                        <div class="swiper-slide"><img src="./public/images/gioithieu/Lưu Thanh Tuấn.png" alt=""
                                class="w-[267px] h-[353px] object-cover mb-8">
                            <p class="text-[#1b2c65] text-2xl font-bold">
                                LƯU THANH TUẤN
                            </p>
                            <p class="text-[#666666] text-lg">
                                Giám Đốc Điều Hành
                            </p>
                        </div>
                        <div class="swiper-slide"><img src="./public/images/gioithieu/TRẦN HUỲNH ANH.png" alt=""
                                class="w-[267px] h-[353px] object-cover mb-8">
                            <p class="text-[#1b2c65] text-2xl font-bold">
                                TRẦN HUỲNH ANH
                            </p>
                            <p class="text-[#666666] text-lg">
                                Quản Lí Dự Án
                            </p>
                        </div>
                        <div class="swiper-slide"><img src="./public/images/gioithieu/HUỲNH ĐỨC TOÀN.png" alt=""
                                class="w-[267px] h-[353px] object-cover mb-8">
                            <p class="text-[#1b2c65] text-2xl font-bold">
                                HUỲNH ĐỨC TOÀN
                            </p>
                            <p class="text-[#666666] text-lg">
                                Giám Sát Công Trình
                            </p>
                        </div>
                        <div class="swiper-slide"><img src="./public/images/gioithieu/phanduchoa.jpg" alt=""
                                class="w-[267px] h-[353px] object-cover mb-8">
                            <p class="text-[#1b2c65] text-2xl font-bold">
                                Phan Đức Hòa
                            </p>
                            <p class="text-[#666666] text-lg">
                                Chủ Tịch HĐQT
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </section>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".swiper-apparatus", { // khởi tạo swiper
        slidesPerView: 1, // số lượng slide được hiển thị trên màn hình
        spaceBetween: 10, // khoảng cách giữa các slide
        rewind: true, // cho phép lặp lại các slide
        navigation: {
            nextEl: '.swiper-button-next', // nút điều hướng slide kế tiếp
            prevEl: '.swiper-button-prev', // nút điều hướng slide trước đó
        },
        breakpoints: { // thiết lập responsive cho các màn hình có độ rộng khác nhau
            "@0.00": { // từ 0px trở xuống
                slidesPerView: 1, // số lượng slide được hiển thị
                spaceBetween: 10, // khoảng cách giữa các slide
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
    </script>
</body>

</html>