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
    position: relative;
}

.test .swiper-slide:after {
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

.showDialog {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    position: absolute;
    bottom: 52px;
    left: -176px;
    width: 349px;
    height: 439px;
}

.showDialog.show {
    opacity: 1;
}
</style>
</head>

<!-- Swiper -->
<div class="test mt-10">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 131.png" alt="">
                <div class="p-10 bg-[#142D65] showDialog text-left">
                    <p class="text-white">
                        BĐS nghỉ dưỡng cao cấp
                    </p>
                    <p class="text-white mt-4 text-3xl font-bold border-b pb-5">
                        TMS LUXURY ĐÀ NẴNG – ĐẲNG CẤP LÀ KHÁC BIỆT
                    </p>
                    <p class="text-white mt-4 text-xl font-light leading-8">
                        <?php
                            $text = "Khởi nguồn cảm hững từ nét đẹp kiến trúc Nhật Bản với mong muốn mang đến giá trị sống đẳng cấp cùng lợi ích đầu tư hấp dẫn, TMS Luxury Đà Nẵng đang là dự án được mong chờ nhất trong năm 2017. Sở hữu nhiều ưu thế vượt trội, dự án được kỳ vọng trở thành một biểu tượng nghỉ dưỡng thượng lưu mới của thành phố đáng sống Đà Nẵng, đồng thời mở ra cơ hội đầu tư có một không hai.";
                            $limitedText = mb_strimwidth($text, 0, 100, "...");
                            echo $limitedText; 
                        ?>
                    </p>
                    <a href="#" class="text-white font-bold mt-4 block hover:underline hover:text-[#ff0000]">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 134.png" alt="">
                <div class="p-10 bg-[#142D65] showDialog text-left">
                    <p class="text-white">
                        BĐS nghỉ dưỡng cao cấp
                    </p>
                    <p class="text-white mt-4 text-3xl font-bold border-b pb-5">
                        TMS LUXURY ĐÀ NẴNG – ĐẲNG CẤP LÀ KHÁC BIỆT
                    </p>
                    <p class="text-white mt-4 text-xl font-light leading-8">
                        <?php
                            $text = "Khởi nguồn cảm hững từ nét đẹp kiến trúc Nhật Bản với mong muốn mang đến giá trị sống đẳng cấp cùng lợi ích đầu tư hấp dẫn, TMS Luxury Đà Nẵng đang là dự án được mong chờ nhất trong năm 2017. Sở hữu nhiều ưu thế vượt trội, dự án được kỳ vọng trở thành một biểu tượng nghỉ dưỡng thượng lưu mới của thành phố đáng sống Đà Nẵng, đồng thời mở ra cơ hội đầu tư có một không hai.";
                            $limitedText = mb_strimwidth($text, 0, 100, "...");
                            echo $limitedText; 
                        ?>
                    </p>
                    <a href="#" class="text-white font-bold mt-4 block hover:underline hover:text-[#ff0000]">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                <div class="p-10 bg-[#142D65] showDialog text-left">
                    <p class="text-white">
                        BĐS nghỉ dưỡng cao cấp
                    </p>
                    <p class="text-white mt-4 text-3xl font-bold border-b pb-5">
                        TMS LUXURY ĐÀ NẴNG – ĐẲNG CẤP LÀ KHÁC BIỆT
                    </p>
                    <p class="text-white mt-4 text-xl font-light leading-8">
                        <?php
                            $text = "Khởi nguồn cảm hững từ nét đẹp kiến trúc Nhật Bản với mong muốn mang đến giá trị sống đẳng cấp cùng lợi ích đầu tư hấp dẫn, TMS Luxury Đà Nẵng đang là dự án được mong chờ nhất trong năm 2017. Sở hữu nhiều ưu thế vượt trội, dự án được kỳ vọng trở thành một biểu tượng nghỉ dưỡng thượng lưu mới của thành phố đáng sống Đà Nẵng, đồng thời mở ra cơ hội đầu tư có một không hai.";
                            $limitedText = mb_strimwidth($text, 0, 100, "...");
                            echo $limitedText; 
                        ?>
                    </p>
                    <a href="#" class="text-white font-bold mt-4 block hover:underline hover:text-[#ff0000]">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                <div class="p-10 bg-[#142D65] showDialog text-left">
                    <p class="text-white">
                        BĐS nghỉ dưỡng cao cấp
                    </p>
                    <p class="text-white mt-4 text-3xl font-bold border-b pb-5">
                        TMS LUXURY ĐÀ NẴNG – ĐẲNG CẤP LÀ KHÁC BIỆT
                    </p>
                    <p class="text-white mt-4 text-xl font-light leading-8">
                        <?php
                            $text = "Khởi nguồn cảm hững từ nét đẹp kiến trúc Nhật Bản với mong muốn mang đến giá trị sống đẳng cấp cùng lợi ích đầu tư hấp dẫn, TMS Luxury Đà Nẵng đang là dự án được mong chờ nhất trong năm 2017. Sở hữu nhiều ưu thế vượt trội, dự án được kỳ vọng trở thành một biểu tượng nghỉ dưỡng thượng lưu mới của thành phố đáng sống Đà Nẵng, đồng thời mở ra cơ hội đầu tư có một không hai.";
                            $limitedText = mb_strimwidth($text, 0, 100, "...");
                            echo $limitedText; 
                        ?>
                    </p>
                    <a href="#" class="text-white font-bold mt-4 block hover:underline hover:text-[#ff0000]">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="./public/images/linhVucKinhDoanh_ct/Rectangle 133.png" alt="">
                <div class="p-10 bg-[#142D65] showDialog text-left">
                    <p class="text-white">
                        BĐS nghỉ dưỡng cao cấp
                    </p>
                    <p class="text-white mt-4 text-3xl font-bold border-b pb-5">
                        TMS LUXURY ĐÀ NẴNG – ĐẲNG CẤP LÀ KHÁC BIỆT
                    </p>
                    <p class="text-white mt-4 text-xl font-light leading-8">
                        <?php
                            $text = "Khởi nguồn cảm hững từ nét đẹp kiến trúc Nhật Bản với mong muốn mang đến giá trị sống đẳng cấp cùng lợi ích đầu tư hấp dẫn, TMS Luxury Đà Nẵng đang là dự án được mong chờ nhất trong năm 2017. Sở hữu nhiều ưu thế vượt trội, dự án được kỳ vọng trở thành một biểu tượng nghỉ dưỡng thượng lưu mới của thành phố đáng sống Đà Nẵng, đồng thời mở ra cơ hội đầu tư có một không hai.";
                            $limitedText = mb_strimwidth($text, 0, 100, "...");
                            echo $limitedText; 
                        ?>
                    </p>
                    <a href="#" class="text-white font-bold mt-4 block hover:underline hover:text-[#ff0000]">
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
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
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    spaceBetween: 30,
});

function showDialogForActiveSlide() {
    var allDialogs = document.querySelectorAll('.showDialog');
    allDialogs.forEach(function(dialog) {
        dialog.classList.remove('show');
    });

    var activeSlide = document.querySelector('.swiper-slide-active');
    var dialog = activeSlide.querySelector('.showDialog');
    dialog.classList.add('show');
}

swiper.on('slideChangeTransitionEnd', showDialogForActiveSlide);

// Show dialog for the first slide when the page loads
window.onload = showDialogForActiveSlide;
</script>