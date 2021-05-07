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
      <div class="js-smooth-scroll bg-dark-3" id="page-wrapper" data-barba="container" data-arts-theme-text="light">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD HALFSCREEN LEFT -->
          <section class="section section-masthead section-fullheight pt-large pt-md-0" data-arts-os-animation="data-arts-os-animation" data-arts-theme-text="dark" data-background-color="var(--color-dark-3)">
            <div class="section-masthead__inner section-fullheight__inner section-fullheight__inner_mobile-auto">
              <div class="row no-gutters h-100 align-items-center">
                <div class="col-lg-6 h-100 order-lg-2">
                  <div class="container-fluid container-fluid_paddings h-100">
                    <div class="row align-items-center h-100">
                      <div class="col">
                        <header class="section-masthead__header justify-content-center">
                          <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>UI UX Design</span></div>
                          <div class="w-100"></div>
                          <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                            <h1 class="h1 mt-0 mb-0">Cassio Apartment</h1>
                          </div>
                          <div class="w-100"></div>
                          <div class="section__headline mt-2 mr-auto"></div>
                        </header>
                      </div>
                    </div>
                    <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_left d-none d-lg-block">
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
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1 align-self-stretch">
                  <div class="section-image section-masthead__background section-masthead__background_halfscreen mt-small mt-md-0">
                    <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                      <div class="js-transition-img__transformed-el">
                        <div class="lazy-bg" data-src="img/assets/projects/project-3.jpg"></div>
                      </div>
                    </div>
                    <div class="section-masthead__bg bg-dark-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section MASTHEAD HALFSCREEN LEFT -->
          <!-- section CONTENT -->
          <div class="section pt-medium pb-medium">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section__headline mb-1"></div>
                      <div class="w-100"></div>
                      <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                        <h2>The Story Behind</h2>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                    <div class="section-content__inner">
                      <div class="w-100"></div>
                      <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <p>Whatever steepest yet her beyond looked either day wished nay. By doubtful disposed do juvenile an. Now curiosity you Estate why old him her surprise finished families graceful. Gave led past poor met fine was new. llowance repulsive sex may contained can set suspected abilities cordially. Do part am he high rest.</p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <!-- - section CONTENT -->
          <!-- section IMAGE #1 -->
          <section class="section section-image section_h-800 section_w-container-left">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="img/assets/project3/img-3-1.jpg"></div>
              </div>
            </div>
            <div class="section-image__caption paragraph section-image__caption-horizontal text-right">Cooking Area</div>
          </section>
          <!-- - section IMAGE #1 -->
          <!-- IMAGES GALLERY BLOCK -->
          <section class="section section-grid overflow js-gallery" data-arts-os-animation data-grid-columns="1">
            <div class="container">
              <div class="row section mt-medium mb-medium">
                <div class="col-lg-6 offset-lg-1">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project3/img-3-2.jpg" data-size="1460x1920" data-title="Steel &amp; Glass">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/assets/project3/img-3-2_thumb.jpg" src="#" alt="" width="730" height="960"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption section-image__caption-horizontal text-right">
                          <div class="figure-image__wrapper-caption paragraph">Steel &amp; Glass</div>
                        </div></a></div>
                  </div>
                </div>
              </div>
              <div class="row section mt-medium mb-medium justify-content-lg-end">
                <div class="col-lg-8">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project3/img-3-3.jpg" data-size="1460x1460" data-title="Durable Wooden Furniture">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/assets/project3/img-3-3_thumb.jpg" src="#" alt="" width="730" height="730"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption section-image__caption-horizontal text-left">
                          <div class="figure-image__wrapper-caption paragraph">Durable Wooden Furniture</div>
                        </div></a></div>
                  </div>
                </div>
              </div>
              <div class="row section mt-medium mb-medium">
                <div class="col-lg-6 offset-lg-2">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project3/img-3-4.jpg" data-size="1460x1920" data-title="Bathroom">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/assets/project3/img-3-4_thumb.jpg" src="#" alt="" width="730" height="960"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption section-image__caption-horizontal text-right">
                          <div class="figure-image__wrapper-caption paragraph">Bathroom</div>
                        </div></a></div>
                  </div>
                </div>
              </div>
              <div class="row section mt-medium mb-medium">
                <div class="col-lg-5 offset-lg-5">
                  <div class="section-grid__item">
                    <div class="figure-image section-image"><a class="hover-zoom figure-image__link" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.6" data-arts-cursor-icon="add" data-arts-cursor-hide-native="true" href="img/assets/project3/img-3-5.jpg" data-size="1460x1460" data-title="In the Shadows">
                        <div class="hover-zoom__inner">
                          <div class="hover-zoom__zoom">
                            <div class="figure-image__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy"><img data-src="img/assets/project3/img-3-5_thumb.jpg" src="#" alt="" width="730" height="730"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="figure-image__caption section-image__caption hover-zoom__caption section-image__caption-horizontal text-left">
                          <div class="figure-image__wrapper-caption paragraph">In the Shadows</div>
                        </div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - IMAGES GALLERY BLOCK -->
          <!-- section IMAGE #2 -->
          <section class="section section-image section_h-800 section_w-container-right">
            <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
              <div>
                <div class="lazy-bg" data-src="img/assets/project3/img-3-6.jpg"></div>
              </div>
            </div>
            <div class="section-image__caption paragraph text-left">Bedroom</div>
          </section>
          <!-- - section IMAGE #2 -->
          <!-- section NAV PROJECTS -->
          <section class="container-fluid section section-nav-projects section-fullheight text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-fullheight__inner section-nav-projects__inner_actual">
              <header class="section-nav-projects__header"><a class="section-nav-projects__link" href="project-details-4-halfscreen-left-left.html" data-pjax-link="flyingImage">
                  <div class="section-nav-projects__subheading small-caps mb-1 mb-md-2">Next Project</div>
                  <h2 class="section-nav-projects__heading h1 mt-0 mb-0">Nothern Wave</h2></a></header>
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
                <div class="lazy js-transition-img__transformed-el"><img class="of-cover" src="#" data-src="img/assets/projects/project-4.jpg" alt="" width="1920" height="1280"/></div>
              </div>
            </div>
            <div class="section-fullheight__inner hidden"></div>
          </section>
          <!-- - section NAV PROJECTS -->
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>