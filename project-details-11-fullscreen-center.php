<?php include("header.php");?>
  <body>
   <?php include("preloader.php");?>
      <!-- - header curtain AJAX transition -->
      <!-- - TRANSITION CURTAINS -->
      <!-- Cursor Follower-->
      <div class="cursor" id="js-cursor">
        <div class="cursor__wrapper">
          <!-- circles -->
          <div class="cursor__follower">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle id="inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
              <circle id="outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
            </svg>
          </div>
          <!-- - circles -->
          <!-- arrows -->
          <div class="cursor__arrows">
            <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
            <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
            <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
            <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
          </div>
          <!-- - arrows -->
          <!-- label holder -->
          <div class="cursor__label"></div>
          <!-- - label holder -->
          <!-- icon holder -->
          <div class="cursor__icon material-icons"></div>
          <!-- - icon holder -->
        </div>
      </div>
      <!-- - Cursor Follower-->
      <!-- PAGE HEADER -->
     <?php include("nav.php");?>      <!-- - PAGE HEADER -->
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
           <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD FULLWIDTH BOTTOM -->
          <section class="section section-masthead pt-large text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Travel Agency</span></div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">Goal Travel</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
            <div class="section-image section-masthead__background section section_h-900 mt-medium">
              <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                <div class="js-transition-img__transformed-el">
                  <div class="lazy-bg" data-src="img/tra/airport-2373727_1920.jpg"></div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section MASTHEAD FULLWIDTH BOTTOM -->
          <!-- sections CONTENT & IMAGE #1 -->
          <div class="container-fluid no-gutters bg-light-1">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-6">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>The Brand</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>Goaltravel is a Passport & Visa Service brand with a daring ambition to be one of the leading lights in the travel and tourisms industries. 
The brand prides itself in guaranteeing customers that their Visa is assured with them. And so true. The core service goes as far as securing Shengen visa and other A-listed services.
</p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="section section-image section_h-800">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/tra/fantasy-3502188_1280.jpg"></div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>

<!-- two -->

    <div class="container-fluid no-gutters bg-light-1">
            <div class="row no-gutters align-items-center">
            
              <div class="col-lg-6">
                <section class="section section-image section_h-800">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/tra/photographer-407068_1920.jpg"></div>
                    </div>
                  </div>
                </section>
              </div>
                <div class="col-lg-6">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>Our Challenge </h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>Implement and promote a functional website that captures the fantasies and imagination of business and private travellers. Ensure automated prompt delivery of digital services such as 
                        bookings and reservations online, scheduling interviews, and provision of useful information.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>

          <!-- three -->
              <div class="container-fluid no-gutters bg-light-1">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-6">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>Capri Insight </h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>Adventure is at the core of the brand. How do we visually illustrate the brand experience awaiting the next traveller, you.</p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="section section-image section_h-800">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/tra/loveourplanet-4851331_1280.jpg"></div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- four -->


          <!-- two -->

    <div class="container-fluid no-gutters bg-light-1">
            <div class="row no-gutters align-items-center">
            
              <div class="col-lg-6">
                <section class="section section-image section_h-800">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/tra/london-692137_640.jpg"></div>
                    </div>
                  </div>
                </section>
              </div>
                <div class="col-lg-6">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>What we did </h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>
We told visual stories of the brand on the website and added visual cues that incorporate the global travel culture and its attendant treats.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>

          <!-- three -->
              <div class="container-fluid no-gutters bg-light-1">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-6">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>So, what happened..? </h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>
More and more people spent time on the website and that means more consideration 
for its services and actual purchase. Testimonials are pouring in, as visitors feel at home on the website.  </p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="section section-image section_h-800">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/tra/peru-641632_640.jpg"></div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- four -->
          
<!-- five -->

          <!-- - sections CONTENT & IMAGE #1 -->
          <!-- sections CONTENT & IMAGE #2 -->
          <div class="container-fluid no-gutters bg-light-2">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-6 order-lg-2">
                <section class="section section-content clearfix pt-medium pb-medium container-fluid container-fluid_paddings" data-arts-os-animation="data-arts-os-animation">
                  <div class="section-content__inner">
                    <div class="w-100"></div>
                    <div class="section__headline mb-1 mb-md-2"></div>
                    <div class="w-100"></div>
                    <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                      <h2>clients Testimony</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                      <p>"Your company is truly upstanding and is behind its product 100%. Thanks for the great service.
                         I made back the purchase price in just 48 hours! Goal travel is worth much more than I paid."</p>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6 order-lg-1 bg-white">
                <div class="container-fluid container-fluid_paddings container_px-md-0">
                  <section class="section section-slider-images">
                    <div class="slider slider-images js-slider-images">
                      <!-- slider HEADER -->
                      <div class="slider-images__header">
                        <div class="row no-gutters justify-content-between">
                          <div class="col-auto">
                            <div class="slider__counter slider__counter_mini">
                              <div class="js-slider__counter-current swiper-container">
                                <div class="swiper-wrapper"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="slider__total slider__total_mini js-slider__counter-total">I</div>
                          </div>
                        </div>
                      </div>
                      <!-- - slider HEADER -->
                      <div class="swiper-container js-slider-images__slider" data-drag-mouse="true" data-drag-cursor="true" data-drag-class="slider-images_touched" data-auto-height="true" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide overflow d-flex-centered text-center">
                            <div class="w-100 h-100" data-swiper-parallax="10%" data-swiper-parallax-zoom="10%">
                              <div class="slider__zoom-container w-100 h-100"><img class="swiper-lazy" src="#" data-src="img/tra/_DSF0084.jpg" width="1280" height="1280" alt=""/></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow d-flex-centered text-center">
                            <div class="w-100 h-100" data-swiper-parallax="10%" data-swiper-parallax-zoom="10%">
                              <div class="slider__zoom-container w-100 h-100"><img class="swiper-lazy" src="#" data-src="img/tra/190317SDK-278.jpg" width="1280" height="1280" alt=""/></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow d-flex-centered text-center">
                            <div class="w-100 h-100" data-swiper-parallax="10%" data-swiper-parallax-zoom="10%">
                              <div class="slider__zoom-container w-100 h-100"><img class="swiper-lazy" src="#" data-src="img/tra/Friendliest-countries-for-black-travelers-Cabo-da-Roca.jpg" width="1280" height="1280" alt=""/></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- slider FOOTER -->
                      <div class="slider-images__footer">
                        <div class="row no-gutters justify-content-center">
                          <div class="col-auto">
                            <!-- slider DOTS -->
                            <div class="slider__dots js-slider__dots">
                              <div class="slider__dot slider__dot_active">
                                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                </svg>
                              </div>
                              <div class="slider__dot">
                                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                </svg>
                              </div>
                              <div class="slider__dot">
                                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                </svg>
                              </div>
                              <div class="slider__dot">
                                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                </svg>
                              </div>
                            </div>
                            <!-- - slider DOTS -->
                          </div>
                        </div>
                      </div>
                      <!-- - slider FOOTER -->
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <!-- - sections CONTENT & IMAGE #2 -->
          <!-- section VIDEO BACKGROUND -->
          <section class="section section-image section_h-800">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <video class="of-cover" src="img/down.mp4" autoplay="autoplay" playsinline="playsinline" muted="muted" loop="loop"></video>
            </div>
          </section> 
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>