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
     <?php include("nav.php");?> 
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-3" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-light-3)"></section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS SLIDER HALFSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-light-3 overflow" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile">
              <div class="slider slider-fullscreen-projects slider-halfscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- - slider COUNTER -->
                <div class="container-fluid container-fluid_paddings h-100">
                  <div class="row h-100 justify-content-between">
                    <div class="col-lg-5 align-self-lg-center z-100 slider-halfscreen-projects__col">
                      <!-- slider CONTENT -->
                      <div class="slider-halfscreen-projects__content p-0 swiper-container js-slider-fullscreen-projects__content">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Agriculture</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Agrocentric</h2>
                            <div class="slider__text js-split-text split-text mb-1" data-split-text-type="lines" data-split-text-set="lines">
                              <p>Agrocentric.com exists to provide a networking platform for Local farmers (Suppliers) in Africa and to the Buyers around the world.</p>
                            </div>
                          
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">building</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Build -Innovate</h2>
                            <div class="slider__text js-split-text split-text mb-1" data-split-text-type="lines" data-split-text-set="lines">
                              <p>One stop shop for all your building needs,Best market price on latest building materials </p>
                            </div>
                            <!-- <div class="slider__wrapper-button mt-2"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-2-bottom-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div> -->
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">travel</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Goal travel</h2>
                            <div class="slider__text js-split-text split-text mb-1" data-split-text-type="lines" data-split-text-set="lines">
                              <p>An important part of letting go of worry, is knowing that you and your family are in a safe situation, and have backup if anything does go wrong. Travel agents know what scams to watch for and avoid, they know what various districts are like in foreign cities, 
                                and can put you in a neighbourhood that suits your tastes and lifestyle.</p>
                            </div>
                            <!-- <div class="slider__wrapper-button mt-2"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-5-bottom-container-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div> -->
                          </div>
                          <div class="swiper-slide">
                            <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">farm</div>
                            <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Ladre farm</h2>
                            <div class="slider__text js-split-text split-text mb-1" data-split-text-type="lines" data-split-text-set="lines">
                              <p>Agriculture in Western Africa needs intense development to realise its potential. Farm Africa helps farmers push up the quantity, quality and value of what they produce.</p>
                            </div>
                            <!-- <div class="slider__wrapper-button mt-2"><a class="button button_black button_solid" data-hover="Explore Project" href="project-details-9-fullscreen-center.html"><span class="button__label-hover">Explore Project</span></a>
                            </div> -->
                          </div>
                         
                         
                        </div>
                      </div>
                      <!-- - slider CONTENT -->
                    </div>
                    <div class="col-lg-6 slider-halfscreen-projects__col">
                      <!-- slider IMAGES -->
                      <div class="slider-fullscreen-projects__images slider-halfscreen-projects__images_reduced-width-right swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-aspect-ratio="1.5" data-speed="1000" data-autoplay-enabled="true" data-autoplay-delay="6000">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/agro22.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/build33.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/goaltravel22.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg swiper-lazy" data-background="img/ladrefarm33.png"></div>
                            </div>
                          </div>
                         
                          
                        </div>
                      </div>
                      <!-- - slider IMAGES -->
                    </div>
                  </div>
                </div>
                <!-- slider ARROWS -->
                <div class="slider__wrapper-arrows slider__wrapper-arrows_right slider__wrapper-arrows_right-mini slider__wrapper-arrows_bottom">
                  <div class="slider__arrow js-slider__arrow-prev">
                    <div class="arrow arrow-left js-arrow arrow-up arrow_mini arrow-up_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-left__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                  <div class="slider__arrow js-slider__arrow-next">
                    <div class="arrow arrow-right js-arrow arrow-down arrow_mini arrow-down_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-right__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                </div>
                <!-- - slider ARROWS -->
                <!-- slider DOTS -->
                <div class="slider__wrapper-arrows slider__wrapper-arrows_right">
                  <div class="slider__dots slider__dots_vertical js-slider__dots">
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
                <!-- overlay -->
                <div class="slider__overlay overlay overlay_light z-50 d-lg-none"></div>
                <!-- - overlay -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER HALFSCREEN -->
        </main>
          <!-- PAGE FOOTER -->
        <?php include("footer.php");?>