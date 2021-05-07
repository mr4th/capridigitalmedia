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
          <!-- section MASTHEAD -->
          <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
          <!-- - section MASTHEAD -->
          <!-- section GRID PROJECTS 2 COLUMNS -->
          <section class="section section-grid section-content overflow bg-dark-1 pt-large pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-tablet="2" data-grid-mobile="1" data-arts-theme-text="dark">
            <div class="container-fluid">
              <div class="row justify-content-between align-items-center section pb-medium">
                <div class="col-12 col-lg-auto">
                  <div class="section-grid__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">Works</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mr-auto"></div>
                </div>
                <div class="col-12 col-lg-auto pt-medium pt-md-0 pb-md-3">
                  <div class="filter js-filter">
                    <div class="filter__inner">
                      <div class="container-fluid no-gutters">
                        <!-- items -->
                        <div class="row justify-content-center">
                          <!-- all (*) -->
                          <div class="col-lg-auto col-12 filter__item filter__item_active js-filter__item" data-filter="*">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">All</div>
                          </div>
                          <!-- - all (*) -->
                          <div class="col-lg-auto col-12 filter__item js-filter__item" data-filter=".category-portraits">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Portraits</div>
                          </div>
                          <div class="col-lg-auto col-12 filter__item js-filter__item" data-filter=".category-ui-ux-design">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">UI UX Design</div>
                          </div>
                          <div class="col-lg-auto col-12 filter__item js-filter__item" data-filter=".category-branding">
                            <div class="split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Branding</div>
                          </div>
                          <!-- - items-->
                        </div>
                        <!-- underline -->
                        <div class="filter__underline js-filter__underline"></div>
                        <!-- - underline -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid grid_fluid-4 js-grid">
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 grid__sizer js-grid__sizer"></div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-portraits">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-1-fullscreen-center.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-1_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">Portraits</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">Nordic Adventure</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-portraits">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-2-bottom-center.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-2_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">Portraits</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">Sunrise in Desert</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-ui-ux-design">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-3-halfscreen-left-right.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-3_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">UI UX Design</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">Cassio Apartment</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-branding">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-4-halfscreen-left-left.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-4_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">Branding</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">Nothern Wave</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-portraits">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-5-bottom-container-center.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-5_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">Portraits</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">On the Edge</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
                <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-4 js-grid__item category-portraits">
                  <div class="section-grid__item"><a class="hover-zoom figure-project figure-project_hover-inner" href="project-details-11-fullscreen-center.html">
                      <div class="hover-zoom__inner">
                        <div class="hover-zoom__zoom">
                          <div class="figure-project__wrapper-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                            <div class="lazy"><img data-src="img/assets/projects/project-11_thumb.jpg" src="#" alt="" width="1024" height="1024"/></div>
                          </div>
                        </div>
                        <div class="figure-project__wrapper-content">
                          <div class="figure-project__category figure-project__category_absolute"><span class="small-caps">Portraits</span></div>
                          <div class="figure-project__content figure-project__content_absolute">
                            <h2 class="h3 figure-project__heading">Dancing in the Dark</h2>
                          </div>
                        </div>
                        <div class="figure-project__overlay overlay overlay_dark"></div>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section GRID PROJECTS 2 COLUMNS -->
        </main>
          <?php include("footer.php");?>