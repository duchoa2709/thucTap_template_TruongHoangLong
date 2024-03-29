<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./public/css/styleIndex.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Your custom styles -->
    <style>
    /* For Chrome, Safari and Opera */
    body::-webkit-scrollbar {
        width: 12px;
        /* Chiều rộng của thanh cuộn */
    }

    body::-webkit-scrollbar-track {
        background: #ff0000;
        /* Màu nền của thanh cuộn */
    }

    body::-webkit-scrollbar-thumb {
        background: #1b2c65;
        /* Màu của thanh cuộn */
    }

    body::-webkit-scrollbar-thumb:hover {
        background: #111c40;
        /* Màu của thanh cuộn khi hover chuột */
    }

    /* For IE and Edge */
    body {
        scrollbar-width: thin;
        /* Độ rộng của thanh cuộn */
        scrollbar-color: #ff0000 #1b2c65;
        /* Màu của thanh cuộn */
    }
    </style>
</head>

<body>

    <!-- header navbar -->
    <div class="flex items-center sticky top-0 w-full bg-white z-50">
        <div class="container mx-auto px-40">
            <div class="flex items-center justify-center">
                <div class="mr-20">
                    <!-- Hình ảnh logo -->
                    <img src="./public/images/LogoHeader.jpg" alt="">
                </div>
                <div>
                    <!-- Danh mục -->
                    <ul class="flex">
                        <li class="ml-12"><a href="index.php" class="text-[#1c2c67] font-bold">TRANG CHỦ</a></li>
                        <li class="ml-12"><a href="gioiThieu.php" class=" hover:text-[#1c2c67]">GIỚI THIỆU</a></li>
                        <li class="ml-12"><a href="duAn.php" class=" hover:text-[#1c2c67]">DỰ ÁN</a></li>
                        <li class="ml-12"><a href="linhVucKinhDoanh.php" class=" hover:text-[#1c2c67]">LĨNH VỰC HOẠT
                                ĐỘNG</a></li>
                        <li class="ml-12"><a href="coDong.php" class=" hover:text-[#1c2c67]">CỔ ĐÔNG</a></li>
                        <li class="ml-12"><a href="tuyenDung.php" class=" hover:text-[#1c2c67]">TUYỂN DỤNG</a></li>
                        <li class="ml-12"><a href="" class=" hover:text-[#1c2c67]">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-[#1b2c65]">
            <div class="grid grid-cols-3 divide-x">
                <button class="py-8 px-6">
                    <img class="m-auto" src="./public/images/Search.svg" alt="">
                </button>
                <!-- Tìm Kiếm -->
                <button class="py-8 px-6">
                    <!-- Liên Hệ -->
                    <img class="m-auto" src="./public/images/Phone.svg" alt="">
                </button>
                <button class="py-8 px-6">
                    <!-- Ngôn ngữ -->
                    <div class="flex text-white m-auto">
                        <a href="#">EN</a>
                        <div class="mx-2">|</div>
                        <a href="#">VI</a>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <!-- end header navbar -->
</body>

</html>