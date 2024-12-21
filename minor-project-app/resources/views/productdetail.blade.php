@include('header')
<section class="space">
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-lg-7">
          <div class="page-single">
            <div class="service-img">
              <img
                src="assets/img/destination/destination-details.jpg"
                alt=""
              />
            </div>
              <h2 class="box-title">
                {{$product->package_name}}
              </h2>
              <div class="media-img">
                <a href="blog-details.html"
                  ><img
                    src="{{$product->package_pic}}"
                    alt="Blog Image"
                /></a>
          <div class="row">
                  <div class="col-6">
                 <p class="box-text mb-30">
               {{$product->detail_desc}}
              </p>
            </div>
            
            <div col-6>
              <div class="widget tour-booking">
                <p class="widget_subtitle">
                  pacakge_name <span class="widget_price">{{$product->package_name}}</span>
                </p>
                <div class="info-list">
                  <ul>
                    <li>
                      <strong>package_discount </strong>
                      <span>{{$product->package_discount}}</span>
                    </li>
                    <li>
                      <strong>package_price</strong>
                      <span>{{$product->package_price}}</span>
                    </li>

                    <li>
                      <strong>duration</strong>
                      <span>{{$product->duration}}</span>
                    </li>
                    
                    <li>
                      <strong>route</strong>
                      <span>{{$product->route}}</span>
                    </li>
                 
                    <li>
                      <strong>Detail_description</strong>
                      <span>{{$product->detail_desc}}</span>
                    </li>
                 
                    <li>
                      <strong>Category</strong>
                      <span>{{$product->category}}</span>
                    </li>
                 
                   
                  </ul>
                </div>
                <a href="contact.html" class="th-btn th-icon">Book Now</a>
                <span class="review"
                  ><i class="fa-light fa-heart"></i> 88% of travelers recommend
                  this experience</span>
              
              </div>
            </div>
          </div>
        </div>   
        
        
      </div>
    </div>
    
    
    
    <div
      class="shape-mockup shape2 d-none d-xl-block"
      data-bottom="31%"
      data-right="8%"
    >
     
    </div>
    <div
      class="shape-mockup shape3 d-none d-xxl-block"
      data-bottom="33%"
      data-right="5%"
    >
          </div>
  </section>
  @include('footer')