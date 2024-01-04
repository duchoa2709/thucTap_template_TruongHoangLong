<style>
.history-bg-text {
    position: relative;
    text-align: center;
}

.history-bg-text::after {
    position: absolute;
    content: "";
    top: 8px;
    right: 370px;
    width: 465px;
    height: 75px;
    background-image: url('./public/images/history/HISTORY.png');
    background-repeat: no-repeat;
}

.line::after {
    content: "";
    position: absolute;
    height: 10px;
    width: 10px;
    background-color: red;
    border-radius: 50%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.line::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 1px;
    background-color: #E1E1E1;
    left: 50%;
}

.line {
    position: relative;
}
</style>

<section>
    <div class="container mx-auto px-40 my-52">
        <div class="history-bg-text">
            <p class="text-xl text-[#666666]">
                PHÁT TRIỂN & HÌNH THÀNH
            </p>
            <p class="text-[46px] text-[#1b2c65]">
                <span class="font-bold">
                    LỊCH SỬ
                </span> HÌNH THÀNH
            </p>
        </div>
        <!-- history -->
        <div class="mt-20">
            <div class="flex justify-center gap-20 items-center line">
                <div class="w-1/2 pr-20 ml-auto text-right">
                    <img src="./public/images/history/history-img1.png" alt="" class="ml-auto">
                </div>
                <div class="w-1/2 pl-20 mr-auto text-left">
                    <p class="text-[#cf4735] text-[45px]">
                        Trước
                        <span class="font-bold">
                            1950
                        </span>
                    </p>
                </div>
            </div>
            <div class="flex justify-center gap-20 items-center line">
                <div class="w-1/2 pr-20 ml-auto text-right">
                    <p class="text-[#cf4735] text-[45px] ">
                        Năm
                        <span class="font-bold">
                            1954
                        </span>
                    </p>
                    <p class="text-[#666666] mt-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quidem saepe consequatur
                        repellat tempore ab quas, incidunt nam possimus impedit velit exercitationem architecto error
                        delectus. Consequatur tenetur aspernatur sunt porro?
                    </p>
                </div>
                <div class="w-1/2 pl-20 mr-auto text-left">
                    <div class="flex">
                        <div class="w-1/2">
                            <img src="./public/images/history/history-img2.png" alt="">
                        </div>
                        <div class="w-1/2">
                            <img src="./public/images/history/history-img3.png" alt="">
                        </div>
                    </div>
                    <img src="./public/images/history/history-img4.png" alt="">
                </div>
            </div>
            <div class="flex justify-center gap-20 items-center line">
                <div class="w-1/2 pr-20 ml-auto text-right">
                    <img src="./public/images/history/history-img5.png" alt="">
                </div>
                <div class="w-1/2 pl-20 mr-auto text-left">
                    <p class="text-[#cf4735] text-[45px] ">
                        Năm
                        <span class="font-bold">
                            1955 - 1964
                        </span>
                    </p>
                    <p class="text-[#666666] mt-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quidem saepe consequatur
                        repellat tempore ab quas, incidunt nam possimus impedit velit exercitationem architecto error
                        delectus. Consequatur tenetur aspernatur sunt porro?
                    </p>
                </div>
            </div>
            <button class="flex justify-center items-center m-auto">
                <img src="./public/images/history/xemthem.png" alt="">
            </button>
        </div>
</section>