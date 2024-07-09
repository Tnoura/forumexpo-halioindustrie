@extends('Layouts.master')
@section('content')

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->


  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active" height="80vh" >
      <img src="{{asset('assets/img/hero/hero_bg_3.png')}}" alt="Los Angeles" class="d-block w-100">
    </div>
  </div>
</div>


 
   
    <section class="" id="service-sec">
        <div class="round-container  space">
            <div class="container">
         
                <div class="title-area text-center"><span class="sub-title">OUR SERVICES</span>
                    <h2 class="sec-title">We Provide Exclusive Services</h2>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon"><img src="assets/img/icon/service_3d_1.png" alt="Icon">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="service-details.html">Web Development</a></h3>
                                        <p class="service-3d_text">Intrinsicly redefine competitive e-business before
                                            adaptive potentialiti. Professionally build progressive users with.</p><a
                                            href="service-details.html" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon"><img src="assets/img/icon/service_3d_2.png" alt="Icon">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="service-details.html">UI/UX Design</a></h3>
                                        <p class="service-3d_text">Intrinsicly redefine competitive e-business before
                                            adaptive potentialiti. Professionally build progressive users with.</p><a
                                            href="service-details.html" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon"><img src="assets/img/icon/service_3d_3.png" alt="Icon">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="service-details.html">Digital Marketing</a></h3>
                                        <p class="service-3d_text">Intrinsicly redefine competitive e-business before
                                            adaptive potentialiti. Professionally build progressive users with.</p><a
                                            href="service-details.html" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box4 tilt-active">
                        <div class="img-shape icon-masking"><span class="mask-icon"
                                data-mask-src="assets/img/normal/about_3_1-shape.png"></span> <img
                                src="assets/img/normal/about_3_1-shape.png" alt="img"></div><img
                            src="assets/img/normal/about_3_1.png" alt="About"> <a
                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35 text-center text-xl-start">
                        <div class="shadow-title">ABOUT US</div><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon"
                                    data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img
                                    src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>About WEBTECK IT
                            SOLUTIONS
                        </span>
                        <h2 class="sec-title">We Are Increasing Business Success With <span
                                class="text-theme">Technology</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 text-center text-xl-start">Synergistically incentivize effective imperatives
                        through fully researched intellectual capital. Appropriately fashion client-based.</p>
                  

                </div>
            </div>
        </div>
    </div>

    <section class="bg-top-center z-index-common space-top" id="service-sec"
        data-bg-src="assets/img/bg/service_bg_2.jpg">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-9 pe-xl-5">
                    <div class="title-area text-center text-lg-start">
                        <div class="shadow-title color2">SERVICES</div><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon"
                                    data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img
                                    src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>WHAT WE DO
                        </span>
                        <h2 class="sec-title text-white">We Provide Exclusive Service For <span class="text-theme">Your
                                Business</span></h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn"><a href="service.html" class="th-btn style3">VIEW ALL SERVICES<i
                                class="fa-regular fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon"><img src="assets/img/icon/service_card_1.svg" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <h3 class="box-title"><a href="service-details.html">Web Development</a></h3>
                                    <p class="service-grid_text">Continually engage customized infomediarie and quality
                                        growth strategies. Appropriately.</p><a href="service-details.html"
                                        class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon"><img src="assets/img/icon/service_card_2.svg" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <h3 class="box-title"><a href="service-details.html">UI/UX Design</a></h3>
                                    <p class="service-grid_text">Continually engage customized infomediarie and quality
                                        growth strategies. Appropriately.</p><a href="service-details.html"
                                        class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon"><img src="assets/img/icon/service_card_3.svg" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <h3 class="box-title"><a href="service-details.html">Digital Marketing</a></h3>
                                    <p class="service-grid_text">Continually engage customized infomediarie and quality
                                        growth strategies. Appropriately.</p><a href="service-details.html"
                                        class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon"><img src="assets/img/icon/service_card_4.svg" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <h3 class="box-title"><a href="service-details.html">Business Analysis</a></h3>
                                    <p class="service-grid_text">Continually engage customized infomediarie and quality
                                        growth strategies. Appropriately.</p><a href="service-details.html"
                                        class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="service-grid_icon"><img src="assets/img/icon/service_card_5.svg" alt="Icon">
                                </div>
                                <div class="service-grid_content">
                                    <h3 class="box-title"><a href="service-details.html">Software Services</a></h3>
                                    <p class="service-grid_text">Continually engage customized infomediarie and quality
                                        growth strategies. Appropriately.</p><a href="service-details.html"
                                        class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    <div class="bg-shape"><img src="assets/img/bg/service_grid_bg.png" alt="bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection