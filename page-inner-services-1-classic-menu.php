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
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h1">Services I</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section SERVICES SLIDER -->
          <section class="section section-services section-slider-images">
            <div class="slider slider-services slider-images js-slider-images">
              <div class="swiper-container js-slider-images__slider" data-slides-per-view="1.4" data-slides-per-view-tablet="1.2" data-slides-per-view-mobile="1.1" data-centered-slides="true" data-autoplay-enabled="true" data-drag-mouse="true" data-drag-cursor="true" data-drag-class="slider-images_touched" data-auto-height="true">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-1_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Weddings</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Nor themselves age introduced frequently use unsatiable devonshire get. They why quit gay cold rose deal park. One same they four did ask busy.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Starting From</div>
                                <div class="figure-service__amount h3">$1490</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-2_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Portraits</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Starting From</div>
                                <div class="figure-service__amount h3">$490</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-3_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Commercial</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Simplicity affronting inquietude for now sympathize age. She meant new their sex could defer child. An lose at quit to life do dull.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Starting From</div>
                                <div class="figure-service__amount h3">$1990</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-4_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Studio</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. Wooded ladies she basket season.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Starting From</div>
                                <div class="figure-service__amount h3">$990</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-5_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Reportages</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Houses latter an valley be indeed wished merely in my. Money doubt oh drawn every or an china. Visited out friends for expense message set eat.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Starting From</div>
                                <div class="figure-service__amount h3">$590</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="container figure-service bg-white">
                      <div class="row no-gutters">
                        <!-- background image -->
                        <div class="col-lg-5 overflow">
                          <div class="w-100 h-100" data-swiper-parallax-zoom="20%" data-swiper-parallax="20%">
                            <!-- zoom on drag container -->
                            <div class="slider__zoom-container w-100 h-100">
                              <div class="figure-service__wrapper-bg">
                                <div class="slider__bg swiper-lazy" data-background="img/assets/sectionServices/service-6_thumb.jpg"></div>
                              </div>
                            </div>
                            <!-- - zoom on drag container -->
                          </div>
                        </div>
                        <!-- - background image -->
                        <!-- content -->
                        <div class="col-lg-7">
                          <div class="figure-service__content p-small">
                            <!-- header -->
                            <div class="figure-service__header">
                              <div class="figure-service__heading">
                                <h2 class="h2 mt-0 mb-0">Corporate</h2>
                              </div>
                              <div class="figure-service__text">
                                <p class="mb-0 mt-1">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging.</p>
                              </div>
                            </div>
                            <!-- - header -->
                            <!-- footer -->
                            <div class="figure-service__footer d-flex justify-content-between align-items-center mt-xsmall mt-md-6">
                              <div class="figure-service__price">
                                <div class="figure-service__header small-caps mb-0-5">Contact Me for</div>
                                <div class="figure-service__amount h3">Custom Price</div>
                              </div>
                              <div class="figure-service__wrapper-button"><a class="d-inline-block no-highlight" href="#">
                                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                    </svg>
                                    <div class="arrow__pointer arrow-right__pointer"></div>
                                    <div class="arrow__triangle"></div>
                                  </div></a>
                              </div>
                            </div>
                            <!-- - footer -->
                          </div>
                        </div>
                        <!-- - content -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- slider FOOTER -->
              <div class="container slider-services__footer mt-1 mt-md-2">
                <div class="row justify-content-between align-items-center">
                  <!-- slider COUNTER (current) -->
                  <div class="col-auto">
                    <div class="slider__counter slider__counter_mini">
                      <div class="js-slider__counter-current swiper-container">
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
                    <div class="slider__total slider__total_mini js-slider__counter-total">I</div>
                  </div>
                  <!-- - slider COUNTER (total) -->
                </div>
              </div>
              <!-- - slider FOOTER -->
            </div>
          </section>
          <!-- - section SERVICES SLIDER -->
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
                      <h2>Our Team</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                      <p>Too horrible consider followed may differed age. An rest if more five mr of. Age just her rank met down way. Attended required so in cheerful an.</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- - section CONTENT #1 -->
          <!-- section TEAM -->
          <section class="section section-team section-grid text-center mb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="row row-gutters">
                <div class="col-lg-4 col-sm-6 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-member figure-member_has-social">
                      <!-- image -->
                      <div class="figure-member__avatar">
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-1.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Terry Canon</div>
                        <div class="figure-member__position small-caps mt-1">CEO &amp; CTO</div>
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
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-2.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Hattie Barber</div>
                        <div class="figure-member__position small-caps mt-1">Art Director</div>
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
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-3.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Johny Mc Donald</div>
                        <div class="figure-member__position small-caps mt-1">Backend Developer</div>
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
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-4.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Rosetta Miles</div>
                        <div class="figure-member__position small-caps mt-1">Frontend Developer</div>
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
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-5.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">David Parker</div>
                        <div class="figure-member__position small-caps mt-1">Product Manager</div>
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
                        <div class="lazy"><img src="#" data-src="img/assets/sectionTeam/member-6.jpg" width="680" height="1020" alt=""/></div>
                      </div>
                      <!-- - image -->
                      <div class="figure-member__headline mt-1"></div>
                      <!-- content -->
                      <div class="figure-member__footer mt-0-5">
                        <div class="figure-member__name h4">Mark Newman</div>
                        <div class="figure-member__position small-caps mt-1">Backend Developer</div>
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
          <!-- section CTA -->
          <section class="section section-cta section-content pt-medium pb-medium pt-md-4 pb-md-4 bg-dark-3" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="light">
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                  <div class="section-cta__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h2 class="h3 mt-0 mt-md-1 mb-1">Want to Work with Me?</h2>
                  </div>
                </div>
                <div class="col-lg-auto">
                  <div class="section-content__button"><a class="button button_bordered button_white" data-hover="Get in Touch" href="#"><span class="button__label-hover">Get in Touch</span></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section CTA -->
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
                    <div class="counter__label">Models Shot</div>
                  </div>
                </div>
                <!-- - counter -->
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="52" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">52</div>
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
                    <div class="counter__label">Sunsets Captured</div>
                  </div>
                </div>
                <!-- - counter -->
                <!-- counter -->
                <div class="aside-counters__wrapper-item col-lg-3 col-6 mt-small">
                  <div class="counter js-counter" data-counter-start="0" data-counter-target="245" data-counter-duration="4">
                    <!-- animated number -->
                    <div class="counter__number js-counter__number">245</div>
                    <!-- - animated number -->
                    <div class="counter__label">Coffee Drunk</div>
                  </div>
                </div>
                <!-- - counter -->
              </div>
            </div>
          </aside>
          <!-- - aside COUNTERS -->
        </main>
        <!-- PAGE FOOTER -->
          <?php include("footer.php");?>