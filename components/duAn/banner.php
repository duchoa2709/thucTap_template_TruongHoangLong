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
    background-image: url('./public/images/duAn/Rectangle 732.png');
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
        <div class="container mx-auto px-40 z-50">
            <div class="row">
                <div class="col-12">
                    <div class="banner__content pb-16">
                        <h1 class="font-extrabold text-5xl text-white">DỰ ÁN</h1>
                        <div class="flex mt-7 text-[#ff0000]">
                            <a href="#" class="">Trang chủ</a>
                            <span class="mx-2">></span>
                            <a href="#">Dự Án</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>