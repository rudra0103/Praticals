@include('header')

<section class="category-area bg-top-center" data-bg-src="/assets1/img/bg/category_bg_1.png">
    <div class="container th-container">
        <div class="title-area text-center"><span class="sub-title">Wornderful Place For You</span>
            <h2 class="sec-title">Tour Categories</h2>
        </div>
        <div class="swiper categorySlider" id="categorySlide">
            <div class="swiper-wrapper">
                @foreach ($cats as $item)
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="{{ $item->category_pic }}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="">{{ $item->category_name }}</a></h3><a
                                class="line-btn" href="">See more</a>
                        </div>
                    </div>
                @endforeach




            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<div class="about-area position-relative overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="img-box1">
                    <div class="img1"><img src="/assets1/img/normal/about_1_1.jpg" alt="About"></div>
                    <div class="img2"><img src="/assets1/img/normal/about_1_2.jpg" alt="About"></div>
                    <div class="img3"><img src="/assets1/img/normal/about_1_3.jpg" alt="About"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xl-4 ms-xl-2">
                    <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Let’s Go
                            Together</span>
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>
                        <p class="sec-text mb-30">There are many variations of passages of available but the
                            majority have suffered alteration in some form, by injected hum randomised words which
                            don't look even slightly.</p>
                    </div>
                    <div class="about-item-wrap">
                        <div class="about-item">
                            <div class="about-item_img"><img src="/assets1/img/icon/map3.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Exclusive Trip</h5>
                                <p class="about-item_text">There are many variations of passages of available but
                                    the majority.</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="about-item_img"><img src="/assets1/img/icon/guide.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Professional Guide</h5>
                                <p class="about-item_text">There are many variations of passages of available but
                                    the majority.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35"><a href="about.html" class="th-btn style3 th-icon">Learn More</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%"><img
            src="/assets1/img/shape/shape_1.png" alt="shape"></div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%"><img
            src="/assets1/img/shape/shape_2.png" alt="shape"></div>
    <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%"><img
            src="/assets1/img/shape/shape_3.png" alt="shape"></div>
    <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%"><img
            src="/assets1/img/normal/about-slide-img.png" alt="shape"></div>
    <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%"><i
            class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
    <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
            src="/assets1/img/icon/emoji.png" alt=""></div>
</div>

<section class="position-relative bg-top-center overflow-hidden space" id="service-sec"
    data-bg-src="/assets1/img/bg/tour_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center"><span class="sub-title">Best Place For You</span>
                    <h2 class="sec-title">Most Popular Tour</h2>
                    <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="slider-area tour-slider">
            <div class="swiper th-slider has-shadow"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($packs as $item)
                        
                    <div class="swiper-slide">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img"><img src="{{$item->package_pic}}"
                                    alt="image"></div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">{{$item->package_name}}</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                            style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                            based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                        href="tour-details.html" class="woocommerce-review-link">(<span
                                            class="count">4.8</span> Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">${{$item->package_price}}</span>/Person</h4>
                                <div class="tour-action"><span><i class="fa-light fa-clock"></i>{{$item->duration}}</span> <a
                                        href="/more/{{$item->_id}}" class="th-btn style4 th-icon">More Detail</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                 
                
                  
                    
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
