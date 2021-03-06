<?php include("header.php");?>
  <body>
   <?php include("preloader.php");?>
   <?php include("nav.php");?>
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
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead section-fullheight text-center bg-dark-1" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="light" data-background-color="var(--color-dark-1)">
            <div class="section-masthead__inner section-fullheight__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__heading split-text js-split-text overflow" data-split-text-type="lines,chars" data-split-text-set="chars">
                    <h1 class="xl mt-0 mb-0">Capri Digitial Media</h1>
                  </div>
                  <div class="w-100">
                    <div class="section-masthead__subheading h4 mt-0-5 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Strategy. Design. Digital. Media</span></div>
                  </div>
                  <div class="w-100">
                    <div class="section-masthead__wrapper-button mt-xsmall"><a class="button button_bordered button_white" data-hover="Get Started" href="page-inner-contacts-2.php" target="_blank"><span class="button__label-hover">Get Started</span></a>
                    </div>
                  </div>
                </div>
                <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_center">
                  <div class="circle-button js-circle-button" data-arts-os-animation="true">
                    <!-- curved label -->
                    <div class="circle-button__outer">
                      <div class="circle-button__wrapper-label">
                        <div class="circle-button__label small-caps">View Capri World</div>
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
                  <div class="lazy-bg" data-src="img/city.jpg"></div>
                </div>
              </div>
              <!-- overlay-->
              <div class="overlay overlay_bottom-dark section-masthead__overlay"></div>
              <!-- - overlay -->
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section CONTENT #1 -->
          <section class="section section-content clearfix bg-dark-1 pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="light" id="demo">
            <div class="section-content__inner">
              <div class="w-100"></div>
              <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
              <div class="w-100"></div>
              <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                <h2>Who We Are</h2>
                <p>We're an island of wild creative talents and seasoned professionals. Because giving your brand wings to fly in 
                  competitive markets takes a mix of ideas, guts, courage, imagination, creativity, and a dose of crazy</p>
              </div>
            </div>
          </section>
          <!-- - section CONTENT #1 -->
          <!-- section GRID DEMO 3 COLUMNS -->
          <section class="section section-grid section-content overflow pb-medium bg-dark-1" data-arts-theme-text="light" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container-fluid">
              <div class="grid grid_fluid-3 js-grid">
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy grid__sizer js-grid__sizer"></div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/iPhone-XS.png" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Mobile App Dev</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#">
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/Samsung.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Responsive App Design</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#">
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/design-graphics.png" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph"> Graphics Design</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/group.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Web App Dev</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#">
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/oic4.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Server Installations</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/install.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Digital Marketing</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/African.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">UI/UX Responsive Design</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/computer.jpg" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Big Data & Analytics</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-4 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__item_fluid-3-fancy js-grid__item">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="keyboard_arrow_right" data-arts-cursor-hide-native="true" href="#" >
                        <!-- zoom effect container -->
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <!-- image -->
                            <div class="figure-image__wrapper-img">
                              <div class="lazy"><img data-src="img/databas.png" src="#" alt="" width="840" height="525"/>
                              </div>
                            </div>
                            <!-- - image -->
                          </div>
                        </div>
                        <!-- - zoom effect container -->
                        <!-- caption -->
                        <div class="figure-image__caption section-image__caption hover-zoom__caption text-left section-image__caption-horizontal">
                          <div class="figure-image__wrapper-caption paragraph">Database Management System</div>
                        </div>
                        <!-- - caption --></a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section GRID DEMO 3 COLUMNS -->
          <!-- section CONTENT #2 -->
          <section class="section section-content clearfix bg-white pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-content__inner">
              <div class="w-100"></div>
              <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
              <div class="w-100"></div>
              <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                <h2>Portfolio Detial View</h2>
                <p>We solve your problems, then we identify and stimulate growth opportunities</p>
              </div>
            </div>
          </section>
          <!-- - section CONTENT #2 -->
          <!-- section DEMO LIST HOVER REVEAL -->
          <section class="section section-list overflow bg-white pb-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container-fluid list-projects list-demos text-center js-list-hover" data-arts-hover-strength="0.35" data-arts-hover-scale-texture="1.2" data-arts-hover-scale-plane="0.33">
              <div class="row align-items-center">
                <div class="col-md-6"><a class="list-projects__item list-demos__item pt-medium pb-medium js-change-text-hover js-list-hover__link" href="projects-slider-fullscreen-2.php" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0.0" >
                    <div class="row align-items-center justify-content-center">
                      <!-- hidden AJAX transition image -->
                      <div class="col-12 d-md-none">
                        <div class="js-transition-img list-projects__cover overflow js-list-hover__cover">
                          <div class="js-transition-img__transformed-el"><img class="of-cover" data-texture-src="img/mocku.jpg" src="#" alt=""/></div>
                        </div>
                      </div>
                      <!-- - hidden AJAX transition image -->
                      <!-- header -->
                      <div class="col-md-10">
                        <h3 class="h3 list-projects__heading js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words">Slider</h3>
                      </div>
                      <!-- - header -->
                    </div></a></div>
                <div class="list-demos__divider d-none d-md-block"></div>
                <div class="col-md-6"><a class="list-projects__item list-demos__item pt-medium pb-medium js-change-text-hover js-list-hover__link" href="projects-slider-halfscreen-6.php" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0.0" target="_blank">
                    <div class="row align-items-center justify-content-center">
                      <!-- hidden AJAX transition image -->
                      <div class="col-12 d-md-none">
                        <div class="js-transition-img list-projects__cover overflow js-list-hover__cover">
                          <div class="js-transition-img__transformed-el"><img class="of-cover" data-texture-src="img/swan.jpg" src="#" alt=""/></div>
                        </div>
                      </div>
                      <!-- - hidden AJAX transition image -->
                      <!-- header -->
                      <div class="col-md-10">
                        <h3 class="h3 list-projects__heading js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words">Distortion</h3>
                      </div>
                      <!-- - header -->
                    </div></a></div>
              </div>
              <!-- fixed canvas -->
              <canvas class="list-project__canvas js-list-hover__canvas" data-arts-scroll-fixed="data-arts-scroll-fixed"></canvas>
              <!-- - fixed canvas -->
            </div>
          </section>
          <!-- - section DEMO LIST HOVER REVEAL -->
          <
          <!-- - section GRID DEMO 4 COLUMNS -->
          <!-- section DEMO #1 -->
          <div class="section bg-light-1 pt-medium pb-medium overflow">
            <section class="section section-demo section_w-container-right text-left">
              <div class="container-fluid section-demo__container-left">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="section-demo__content">
                      <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                        <div class="section-content__inner">
                          <div class="w-100"></div>
                          <div class="section__headline mb-1 mb-md-2 mr-auto"></div>
                          <div class="w-100"></div>
                          <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                            <h2>Works</h2>
                          </div>
                          <div class="w-100"></div>
                          <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                            <p>Brief showcase of some of our past projects</p>
                          </div>
                        </div>
                      </section>
                      <aside class="aside aside-counters section">
                        <div class="container no-gutters">
                          <div class="row justify-content-center">
                            <!-- counter -->
                            <div class="aside-counters__wrapper-item col-6 mt-small">
                              <div class="counter js-counter" data-counter-start="0" data-counter-target="13" data-counter-duration="4">
                                <!-- animated number -->
                                <div class="counter__number js-counter__number">13</div>
                                <!-- - animated number -->
                                <div class="counter__label">Portfolio Templates</div>
                              </div>
                            </div>
                            <!-- - counter -->
                            <!-- counter -->
                            <div class="aside-counters__wrapper-item col-6 mt-small">
                              <div class="counter js-counter" data-counter-start="0" data-counter-target="8" data-counter-duration="4">
                                <!-- animated number -->
                                <div class="counter__number js-counter__number">8</div>
                                <!-- - animated number -->
                                <div class="counter__label">work Templates</div>
                              </div>
                            </div>
                            <!-- - counter -->
                          </div>
                        </div>
                      </aside>
                      <div class="mt-small d-lg-none"><a class="button button_bordered button_black" data-hover="Explore Projects" href="page-inner-about-2.php" target="_self"><span class="button__label-hover">Explore Projects</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="section-demo__stacked-images pt-small pt-md-0">
                      <div class="section-demo__stacked-image" data-arts-parallax="element" data-arts-parallax-x="10%">
                        <div class="lazy"><img src="#" data-src="img/goaltravel3.png" width="940" height="1410" alt=""></div>
                      </div>
                      <div class="section-demo__stacked-image" data-arts-parallax="element" data-arts-parallax-x="20%">
                        <div class="lazy"><img src="#" data-src="img/agro3.png" width="940" height="1410" alt=""></div>
                      </div>
                      <div class="section-demo__stacked-image" data-arts-parallax="element" data-arts-parallax-x="30%">
                        <div class="lazy"><img src="#" data-src="img/build3.png" width="940" height="1410" alt=""></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="section-demo__bg section-demo__bg_right bg-light-3 d-none d-lg-block"></div>
            <div class="section-demo__wrapper-button section-demo__wrapper-button_right d-none d-lg-flex"><a class="circle-button circle-button_link js-circle-button" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-icon="add" href="page-inner-about-2.php" target="_self" data-arts-os-animation="true">
                <!-- curved label -->
                <div class="circle-button__outer">
                  <div class="circle-button__wrapper-label">
                    <div class="circle-button__label small-caps">Explore Projects</div>
                  </div>
                </div>
                <!-- - curved label -->
                <!-- geometry wrapper -->
                <div class="circle-button__inner">
                  <div class="circle-button__circle">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                  </div>
                  <!-- browsers with touch support -->
                  <div class="circle-button__icon circle-button__icon-touch">
                    <div class="material-icons">add</div>
                  </div>
                  <!-- - browsers with touch support -->
                </div>
                <!-- - geometry wrapper --></a>
            </div>
          </div>
          <!-- - section DEMO #1 -->
          <!-- section DEMO #2 -->
          <div class="section bg-light-2">
            <section class="section section-demo section_w-container-left text-left">
              <div class="container-fluid section-demo__container-right">
                <div class="row align-items-center">
                  <div class="col-lg-6 offset-lg-6">
                    <div class="section-demo__content pt-medium pb-medium">
                      <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                        <div class="section-content__inner">
                          <div class="w-100"></div>
                          <div class="section__headline mb-1 mb-md-2 mr-auto"></div>
                          <div class="w-100"></div>
                          <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                            <h2>Our Partners page </h2>
                          </div>
                          <div class="w-100"></div>
                          <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                            <p>Agrocentric.com exists to provide a 
                              networking platform for Local farmers (Suppliers) in Africa and to the Buyers around the world.</p>
                          </div>
                        </div>
                      </section>
                      <aside class="aside aside-counters section">
                        <div class="container no-gutters">
                          <div class="row justify-content-center">
                            <!-- counter -->
                            <div class="aside-counters__wrapper-item col-6 mt-small">
                              <div class="counter js-counter" data-counter-start="0" data-counter-target="8" data-counter-duration="4">
                                <!-- animated number -->
                                <div class="counter__number js-counter__number">8</div>
                                <!-- - animated number -->
                                <div class="counter__label">Agrocentric World</div>
                              </div>
                            </div>
                            <!-- - counter -->
                            <!-- counter -->
                            <div class="aside-counters__wrapper-item col-6 mt-small">
                              <div class="counter js-counter" data-counter-start="0" data-counter-target="9" data-counter-duration="4">
                                <!-- animated number -->
                                <div class="counter__number js-counter__number">9</div>
                                <!-- - animated number -->
                                <div class="counter__label">Blog</div>
                              </div>
                            </div>
                            <!-- - counter -->
                          </div>
                        </div>
                      </aside>
                      <div class="mt-small d-lg-none"><a class="button button_bordered button_black" data-hover="Explore Pages" href="projects-slider-fullscreen-3.php"><span class="button__label-hover">Explore Pages</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="section-demo__bg section-demo__bg_wide section-demo__bg_left bg-white" data-arts-parallax data-arts-parallax-factor="0.3">
              <div>
                <div class="lazy-bg" data-src="img/capridigimedia-20210115-0008.jpg"></div>
              </div>
            </div>
            <div class="section-demo__wrapper-button section-demo__wrapper-button_left d-none d-lg-flex"><a class="circle-button circle-button_link js-circle-button" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-icon="add" href="projects-slider-fullscreen-3.php" target="_blank" data-arts-os-animation="true">
                <!-- curved label -->
                <div class="circle-button__outer">
                  <div class="circle-button__wrapper-label">
                    <div class="circle-button__label small-caps">Explore Pages</div>
                  </div>
                </div>
                <!-- - curved label -->
                <!-- geometry wrapper -->
                <div class="circle-button__inner">
                  <div class="circle-button__circle">
                    <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                    </svg>
                  </div>
                  <!-- browsers with touch support -->
                  <div class="circle-button__icon circle-button__icon-touch">
                    <div class="material-icons">add</div>
                  </div>
                  <!-- - browsers with touch support -->
                </div>
                <!-- - geometry wrapper --></a>
            </div>
          </div>
          <!-- - section DEMO #2 -->
          <div class="bg-white text-center section-scroll" data-arts-theme-text="dark" data-arts-scroll-theme-text="light" data-arts-default-theme="bg-white" data-arts-scroll-theme="bg-dark-1" data-arts-scroll-trigger-hook="0.0" data-arts-scroll-offset="-100">
            <!-- section CONTENT #4 -->
            <section class="section section-content clearfix pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
              <div class="section-content__inner">
                <div class="w-100"></div>
                <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
                <div class="w-100"></div>
                <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                  <h2>Features</h2>
                </div>
              </div>
            </section>
            <!-- - section CONTENT #4 -->
            <!-- section FEATURES -->
            <section class="section section-features section-grid pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="4" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
              <div class="container">
                <div class="row row-gutters">
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-repeat"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">AJAX Transitions</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-magic-wand"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">WebGL Motion Effects</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-move"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Smooth Scrolling</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-text"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Split Text Animations</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-font"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Fluid Typography</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-click"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Interactive Cursor</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-background"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Parallax Effects</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-expand"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Fullscreen Overlay Menu</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-dark-light"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Dark &amp; Light Templates</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-form"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Working Contact Form</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-responsive"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Fully Responsive</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-gutters">
                    <div class="section-grid__item">
                      <div class="figure-icon">
                        <!-- icon -->
                        <div class="figure-icon__wrapper-icon" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                          <div class="figure-icon__icon icon-file"></div>
                        </div>
                        <!-- - icon -->
                        <!-- header -->
                        <div class="figure-icon__header">
                          <div class="figure-feature__heading paragraph strong mt-1 mb-0">Well Documented</div>
                        </div>
                        <!-- - header -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- - section FEATURES -->
            <!-- section CTA -->
            <section class="section section-cta text-center section-content pt-medium pb-large bg-dark-1" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="light">
              <div class="section__content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                      <div class="section-cta__heading split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <h2 class="h2 mt-0 mt-md-1 mb-1">Design Your Stunning Website Today with Capri Digital Media</h2>
                      </div>
                    </div>
                    <div class="col-12 col-lg-10">
                      <div class="section-content__button"><a class="button button_solid button_black" data-hover="Download Now" href="https://capridigitalmedia.com" target="_blank"><span class="button__label-hover">Start Today</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section__bg">
                <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                  <div>
                    <div class="lazy-bg" data-src="img/background.jpg"></div>
                  </div>
                </div>
                <!-- overlay-->
                <div class="overlay overlay_top-dark section-masthead__overlay"></div>
                <!-- - overlay -->
              </div>
            </section>
            <!-- - section CTA -->
          </div>
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>