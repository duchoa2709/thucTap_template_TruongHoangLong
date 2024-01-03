 <style>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-size: cover;
}
 </style>

 <!-- banner -->
 <div class="bannerHome">
     <div class="mySlides">
         <!-- Swiper -->
         <div class="swiper mySwiperBanner">
             <div class="swiper-wrapper">
                 <div class="swiper-slide" style="background-image: url('./public/images/Rectangle 324.png')">
                     <div class="textBanner">
                         <div class="text-6xl font-bold p-3 rounded-lg">
                             <p class="text-white">TRƯƠNG HOÀNG LONG</p>
                             <p class="text-white py-2">KIẾN TẠO VỊ THẾ</p>
                             <p class="text-white">VÀ BỀN VỮNG </p>
                         </div>
                     </div>
                 </div>
                 <div class="swiper-slide" style="background-image: url('./public/images/anhnennhadat.jpg')">
                     <div class="textBanner">
                         <div class="text-6xl font-bold p-3 rounded-lg">
                             <p class="text-white">TRƯƠNG HOÀNG LONG</p>
                             <p class="text-white py-2">KIẾN TẠO VỊ THẾ</p>
                             <p class="text-white">VÀ BỀN VỮNG </p>
                         </div>
                         <button class="bg-[#CF4735] text-white px-6 py-3 mt-5">
                             Xem Thêm <i class="fas fa-arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end banner -->
 </head>

 <body>
     <!-- Initialize Swiper -->
     <script>
     var swiper = new Swiper(".mySwiperBanner", {
         autoplay: {
             delay: 2500,
             disableOnInteraction: false,
         },
         loop: true,
     });
     </script>
 </body>

 </html>