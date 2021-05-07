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
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-3" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-light-3)"></section>
          <!-- - section MASTHEAD -->
          <!-- section ALBUMS SLIDER COVERS -->
          <section class="section section-fullheight section-projects section-projects-slider bg-light-3 text-center overflow" data-arts-os-animation>
            <div class="section-fullheight__inner section-fullheight__inner_mobile">
              <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
                <!-- slider FOOTER -->
                <div class="container-fluid slider-fullscreen-projects__footer slider-fullscreen-projects__footer_content">
                  <div class="row justify-content-between align-items-end">
                    <div class="col-lg-3 d-none d-lg-block"></div>
                    <!-- slider CONTENT -->
                    <div class="col-lg-6">
                      <div class="swiper-container js-slider-fullscreen-projects__content">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Interior</span><span class="block-counter__counter">17</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-1_1.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_3.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_4.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_5.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_6.jpg" width="1920" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Portraits</span><span class="block-counter__counter">23</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-2_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_3.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_5.jpg" width="1920" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>UI / UX Design</span><span class="block-counter__counter">19</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-3_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_4.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_5.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_6.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_7.jpg" width="1920" height="1280" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Branding</span><span class="block-counter__counter">31</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-4_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_3.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_4.jpg" width="1920" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Identity</span><span class="block-counter__counter">17</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-5_1.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_2.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_5.jpg" width="1280" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Product Design</span><span class="block-counter__counter">29</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-6_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_3.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_5.jpg" width="1920" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                          <div class="swiper-slide" data-category="albums"><a class="d-inline-block js-page-indicator-trigger js-album" href="#">
                              <h2 class="h1 slider__heading block-counter js-split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars"><span>Black & White</span><span class="block-counter__counter">13</span></h2>
                              <!-- album photos -->
                              <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-7_1.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_4.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_5.jpg" width="1280" height="1920" data-title="" alt=""/>
                              </div>
                              <!-- - album photos --></a></div>
                        </div>
                      </div>
                    </div>
                    <!-- - slider CONTENT -->
                    <!-- slider INDICATOR -->
                    <div class="col-lg-3 text-center text-lg-right">
                      <div class="slider-categories js-slider__categories text-center text-lg-right mb-0">
                        <div class="slider-categories__category small-caps js-split-text split-text" data-split-text-type="lines" data-category="albums">Albums</div>
                        <div class="slider-categories__category small-caps js-split-text split-text" data-split-text-type="lines" data-button="data-button">Explore Album</div>
                      </div>
                    </div>
                    <!-- - slider INDICATOR -->
                  </div>
                </div>
                <!-- - slider FOOTER -->
                <!-- slider IMAGES -->
                <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-speed="1200" data-slides-per-view="1" data-slides-per-view-tablet="1" data-slides-per-view-mobile="1" data-mousewheel-enabled="true" data-direction="horizontal" data-drag-mouse="true" data-drag-cursor="true" data-drag-class="slider-fullscreen-projects__images_scale-down" data-touch-ratio="3" data-autoplay-enabled="true" data-autoplay-delay="6000">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-1_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-2_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-3_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-4_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-5_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-6_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide overflow d-flex-centered">
                      <div class="slider__images-slide-inner slider__images-slide-inner_circle border-radius-100 js-transition-img">
                        <div class="w-100 h-100" data-swiper-parallax-zoom="50%" data-swiper-parallax="10%">
                          <!-- zoom on drag container -->
                          <div class="slider__zoom-container w-100 h-100 overflow">
                            <div class="slider__bg swiper-lazy lazy-bg js-transition-img__transformed-el" data-background="img/assets/albums/album-7_thumb.jpg"></div>
                          </div>
                          <!-- - zoom on drag container -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="slider__circle"></div>
                </div>
                <!-- - slider IMAGES -->
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
          <!-- - section ALBUMS SLIDER COVERS -->
        </main>
        <!-- PAGE FOOTER -->
    <?php include("footer.php");?>