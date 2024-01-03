<!-- // News section on the home page -->

<style>
.bg-news {
    background-size: cover;
    background-position: center;
}

.text-news-home {
    position: relative;
}

.text-news-home::after {
    content: "";
    position: absolute;
    top: -10px;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('./public/images/NEWS.png');
    background-repeat: no-repeat;
}

.news-home .img-news {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 34%, rgba(51, 97, 139, 0.6194852941176471) 69%, rgba(12, 0, 71, 1) 100%);
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

.news-home .text-news {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 20px;
    color: #fff;
}
</style>

<section class="news-home container mx-auto px-40 py-40">

    <div class="pb-10 text-news-home">
        <p class="pl-2 pb-3 text-xl">
            TIN MỚI NHẤT
        </p>
        <p class="text-4xl text-[#1b2c65]">
            <span class="font-bold">
                TIN TỨC
            </span>
            NỔI BẬT
        </p>
    </div>

    <div class="flex gap-5">
        <div class="bg-news w-1/2 w-[590px] h-[399px]"
            style="background-image: url('./public/images/Rectangle 278.png');">
            <div class="img-news">
                <div class="text-news">
                    <p class="font-light text-sm">23, tháng 02, 2022</p>
                    <p class="text-2xl font-bold">Cất nóc tòa tháp 26 tầng đầu tiên trong phân khu the origami </p>
                </div>
            </div>
        </div>

        <div class="w-1/2">
            <div class="grid grid-rows-3 gap-y-3">
                <div class="flex gap-7">
                    <img src="./public/images/Rectangle 337.png" alt="" class="h-[7.82rem] w-1/3">
                    <div class="max-h-[7.82rem] overflow-hidden w-2/3">
                        <p>
                            23, Tháng 9, 2021
                        </p>
                        <p class="font-bold hover:text-[#1b2c65]">
                            Lễ khởi công dự án khu phức hợp vịnh đầm selavia
                        </p>
                        <p class="text-ellipsis">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, labore sit laboriosam
                            eveniet id modi! Alias sunt maiores cupiditate accusamus quam rem veliz.
                        </p>
                    </div>
                </div>
                <div class="flex gap-7">
                    <img src="./public/images/banner.png" alt="" class="h-[7.82rem] w-1/3">
                    <div class="max-h-[7.82rem] overflow-hidden w-2/3">
                        <p>
                            23, Tháng 9, 2021
                        </p>
                        <p class="font-bold hover:text-[#1b2c65]">
                            Lễ khởi công dự án khu phức hợp vịnh đầm selavia
                        </p>
                        <p class="text-ellipsis">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, labore sit laboriosam
                            eveniet id modi! Alias sunt maiores cupiditate accusamus quam rem veliz.
                        </p>
                    </div>
                </div>
                <div class="flex gap-7">
                    <img src="./public/images/anhnennhadat.jpg" alt="" class="h-[7.82rem] w-1/3">
                    <div class="max-h-[7.82rem] overflow-hidden w-2/3">
                        <p>
                            23, Tháng 9, 2021
                        </p>
                        <p class="font-bold hover:text-[#1b2c65]">
                            Lễ khởi công dự án khu phức hợp vịnh đầm selavia
                        </p>
                        <p class="text-ellipsis">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, labore sit laboriosam
                            eveniet id modi! Alias sunt maiores cupiditate accusamus quam rem veliz.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>