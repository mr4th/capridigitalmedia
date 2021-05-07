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
      <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container" data-arts-theme-text="light">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD FULLSCREEN -->
          <section class="section section-masthead section-fullheight text-center" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="dark" data-background-color="var(--color-dark-1)">
            <div class="section-masthead__inner section-fullheight__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Portraits</span></div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">La Isla Bonita</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
                <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_center">
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
              </header>
            </div>
            <div class="section-image section-masthead__background section-masthead__background_fullscreen">
              <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                <div class="js-transition-img__transformed-el">
                  <div class="lazy-bg" data-src="img/assets/projects/project-9.jpg"></div>
                </div>
              </div>
              <!-- overlay-->
              <div class="overlay overlay_dark-30 section-masthead__overlay"></div>
              <!-- - overlay -->
            </div>
          </section>
          <!-- - section MASTHEAD FULLSCREEN -->
          <!-- IMAGES & PROPERTIES -->
          <div class="container-fluid no-gutters">
            <div class="row no-gutters">
              <div class="col-lg-4 order-lg-3">
                <div class="container-fluid container-fluid_paddings h-100">
                  <div class="row h-100 align-items-center">
                    <div class="col">
                      <section class="section section-properties section-content py-1">
                        <div class="container-fluid no-gutters">
                          <div class="row flex-wrap">
                            <div class="col-lg-12 col-sm-6 col-12 section-properties__item my-1">
                              <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                <div class="figure-info__option small-caps">Role</div>
                                <div class="figure-info__value paragraph">Photographer</div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12 section-properties__item my-1">
                              <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                <div class="figure-info__option small-caps">Start</div>
                                <div class="figure-info__value paragraph">20 Nov 2019</div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12 section-properties__item my-1">
                              <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                <div class="figure-info__option small-caps">Launch</div>
                                <div class="figure-info__value paragraph">12 Jan 2020</div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12 section-properties__item my-1">
                              <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                <div class="figure-info__option small-caps">Website</div>
                                <div class="figure-info__value paragraph"><a href="https://themeforest.net/user/artemsemkin/portfolio" target="_blank">themeforest.net</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <section class="section section-image">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div class="lazy"><img data-src="img/assets/project9/img-9-1.jpg" src="#" alt="" width="1280" height="1920"/></div>
                  </div>
                </section>
              </div>
              <div class="col-lg-4 order-lg-2">
                <section class="section section-image">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div class="lazy"><img data-src="img/assets/project9/img-9-2.jpg" src="#" alt="" width="1280" height="1920"/></div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- - IMAGES & PROPERTIES -->
          <!-- section IMAGE #2 -->
          <section class="section section-image section_h-800">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="img/assets/project9/img-9-3.jpg"></div>
              </div>
            </div>
          </section>
          <!-- - section IMAGE #2 -->
          <div class="container-fluid no-gutters">
            <div class="row no-gutters">
              <div class="col-lg-6">
                <section class="section section-image">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div class="lazy"><img data-src="img/assets/project9/img-9-4.jpg" src="#" alt="" width="960" height="960"/></div>
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="section section-image">
                  <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                    <div class="lazy"><img data-src="img/assets/project9/img-9-5.jpg" src="#" alt="" width="960" height="960"/></div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- - IMAGES -->
          <!-- section NAV PROJECTS -->
          <section class="container-fluid section section-nav-projects section-fullheight text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-fullheight__inner section-nav-projects__inner_actual">
              <header class="section-nav-projects__header"><a class="section-nav-projects__link" href="project-details-10-halfscreen-left-right.html" data-pjax-link="flyingImage">
                  <div class="section-nav-projects__subheading small-caps mb-1 mb-md-2">Next Project</div>
                  <h2 class="section-nav-projects__heading h1 mt-0 mb-0">Kinsey Premium Furniture</h2></a></header>
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
                <div class="lazy js-transition-img__transformed-el"><img class="of-cover" src="#" data-src="img/assets/projects/project-10.jpg" alt="" width="1920" height="1280"/></div>
              </div>
            </div>
            <div class="section-fullheight__inner hidden"></div>
          </section>
          <!-- - section NAV PROJECTS -->
        </main>
        <!-- PAGE FOOTER -->
          <?php include("footer.php");?>