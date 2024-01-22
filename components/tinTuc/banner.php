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
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 62%, rgba(0, 0, 0, 0.6446953781512605) 100%);
    z-index: 1;
}
</style>

<section>
    <div class="banner_background">
        <div class="container mx-auto px-40 z-50 relative">
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
            <div class="flex absolute">
                <div class="w3/5">
                    <img src="./public/images/tinTuc/anh1.png" alt="">
                </div>
                <div class="w-2/5">
                    <div class="flex flex-col justify-between h-full">
                        <div class="text-blue-950 text-[45px] font-extrabold uppercase leading-[60px] border-b-2 pb-14">
                            THÔNG BÁO VỀ NGÀY ĐĂNG KÝ CUỐI CÙNG CHỐT QUYỀN NHẬN CỔ TỨC
                        </div>
                        <div class="flex pt-3 justify-between">
                            <div class="left flex gap-8">
                                <div class="date flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <div class="ml-2">12/12/2021</div>
                                </div>
                                <div class="view flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>