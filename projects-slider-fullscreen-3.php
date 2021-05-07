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
          <!-- section PROJECTS SLIDER FULLSCREEN -->
          <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile text-center">
              <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- slider CONTENT -->
                <div class="slider-fullscreen-projects__content swiper-container js-slider-fullscreen-projects__content">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Agriculture</div>
                      <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Agrocentric</h2>
                    </div>
                    <div class="swiper-slide">
                      <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Building Materials</div>
                      <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars">Build –Innovate</h2>
                    </div>
                    <div class="swiper-slide">
                      <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Travel Agency</div>
                      <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars"></h2>
                    </div>
                    <div class="swiper-slide">
                      <div class="small-caps slider__subheading js-split-text split-text mb-1" data-split-text-type="lines, words, chars" data-split-text-set="chars">Farming</div>
                      <h2 class="h1 slider__heading js-split-text" data-split-text-type="lines, words, chars"></h2>
                    </div>
                  </div>
                </div>
                <!-- - slider CONTENT -->
                <!-- slider IMAGES -->
                <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-transition-effect="enterLeave" data-speed="1200" data-autoplay-enabled="true" data-autoplay-delay="6000" data-counter-style="roman" data-touch-ratio="1.5" data-drag-mouse="true" data-drag-cursor="true" data-drag-class="slider-fullscreen-projects__images_scale-up">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%" data-swiper-parallax-opacity="0">
                        <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/agro3.png"></div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%" data-swiper-parallax-opacity="0">
                        <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/build1.png"></div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%" data-swiper-parallax-opacity="0">
                        <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/goaltravel3.PNG"></div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%" data-swiper-parallax-opacity="0">
                        <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/re.PNG"></div>
                      </div>
                    </div>
                  </div>
                  <!-- overlay-->
                  <div class="slider__overlay overlay overlay_dark"></div>
                  <div class="slider__circle"></div>
                  <!-- - overlay-->
                </div>
                <!-- - slider IMAGES -->
                <!-- slider FOOTER -->
                <!-- <div class="slider-fullscreen-projects__footer swiper-container js-slider-fullscreen-projects__footer">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="project-details-4-halfscreen-left-left.html" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="project-details-6-bottom-fullwidth.html" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="project-details-8-halfscreen-right-left.html" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slider__wrapper-button-footer"><a class="button button_white button_bordered" data-hover="Explore Project" href="project-details-10-halfscreen-left-right.html" data-pjax-link="fullscreenSlider"><span class="button__label-hover">Explore Project</span></a>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- - slider FOOTER -->
                <!-- slider COUNTER -->
                <div class="slider__wrapper-counter slider-fullscreen-projects__counter">
                  <div class="slider__counter slider__counter_current">
                    <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                      <div class="swiper-wrapper"></div>
                    </div>
                  </div>
                  <div class="slider__counter-divider slider-fullscreen__counter-divider"></div>
                  <div class="slider__counter slider__counter_total js-slider-fullscreen-projects__counter-total"></div>
                </div>
                <!-- - slider COUNTER -->
                <!-- slider ARROWS -->
                <div class="slider__arrow slider__arrow_left slider__arrow_absolute js-slider__arrow-prev">
                  <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-left__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <div class="slider__arrow slider__arrow_right slider__arrow_absolute js-slider__arrow-next">
                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                    <div class="arrow__pointer arrow-right__pointer"></div>
                    <div class="arrow__triangle"></div>
                  </div>
                </div>
                <!-- - slider ARROWS -->
              </div>
            </div>
          </section>
          <!-- - section PROJECTS SLIDER FULLSCREEN -->
        </main>
        <!-- PAGE FOOTER -->
          <?php include("footer.php");?>