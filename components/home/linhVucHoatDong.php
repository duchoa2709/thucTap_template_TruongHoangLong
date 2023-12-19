<style>
.bg-left-polygon {
    position: relative;
}

.bg-left-polygon::before {
    content: "";
    top: -15rem;
    left: -21.3rem;
    position: absolute;
    width: 22rem;
    height: 30rem;
    background: url("./public/images/polygonTrai.png");
    z-index: -1;
    background-repeat: no-repeat;
}
</style>

<!-- our services -->
<div class="text-center bg-left-polygon">
    <div class="ourServices">
        <p class="text-[#666666] text-xl">TRƯƠNG HOÀNG LONG</p>
        <p class="text-[#1B2C65] leading-8 text-5xl mt-4 mb-8">LĨNH VỰC <span class="font-bold">HOẠT ĐỘNG</span>
        </p>
    </div>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dicta eaque iusto sequi esse error
        laboriosam adipisci <br> eos earum harum fugiat non quod modi nesciunt ipsam nostrum, sunt illo
        dignissimos!
    </p>
</div>

<!-- card carousel -->
<?php 
// include_once('slide.php');