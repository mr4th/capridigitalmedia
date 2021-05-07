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
      <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
          <!-- - section MASTHEAD -->
          <!-- section PROJECTS SLIDER HALFSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile">
              <div class="slider slider-fullscreen-projects slider-halfscreen-projects slider-halfscreen-projects_pt js-slider-fullscreen-projects js-slider">
                <!-- slider COUNTER -->
                <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                  <div class="slider__counter slider__counter_current">
                    <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                      <div class="swiper-wrapper"></div>
                    </div>
                  </div>
                  <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                  <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total">001</div>
                </div>
                <!-- - slider COUNTER -->
                <div class="container h-100">
                  <div class="row h-100 justify-content-between">
                    <div class="col-lg-6 slider-halfscreen-projects__col">
                      <!-- slider IMAGES -->
                      <div class="slider-fullscreen-projects__images slider-halfscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="vertical" data-aspect-ratio="0.6667" data-transition-effect="distortion" data-transition-displacement-img="img/general/bg-displacement-9.jpg" data-speed="800" data-autoplay-enabled="false" data-autoplay-delay="6000">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg" data-texture-src="img/agro22.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg" data-texture-src="img/build33.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg" data-texture-src="img/goaltravel22.png"></div>
                            </div>
                          </div>
                          <div class="swiper-slide overflow">
                            <div class="slider__images-slide-inner" data-swiper-parallax="90%">
                              <div class="slider__bg" data-texture-src="img/ladrefarm33.png"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- - slider IMAGES -->
                      <!-- slider CANVAS -->
                      <div class="slider__wrapper-canvas slider-halfscreen-projects__canvas">
                        <div class="slider__wrapper-canvas-inner">
                          <canvas class="slider__canvas"></canvas>
                        </div>
                      </div>
                      <!-- - slider CANVAS -->
                    </div>
                    <div class="col-lg-6 align-self-lg-end slider-halfscreen-projects__col">
                      <!-- slider CONTENT-->
                      <div class="slider-halfscreen-projects__content swiper-container js-slider-fullscreen-projects__content">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Agrocentric</h2>
                              <div class="slider__wrapper-button mt-0-5">
                                <div class="change-text-hover small-caps js-change-text-hover">
                                  <!-- label by default -->
                                  <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">Agriculture</div>
                                  <!-- - label by default -->
                                  <!-- label on hover -->
                                  <div class="change-text-hover__hover js-change-text-hover__hover">
                                    <!-- hover line -->
                                    <div class="change-text-hover__line js-change-text-hover__line"></div>
                                    <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">Agriculture Project</span>
                                  </div>
                                  <!-- - label on hover -->
                                </div>
                              </div></div>
                          <div class="swiper-slide">
                              <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">build -innovate</h2>
                              <div class="slider__wrapper-button mt-0-5">
                                <div class="change-text-hover small-caps js-change-text-hover">
                                  <!-- label by default -->
                                  <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">building</div>
                                  <!-- - label by default -->
                                  <!-- label on hover -->
                                  <div class="change-text-hover__hover js-change-text-hover__hover">
                                    <!-- hover line -->
                                    <div class="change-text-hover__line js-change-text-hover__line"></div>
                                    <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">building Project</span>
                                  </div>
                                  <!-- - label on hover -->
                                </div>
                              </div></div>
                          <div class="swiper-slide">
                              <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">goal travel</h2>
                              <div class="slider__wrapper-button mt-0-5">
                                <div class="change-text-hover small-caps js-change-text-hover">
                                  <!-- label by default -->
                                  <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">travel</div>
                                  <!-- - label by default -->
                                  <!-- label on hover -->
                                  <div class="change-text-hover__hover js-change-text-hover__hover">
                                    <!-- hover line -->
                                    <div class="change-text-hover__line js-change-text-hover__line"></div>
                                    <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">travel Project</span>
                                  </div>
                                  <!-- - label on hover -->
                                </div>
                              </div></div>
                          <div class="swiper-slide">
                              <h2 class="h2 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">ladre farm</h2>
                              <div class="slider__wrapper-button mt-0-5">
                                <div class="change-text-hover small-caps js-change-text-hover">
                                  <!-- label by default -->
                                  <div class="change-text-hover__normal js-split-text split-text js-change-text-hover__normal" data-split-text-type="lines" data-split-text-set="lines">farm</div>
                                  <!-- - label by default -->
                                  <!-- label on hover -->
                                  <div class="change-text-hover__hover js-change-text-hover__hover">
                                    <!-- hover line -->
                                    <div class="change-text-hover__line js-change-text-hover__line"></div>
                                    <!-- - hover line --><span class="js-split-text split-text" data-split-text-type="lines" data-split-text-set="lines">farm Project</span>
                                  </div>
                                  <!-- - label on hover -->
                                </div>
                              </div></div>
                        </div>
                      </div>
                      <!-- - slider CONTENT -->
                    </div>
                  </div>
                </div>
                <!-- slider ARROWS -->
                <div class="slider__wrapper-arrows slider__wrapper-arrows_right">
                  <div class="slider__arrow js-slider__arrow-prev">
                    <div class="arrow arrow-left js-arrow arrow-up" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-left__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                  <div class="slider__arrow js-slider__arrow-next">
                    <div class="arrow arrow-right js-arrow arrow-down" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-right__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                </div>
                <!-- - slider ARROWS -->
                <!-- overlay -->
                <div class="slider__overlay overlay overlay_dark z-50 d-lg-none"></div>
                <!-- - overlay -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER HALFSCREEN -->
        </main>
        <!-- PAGE FOOTER -->
        <?php include("footer.php");?>