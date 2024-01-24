<style>
.menuTinTucActive a {
    font-weight: 600;
}

.menuTinTuc a:hover {
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.paginationDisable {
    background-color: #f5f5f5;
}

.paginationDisable i {
    color: #999999;
}

.paginationActive {
    background-color: #1b2c65;
    border: none;
}

.paginationActive div {
    color: #ffffff;
}
</style>
<section>
    <div class="container mx-auto px-40 z-10 relative mb-40">
        <!-- title -->
        <div class="title text-center">
            <div class="relative">
                <div class="absolute bottom-5 left-0 w-full h-full flex items-center justify-center">
                    <img src="./public/images/tinTuc/nEWS.png" alt="">
                </div>
                <div class="text-xl">
                    TIN MỚI NHẤT
                </div>
                <div class="text-5xl font-extrabold text-[#1b2c65]">
                    TIN TỨC
                </div>
            </div>
            <div class="mt-8 opacity-90 text-center text-zinc-800">
                Trương Hoàng Long sẵn sàng trả lời mọi câu hỏi và lắng nghe ý kiến của các bạn!
            </div>
        </div>
        <!-- menu -->
        <div class="text-center">
            <ul class="flex justify-center mt-10 items-center">
                <li class="mx-5 text-center menuTinTucActive">
                    <i class="fa-solid fa-minus"></i>
                </li>
                <li class="mx-5 text-center menuTinTucActive">
                    <a href="#" class="text-xl">TẤT CẢ</a>
                </li>
                <li class="mx-5 text-center menuTinTuc">
                    <a href="#" class="text-xl">THÔNG TIN BÁO CHÍ</a>
                </li>
                <li class="mx-5 text-center menuTinTuc">
                    <a href="#" class="text-xl">VĂN HÓA DOANH NGHIỆP</a>
                </li>
                <li class="mx-5 text-center menuTinTuc">
                    <a href="#" class="text-xl">THÔNG TIN ĐẤU THẦU</a>
                </li>
            </ul>
        </div>
        <!-- tinTucChinh -->
        <div class="flex flex-col gap-y-5 mt-16 w-full">
            <!-- row1 -->
            <div class="flex gap-5 w-full">
                <div class="w-[68.2%] shadow-xl">
                    <div class="flex w-full h-full">
                        <div class="w-1/2">
                            <img src="./public/images/tinTuc/1.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="w-1/2 flex flex-col justify-between">
                            <div class="w-full">
                                <div class="pt-10 px-12">
                                    <!-- date -->
                                    <div class="text-zinc-800 text-[13px]">
                                        25, tháng 07, 2022
                                    </div>
                                    <div class="text-zinc-800 text-[18px] font-bold uppercase leading-tight pt-5">
                                        Tập đoàn Xây dựng Hòa Bình trao học bổng cho sinh viên
                                    </div>
                                    <!-- line -->
                                    <div class="w-4/5 h-[1px] bg-[#1B2C65] my-5"></div>
                                    <!-- content -->
                                    <div class="text-black font-bold text-[17px] font-normal leading-snug pr-9">
                                        Sinh viên thuộc khối ngành xây dựng trên toàn quốc có cơ hội nhận học bổng Hoa
                                        Binh Blue Compass giá trị 100 triệu đồng một suất...
                                    </div>
                                </div>
                            </div>
                            <!-- button -->
                            <div class="flex items-center gap-5 justify-start mt-10 pb-10 px-12">
                                <a href="#" class="text-[#1B2C65] text-[20px] font-semibold">Xem chi tiết</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#1B2C65" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row2 -->
            <div class="flex gap-5 w-full">
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row3 -->
            <div class="flex gap-5 w-full">
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 shadow-xl">
                    <div class="flex flex-col">
                        <div class="h-2/3">
                            <img src="./public/images/tinTuc/2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="h-1/3">
                            <div class="px-10 py-8 w-full h-full">
                                <!-- date -->
                                <div class="text-zinc-800 text-[13px]">
                                    25, tháng 07, 2022
                                </div>
                                <!-- title -->
                                <div class="text-zinc-800 text-[18px] pt-3 pr-10">
                                    CAO TỐC BẮC NAM THIẾU HƠN 6 TRIỆU M3 ĐẤT ĐẮP
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination -->
        <div class="flex justify-center items-center gap-5 mt-20">
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border paginationDisable">
                <i class="fa-solid fa-chevron-left text-black font-bold"></i>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border paginationActive">
                <div class="text-black font-bold">1</div>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border ">
                <div class="text-black font-bold">2</div>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border ">
                <div class="text-black font-bold">...</div>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border ">
                <div class="text-black font-bold">10</div>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border ">
                <div class="text-black font-bold">11</div>
            </div>
            <div class="w-[40px] h-[40px] bg-white flex justify-center items-center border ">
                <i class="fa-solid fa-chevron-right text-black font-bold"></i>
            </div>
        </div>
    </div>
</section>