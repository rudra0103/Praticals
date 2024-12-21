@include('header')
<section class="tour-sec2 position-relative overflow-hidden bg-top-center z-index-3 space-top" id="tour-sec"
     data-pos-for=".counter-sec2" data-sec-pos="bottom-half" data-bg-src="/assets1/img/bg/tour_bg_2.jpg">
     <div class="container">
         <div class="title-area mb-15 text-center"><span class="sub-title">Best Recommended Places</span>
             <h2 class="sec-title">Popular Destination we offer for all</h2>
             <p class="tour-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                 incididunt ut labore et dolore magna aliqua.</p>
         </div>
         <div class="slider-area tour-slider">
             <div class="swiper th-slider tourSlider2 has-shadow" id="tourSlider2"
                 data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"480":{"slidesPerView":2},"576":{"slidesPerView":"2"},"1199":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                 <div class="swiper-wrapper">
                     @foreach ($packs as $item)
                         <div class="swiper-slide">
                             <div class="tour-card th-ani gsap-cursor">
                                 <div class="tour-card_img global-img"><img src="{{ $item->package_pic }}"
                                         alt="image"></div>
                                 <div class="tour-content">
                                     <h3 class="box-title"><a
                                             href="/more/{{ $item->_id }}">{{ $item->package_name }}</a></h3>
                                     <div class="tour-rating">
                                         <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                             <span style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                 5 based on <span class="rating">4.8</span>(4.8 Rating)</span>
                                         </div><a href="/more/{{ $item->_id }}"
                                             class="woocommerce-review-link">(<span class="count">4.8</span>
                                             Rating)</a>
                                     </div>
                                     <h4 class="tour-card_price"><span
                                             class="currency">{{ $item->package_price }}</span>/Person</h4>
                                     <div class="tour-action"><span><i
                                                 class="fa-light fa-clock"></i>{{ $item->duration }}</span> <a
                                             href="/more/{{ $item->_id }}" class="th-btn style4">Book Now</a></div>
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