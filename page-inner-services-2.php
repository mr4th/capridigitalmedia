<?php include("header.php");?>
  <body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=2241672615861041&autoLogAppEvents=1" nonce="OWGXB5IZ"></script>
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
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h1">Services</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section SERVICES -->
          <section class="section section-services section-grid pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="row row-gutters">
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white"style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/strategy-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">Strategy</div>
                        <!-- - header -->
                      </div>
                     <ul>
                       <li>Growth Strategy</li>
                       <li>Strategy advisory </li>
                       <li>Brand Strategy </li>
                       <li>Innovation Strategy </li>
                       <li>Customer Experience Strategy</li>
                       <li>Data Strategy</li>
                       <li>Research Strategy</li>
                     </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white" style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/marketing-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">marketing</div>
                        <!-- - header -->
                      </div>
                      <ul>
                        <li>Campaign Development</li>
                        <li>Communications Planning </li>
                        <li>  Media Planning</li>
                        <li> Public relations</li>
                        <li>Content Strategy</li>
                        <li>  Performance Marketing</li>
                        <li> Social and Influencer Marketing</li>
                        <li>Public Relations</li>
                        <li>Measurement and Reporting</li>
                        <li> Testing and Optimization</li>

                         

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white" style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/lamp-technology-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">i.t</div>
                        <!-- - header -->
                      </div>
                      <ul>
                        <li> App development</li>
                        <li> website development</li>
                        <li> systems integration</li>
                        <li> Database design and management</li>
                        <li>  E-commerce</li>
          

                      
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white" style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/web-design-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">design</div>
                        <!-- - header -->
                      </div>
                      <ul>
                        <li>Experience Design</li>
                        <li>
                         Design Language</li>
                        <li>Systems Brand</li>
                        <li>Identity and Naming</li>
                        <li>Responsive Web</li>
                        <li>Native Applications</li>
                        <li>Retail Environments</li>
                        <li>Packaging</li>
                       </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white" style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/digital-clock-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">Digital</div>
                        <!-- - header -->
                      </div>
                      <ul>
                        <li>Digital marketing</li>
                        <li> Social media management</li>
                        <li>Lead generation</li>
                        <li>Content development </li>
                        <li>Animations</li>
                        <li> Motion graphics</li>
                        <li>  Mobile marketing</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-feature bg-white" style="text-align: left;">
                      <div class="figure-feature__header">
                        <!-- icon -->
                        <div class="figure-feature__icon"><img src="img/general/media-player-svgrepo-com.svg" alt="alt"/></div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-feature__heading h4 mt-0-5 mb-0">media</div>
                        <!-- - header -->
                      </div>
                      <ul>
                        <li>  Media planning</li>
                        <li> media buying</li>
                        <li> Production</li>
                     
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section SERVICES -->
          <div class="bg-white">
            <!-- section CONTENT #1 -->
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <section class="section section-content clearfix pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>Clients Stories</h2>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
            <!-- - section CONTENT #1 -->
            <!-- section TESTIMONIALS -->
            <section class="section section-testimonials pb-medium">
              <div class="swiper-container slider slider-testimonials js-slider-testimonials" data-speed="2000">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="container figure-testimonial">
                      <div class="row justify-content-between align-items-center">
                        <!-- avatar image -->
                        <div class="col-lg-auto col-12">
                          <div class="overflow figure-testimonial__avatar">
                            <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                              <!-- zoom on drag container -->
                              <div class="slider__zoom-container w-100 h-100">
                                <div class="slider__bg swiper-lazy" data-background="img/photo-of-woman-using-laptop-3891135.jpg"></div>
                              </div>
                              <!-- - zoom on drag container -->
                            </div>
                          </div>
                        </div>
                        <!-- - avatar image -->
                        <!-- content -->
                        <div class="col pl-md-3">
                          <div class="figure-testimonial__sign"><img src="img/photo-of-woman-using-laptop-3891135.jpg" alt="alt"/></div>
                          <div class="slider-testimonials__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <blockquote class="figure-testimonial__text">"Thank you for making it painless, pleasant and most of all hassle free! Capri digital media was worth a fortune to my company. Capri digital media is awesome! We've seen amazing results already."
</blockquote>
                            <div class="figure-testimonial__author small-caps mt-2">- Cheri E.</div>
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-testimonial">
                      <div class="row justify-content-between align-items-center">
                        <!-- avatar image -->
                        <div class="col-lg-auto col-12">
                          <div class="overflow figure-testimonial__avatar">
                            <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                              <!-- zoom on drag container -->
                              <div class="slider__zoom-container w-100 h-100">
                                <div class="slider__bg swiper-lazy" data-background="img/Tanya-for-Global-News-740x600.jpg"></div>
                              </div>
                              <!-- - zoom on drag container -->
                            </div>
                          </div>
                        </div>
                        <!-- - avatar image -->
                        <!-- content -->
                        <div class="col pl-md-3">
                          <div class="figure-testimonial__sign"><img src="img/Tanya-for-Global-News-740x600.jpg" alt="alt"/></div>
                          <div class="slider-testimonials__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <blockquote class="figure-testimonial__text">"You won't regret it. We've used capri digital media for the last five years. I don't know what else to say."
</blockquote>
                            <div class="figure-testimonial__author small-caps mt-2">Tanya - Staford N.</div>
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-testimonial">
                      <div class="row justify-content-between align-items-center">
                        <!-- avatar image -->
                        <div class="col-lg-auto col-12">
                          <div class="overflow figure-testimonial__avatar">
                            <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                              <!-- zoom on drag container -->
                              <div class="slider__zoom-container w-100 h-100">
                                <div class="slider__bg swiper-lazy" data-background="img/Huetiful.jpg"></div>
                              </div>
                              <!-- - zoom on drag container -->
                            </div>
                          </div>
                        </div>
                        <!-- - avatar image -->
                        <!-- content -->
                        <div class="col pl-md-3">
                          <div class="figure-testimonial__sign"><img src="img/Huetiful.jpg" alt="alt"/></div>
                          <div class="slider-testimonials__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <blockquote class="figure-testimonial__text">"Capri digital media has completely surpassed our expectations."</blockquote>
                            <div class="figure-testimonial__author small-caps mt-2">- Gene X.</div>
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-testimonial">
                      <div class="row justify-content-between align-items-center">
                        <!-- avatar image -->
                        <div class="col-lg-auto col-12">
                          <div class="overflow figure-testimonial__avatar">
                            <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                              <!-- zoom on drag container -->
                              <div class="slider__zoom-container w-100 h-100">
                                <div class="slider__bg swiper-lazy" data-background="img/black_men_skin_care_routine.jpg"></div>
                              </div>
                              <!-- - zoom on drag container -->
                            </div>
                          </div>
                        </div>
                        <!-- - avatar image -->
                        <!-- content -->
                        <div class="col pl-md-3">
                          <div class="figure-testimonial__sign"><img src="img/black_men_skin_care_routine.jpg" alt="alt"/></div>
                          <div class="slider-testimonials__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                            <blockquote class="figure-testimonial__text">"Since I invested in capri digital media I made over 100,000 dollars profits. Capri digital media impressed me on multiple levels. Thanks to capri digital media, we've just launched our 5th website!"
</blockquote>
                            <div class="figure-testimonial__author small-caps mt-2">- Almire J.</div>
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- slider FOOTER -->
                <div class="container slider-testimonials__footer mt-xsmall">
                  <div class="row justify-content-between align-items-center slider-testimonials__row no-gutters">
                    <!-- slider COUNTER (current) -->
                    <div class="col-auto">
                      <div class="slider__counter slider__counter_mini">
                        <div class="js-slider-testimonials__counter-current swiper-container">
                          <div class="swiper-wrapper"></div>
                        </div>
                      </div>
                    </div>
                    <!-- - slider COUNTER (current) -->
                    <!-- slider DOTS -->
                    <div class="col-auto">
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
                    </div>
                    <!-- - slider DOTS -->
                    <!-- slider COUNTER (total) -->
                    <div class="col-auto">
                      <div class="slider__total slider__total_mini js-slider-testimonials__counter-total">I</div>
                    </div>
                    <!-- - slider COUNTER (total) -->
                  </div>
                </div>
                <!-- - slider FOOTER -->
              </div>
            </section>
            <!-- -  section TESTIMONIALS -->

 <!-- section TEAM -->
          <section class="section section-team section-grid text-center mb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="row row-gutters">
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/simon.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Simon Idika</div>
                        <div class="figure-member__position small-caps mt-1">CEO &amp; Founder</div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/kenny.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Afolayan Isaac Kehinde</div>
                        <div class="figure-member__position small-caps mt-1">Head of Software Engineer <br>(Web/Mobile)
                      </div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/young.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Audrey Damilare</div>
                        <div class="figure-member__position small-caps mt-1">Head of Admin/Human Resource</div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/mj.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Machen Joseph John</div>
                        <div class="figure-member__position small-caps mt-1">Software Developer(Web/Ui/Ux)</div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/woma.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Hally Mathew</div>
                        <div class="figure-member__position small-caps mt-1">Digital Marketer</div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-6.jpg" width="680" height="700" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Gboluwaga Adeyemi</div>
                        <div class="figure-member__position small-caps mt-1">Backend / mobile Developer</div>
                        <div class="figure-member__social">
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-twitter" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="#"></a></li>
                            <li class="social__item"><a class="fa fa-behance" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- - content -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- -  section TEAM -->

          </div>
          <!-- aside COUNTERS -->
          <aside class="aside aside-counters section aside-counters_4 pt-small pb-medium text-center">
            <div class="container">
              <div class="row justify-content-center">
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="139" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">139</div>
                    <!-- - animated number -->
                    <div class="counter__label">dev ops</div>
                  </div>
                </div>
                <!-- - counter -->
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="452" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">452</div>
                    <!-- - animated number -->
                    <div class="counter__label">Happy Clients</div>
                  </div>
                </div>
                <!-- - counter -->
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="632" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">632</div>
                    <!-- - animated number -->
                    <div class="counter__label">media productions</div>
                  </div>
                </div>
                <!-- - counter -->
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="245" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">245</div>
                    <!-- - animated number -->
                    <div class="counter__label">Strategic plans</div>
                  </div>
                </div>
                <!-- - counter -->
              </div>
            </div>
          </aside>
          <!-- - aside COUNTERS -->
          <!-- section VIDEO -->
          <section class="section section-video section-content section-image js-gallery container-fluid bg-light-2 pt-medium mb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="1" data-grid-tablet="1" data-grid-mobile="1">
            <div class="section-offset__content">
              <header class="section-video__header text-center pb-small">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <h2>Work Process</h2>
                      </div>
                      <div class="w-100"></div>
                      <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                        <p>
We build websites that matches international standards, custom
Software development, Mobile Application development, the best UI/UX interface for mobile applications, Data and analytics, Digital Marketing, branding and virtual assistant services.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </header>
              <div class="section-video__container section section_h-700 section-content__image"><a class="section-video__link" href="img/tech.mp4" data-autoplay="data-autoplay">
                  <div class="section-video__link-inner" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="0" data-arts-cursor-label="Play" data-arts-cursor-hide-native="true" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <div class="section-video__icon material-icons">play_arrow</div>
                  </div></a>
                <div class="section__bg">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div>
                      <div class="lazy-bg" data-src="img/capr.jpg"></div>
                    </div>
                  </div>
                  <div class="overlay overlay_dark"></div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section VIDEO -->
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>