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
          <!-- section MASTHEAD HALFSCREEN LEFT -->
          <section class="section section-masthead section-fullheight" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner section-fullheight__inner section-fullheight__inner_mobile-auto">
              <div class="row no-gutters h-100 align-items-center">
                <div class="col-lg-6 align-self-stretch" data-arts-theme-text="light">
                  <header class="section-masthead__header section-masthead__header_absolute text-right">
                    <div class="container-fluid container-fluid_paddings">
                      <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Branding</span></div>
                      <div class="w-100"></div>
                      <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                        <h1 class="h1 mt-0 mb-0">Nothern Wave</h1>
                      </div>
                      <div class="w-100"></div>
                      <div class="section__headline mt-2 ml-auto"></div>
                    </div>
                  </header>
                  <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_right">
                    <div class="circle-button js-circle-button" data-arts-os-animation="true">
                      <!-- curved label -->
                      <div class="circle-button__outer">
                        <div class="circle-button__wrapper-label">
                          <div class="circle-button__label small-caps">Scroll Down</div>
                        </div>
                      </div>
                      <!-- - curved label -->
                      <!-- geometry wrapper -->
                      <div class="circle-button__inner">
                        <div class="circle-button__circle" data-arts-scroll-down="data-arts-scroll-down" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0">
                          <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                          </svg>
                        </div>
                        <!-- browsers with touch support -->
                        <div class="circle-button__icon circle-button__icon-touch">
                          <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z"></path>
                          </svg>
                        </div>
                        <!-- - browsers with touch support -->
                        <!-- - browsers without touch support -->
                        <div class="circle-button__icon circle-button__icon-mouse">
                          <svg class="svg-mouse" width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- border -->
                            <path class="svg-mouse__border" d="M11.5,0 C5.15875132,0 0,5.23135343 0,11.6610111 L0,23.3396542 C0,29.7691456 5.15875132,35 11.5,35 C17.8412487,35 23,29.7693119 23,23.3396542 L23,11.6610111 C23,5.23135343 17.8410847,0 11.5,0 Z M21.7222404,23.3396542 C21.7222404,29.0545544 17.136538,33.7037222 11.5,33.7037222 C5.86346203,33.7037222 1.27775956,29.0545544 1.27775956,23.3396542 L1.27775956,11.6610111 C1.27775956,5.946111 5.86346203,1.29627781 11.5,1.29627781 C17.136538,1.29627781 21.7222404,5.94594466 21.7222404,11.6610111 L21.7222404,23.3396542 Z"></path>
                            <!-- - border -->
                            <!-- wheel -->
                            <path class="svg-mouse__wheel" d="M11.5,4 C11.2238902,4 11,4.28321727 11,4.63321727 L11,10.3667827 C11,10.7167827 11.2238902,11 11.5,11 C11.7761098,11 12,10.7167827 12,10.3667827 L12,4.63321727 C11.9998717,4.28321727 11.7761098,4 11.5,4 Z"></path>
                            <!-- - wheel -->
                          </svg>
                        </div>
                        <!-- - browsers without touch support -->
                      </div>
                      <!-- - geometry wrapper -->
                    </div>
                  </div>
                  <div class="section-image section-masthead__background section-masthead__background_halfscreen">
                    <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                      <div class="js-transition-img__transformed-el">
                        <div class="lazy-bg" data-src="img/assets/projects/project-4.jpg"></div>
                      </div>
                    </div>
                    <!-- overlay -->
                    <div class="overlay overlay_dark overlay_deither section-masthead__overlay"></div>
                    <!-- - overlay -->
                  </div>
                </div>
                <div class="col-lg-6 align-self-end">
                  <div class="section-properties pt-small pt-md-0 pb-medium pb-md-2 container-fluid">
                    <div class="row">
                      <div class="section-properties__item col-lg-12 col-sm-6 mt-xsmall mt-md-small">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Role</div>
                          <div class="figure-info__value paragraph">Art Director</div>
                        </div>
                      </div>
                      <div class="section-properties__item col-lg-12 col-sm-6 mt-xsmall mt-md-small">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Start</div>
                          <div class="figure-info__value paragraph">20 Nov 2019</div>
                        </div>
                      </div>
                      <div class="section-properties__item col-lg-12 col-sm-6 mt-xsmall mt-md-small">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Launch</div>
                          <div class="figure-info__value paragraph">13 Dec 2019</div>
                        </div>
                      </div>
                      <div class="section-properties__item col-lg-12 col-sm-6 mt-xsmall mt-md-small">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Website</div>
                          <div class="figure-info__value paragraph"><a href="https://themeforest.net/user/artemsemkin">themeforest.net</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section MASTHEAD HALFSCREEN LEFT -->
          <!-- section CONTENT #1 -->
          <div class="section pt-medium pb-medium bg-white">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>I.</h2>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>Understand the Context</h2>
                      </div>
                      <div class="w-100"></div>
                      <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <p>Late hour new nay able fat each sell. Nor themselves age introduced frequently use unsatiable devonshire get. They why quit gay cold rose deal park. One same they four did ask busy. Reserved opinions fat him nay position. Breakfast as zealously</p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <!-- - section CONTENT #1 -->
          <!-- section IMAGE #1 -->
          <section class="section section-image section_h-800">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="img/assets/project4/img-4-1.jpg"></div>
              </div>
            </div>
          </section>
          <!-- - section IMAGE #1 -->
          <!-- section with color theme change on scroll-->
          <div class="section-scroll bg-white" data-arts-theme-text="dark" data-arts-default-theme="bg-white" data-arts-scroll-theme="bg-dark-2" data-arts-scroll-theme-text="light" data-arts-scroll-offset="-200" data-arts-scroll-trigger-hook="0.0">
            <!-- section CONTENT #2 -->
            <div class="section pt-medium pb-small">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-lg-6">
                    <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>II.</h2>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-lg-6">
                    <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>Precise Typography</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                          <p>On ye great do child sorry lived. Proceed cottage far letters ashamed get clothes day. Stairs regret at if matter to. On as needed almost at basket remain. By improved sensible servants children striking in surprise.</p>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <!-- - section CONTENT #2 -->
            <!-- IMAGES GALLERY BLOCK -->
            <div class="js-gallery">
              <!-- section GRID #1 -->
              <section class="section section-grid section-content overflow pt-xsmall pb-xsmall" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
                <div class="container-fluid">
                  <div class="grid grid_fluid-4 js-grid">
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 grid__sizer js-grid__sizer"></div>
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item">
                      <div class="section-grid__item">
                        <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project4/img-4-2.jpg" data-size="1560x1560" data-title="">
                            <div class="hover-zoom__inner">
                              <div class="hover-zoom__zoom">
                                <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                                  <div class="lazy"><img data-src="img/assets/project4/img-4-2_thumb.jpg" src="#" alt="" width="780" height="780"/>
                                  </div>
                                </div>
                              </div>
                            </div></a></div>
                      </div>
                    </div>
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item">
                      <div class="section-grid__item">
                        <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project4/img-4-3.jpg" data-size="1560x1560" data-title="">
                            <div class="hover-zoom__inner">
                              <div class="hover-zoom__zoom">
                                <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                                  <div class="lazy"><img data-src="img/assets/project4/img-4-3_thumb.jpg" src="#" alt="" width="780" height="780"/>
                                  </div>
                                </div>
                              </div>
                            </div></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- - section GRID #1 -->
              <!-- section GRID #2 -->
              <section class="section section-grid section-content overflow pt-xsmall pb-xsmall" data-arts-os-animation="data-arts-os-animation" data-grid-columns="1" data-grid-columns-tablet="1" data-grid-columns-mobile="1">
                <div class="container-fluid">
                  <div class="grid grid_fluid-4 js-grid">
                    <div class="grid__item grid__item_desktop-12 grid__item_tablet-12 grid__item_mobile-12 grid__item_fluid-4 grid__sizer js-grid__sizer"></div>
                    <div class="grid__item grid__item_desktop-12 grid__item_tablet-12 grid__item_mobile-12 grid__item_fluid-4 js-grid__item">
                      <div class="section-grid__item">
                        <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project4/img-4-4.jpg" data-size="1920x1080" data-title="">
                            <div class="hover-zoom__inner">
                              <div class="hover-zoom__zoom">
                                <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                                  <div class="lazy"><img data-src="img/assets/project4/img-4-4.jpg" src="#" alt="" width="1920" height="1080"/>
                                  </div>
                                </div>
                              </div>
                            </div></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- - section GRID #2 -->
              <!-- section GRID #3 -->
              <section class="section section-grid section-content overflow pt-xsmall pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
                <div class="container-fluid">
                  <div class="grid grid_fluid-4 js-grid">
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 grid__sizer js-grid__sizer"></div>
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item">
                      <div class="section-grid__item">
                        <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project4/img-4-5.jpg" data-size="1560x1560" data-title="">
                            <div class="hover-zoom__inner">
                              <div class="hover-zoom__zoom">
                                <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                                  <div class="lazy"><img data-src="img/assets/project4/img-4-5_thumb.jpg" src="#" alt="" width="780" height="780"/>
                                  </div>
                                </div>
                              </div>
                            </div></a></div>
                      </div>
                    </div>
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item">
                      <div class="section-grid__item">
                        <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project4/img-4-6.jpg" data-size="1560x1560" data-title="">
                            <div class="hover-zoom__inner">
                              <div class="hover-zoom__zoom">
                                <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                                  <div class="lazy"><img data-src="img/assets/project4/img-4-6_thumb.jpg" src="#" alt="" width="780" height="780"/>
                                  </div>
                                </div>
                              </div>
                            </div></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- - section GRID #3 -->
            </div>
            <!-- - IMAGES GALLERY BLOCK -->
          </div>
          <!-- - section with color theme change on scroll-->
          <!-- section CONTENT #3 -->
          <div class="section pt-medium pb-medium">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>III.</h2>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>Conclusion</h2>
                      </div>
                      <div class="w-100"></div>
                      <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <p>Comparison age not pianoforte increasing delightful now. Insipidity sufficient dispatched any reasonably led ask. Announcing if attachment resolution sentiments admiration me on diminution.</p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <!-- - section CONTENT #3 -->
          <!-- section NAV PROJECTS -->
          <section class="container-fluid section section-nav-projects section-fullheight text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-fullheight__inner section-nav-projects__inner_actual">
              <div class="section__divider section__divider_top"></div>
              <header class="section-nav-projects__header"><a class="section-nav-projects__link" href="project-details-5-bottom-container-center.html" data-pjax-link="flyingImage">
                  <div class="section-nav-projects__subheading small-caps mb-1 mb-md-2">Next Project</div>
                  <h2 class="section-nav-projects__heading h1 mt-0 mb-0">On the Edge</h2></a></header>
              <div class="section-nav-projects__wrapper-scroll-down text-center">
                <div class="circle-button js-circle-button">
                  <!-- curved label -->
                  <div class="circle-button__outer">
                    <div class="circle-button__wrapper-label">
                      <div class="circle-button__label small-caps">Keep Scrolling</div>
                    </div>
                  </div>
                  <!-- - curved label -->
                  <!-- geometry wrapper -->
                  <div class="circle-button__inner">
                    <div class="circle-button__circle" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                    </div>
                    <!-- browsers with touch support -->
                    <div class="circle-button__icon circle-button__icon-touch">
                      <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z"></path>
                      </svg>
                    </div>
                    <!-- - browsers with touch support -->
                    <!-- browsers without touch support -->
                    <div class="circle-button__icon circle-button__icon-mouse">
                      <svg class="svg-mouse" width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- border -->
                        <path class="svg-mouse__border" d="M11.5,0 C5.15875132,0 0,5.23135343 0,11.6610111 L0,23.3396542 C0,29.7691456 5.15875132,35 11.5,35 C17.8412487,35 23,29.7693119 23,23.3396542 L23,11.6610111 C23,5.23135343 17.8410847,0 11.5,0 Z M21.7222404,23.3396542 C21.7222404,29.0545544 17.136538,33.7037222 11.5,33.7037222 C5.86346203,33.7037222 1.27775956,29.0545544 1.27775956,23.3396542 L1.27775956,11.6610111 C1.27775956,5.946111 5.86346203,1.29627781 11.5,1.29627781 C17.136538,1.29627781 21.7222404,5.94594466 21.7222404,11.6610111 L21.7222404,23.3396542 Z"></path>
                        <!-- - border -->
                        <!-- wheel -->
                        <path class="svg-mouse__wheel" d="M11.5,4 C11.2238902,4 11,4.28321727 11,4.63321727 L11,10.3667827 C11,10.7167827 11.2238902,11 11.5,11 C11.7761098,11 12,10.7167827 12,10.3667827 L12,4.63321727 C11.9998717,4.28321727 11.7761098,4 11.5,4 Z"></path>
                        <!-- - wheel -->
                      </svg>
                    </div>
                    <!-- - browsers without touch support -->
                  </div>
                  <!-- - geometry wrapper -->
                </div>
              </div>
            </div>
            <div class="container section-nav-projects__next-image section-fullheight__inner">
              <div class="section-nav-projects__wrapper-image js-transition-img overflow">
                <div class="lazy js-transition-img__transformed-el"><img class="of-cover" src="#" data-src="img/assets/projects/project-5.jpg" alt="" width="1920" height="1280"/></div>
              </div>
            </div>
            <div class="section-fullheight__inner hidden"></div>
          </section>
          <!-- - section NAV PROJECTS -->
        </main>
        <!-- PAGE FOOTER -->
        <!-- - PAGE FOOTER -->
      </div>
      <!-- - PAGE MAIN -->
    </div>
       <?php include("footer.php");?>