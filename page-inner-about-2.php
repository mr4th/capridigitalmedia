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
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Me, Myself &amp; I</span></div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h2">Hi there! We are capri digital media</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section ABOUT -->
          <section class="section section-about section-content" data-arts-os-animation="data-arts-os-animation">
            <div class="container-fluid section-about__content">
              <div class="row no-gutters">
                <div class="col-lg-6">
                  <div class="section-content__image">
                    <section class="section section-image z-50 section_h-800">
                      <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                        <div class="lazy"><img data-src="img/capridigimedia-20210115-0002.jpg" src="#" alt=""/></div>
                      </div>
                    </section>
                  </div>
                  <div class="container-fluid">
                    <div class="section-about__floating-image" data-arts-parallax="element" data-arts-parallax-y="-25%">
                      <div class="w-100 h-100">
                        <div data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.1">
                          <div class="lazy"><img data-src="img/capr.jpg" src="#" alt="" width="420" height="420"/></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="pl-md-5">
                    <section class="section section-content clearfix" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                          <p class="has-drop-cap">
We build websites that matches international standards, custom
Software development, Mobile Application development, the best UI/UX interface for mobile applications, Data and analytics, Digital Marketing, branding and virtual assistant services.</p>
                          <p>We're an island of wild creative talents and seasoned professionals. Because giving your brand wings to fly in competitive markets takes a mix of ideas, guts, courage, imagination, creativity, and a dose of crazy
</p>
                        </div>
                      </div>
                    </section>
                    <aside class="aside aside-counters">
                      <div class="row">
                        <div class="col-6 mt-small">
                          <div class="counter js-counter" data-counter-start="0" data-counter-target="139" data-counter-duration="12">
                            <!-- animated number -->
                            <div class="counter__number js-counter__number">139</div>
                            <!-- - animated number -->
                            <div class="counter__label">web apps</div>
                          </div>
                        </div>
                        <div class="col-6 mt-small">
                          <div class="counter js-counter" data-counter-start="0" data-counter-target="52" data-counter-duration="12">
                            <!-- animated number -->
                            <div class="counter__number js-counter__number">52</div>
                            <!-- - animated number -->
                            <div class="counter__label">Happy Clients</div>
                          </div>
                        </div>
                        <div class="col-6 mt-small">
                          <div class="counter js-counter" data-counter-start="0" data-counter-target="632" data-counter-duration="12">
                            <!-- animated number -->
                            <div class="counter__number js-counter__number">632</div>
                            <!-- - animated number -->
                            <div class="counter__label">responsive designs</div>
                          </div>
                        </div>
                        <div class="col-6 mt-small">
                          <div class="counter js-counter" data-counter-start="0" data-counter-target="245" data-counter-duration="12">
                            <!-- animated number -->
                            <div class="counter__number js-counter__number">245</div>
                            <!-- - animated number -->
                            <div class="counter__label">branding</div>
                          </div>
                        </div>
                      </div>
                    </aside>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section ABOUT -->
          <!-- section CONTENT #1 -->
          <section class="section section-content clearfix pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-content__inner">
              <div class="w-100"></div>
              <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
              <div class="w-100"></div>
              <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                <h2>about us </h2>
              </div>
            </div>
          </section>
          <!-- - section CONTENT #1 -->
          <!-- section LIST ALBUMS COVERS -->
          <section class="section section-list overflow pb-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="list-projects text-center text-md-left"><a class="list-projects__item container pt-xsmall pb-xsmall hover-zoom js-arrow js-album" href="#">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                  <div class="col-md-10">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                      <!-- album cover -->
                      <div class="col-auto">
                        <div class="hover-zoom__inner block-circle overflow">
                          <div class="hover-zoom__zoom">
                            <div class="list-projects__thumbnail list-projects__thumbnail_small" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy-bg" data-src="img/capridigimedia-20210115-0008.jpg"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- - album cover -->
                      <div class="w-100 d-md-none"></div>
                      <!-- header -->
                      <div class="col-md-auto col-12">
                        <h3 class="h3 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>mobile devs</span><span class="block-counter__counter">17</span></h3>
                      </div>
                      <!-- - header -->
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-right__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                </div>
                <!-- album photos -->
                <div class="js-album__items d-none"><img src="#" data-album-src="img/capridigimedia-20210115-0012.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0010.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0011.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0015.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0007.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0009.jpg" width="1920" height="1920" data-title="" alt=""/>
                </div>
                <!-- - album photos --></a><a class="list-projects__item container pt-xsmall pb-xsmall hover-zoom js-arrow js-album" href="#">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                  <div class="col-md-10">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                      <!-- album cover -->
                      <div class="col-auto">
                        <div class="hover-zoom__inner block-circle overflow">
                          <div class="hover-zoom__zoom">
                            <div class="list-projects__thumbnail list-projects__thumbnail_small" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="lazy-bg" data-src="img/capridigimedia-20210115-0013.jpg"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- - album cover -->
                      <div class="w-100 d-md-none"></div>
                      <!-- header -->
                      <div class="col-md-auto col-12">
                        <h3 class="h3 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Digital Marketing</span><span class="block-counter__counter">23</span></h3>
                      </div>
                      <!-- - header -->
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                      <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                      </svg>
                      <div class="arrow__pointer arrow-right__pointer"></div>
                      <div class="arrow__triangle"></div>
                    </div>
                  </div>
                </div>
                <!-- album photos -->
                <div class="js-album__items d-none"><img src="#" data-album-src="img/capridigimedia-20210115-0003.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0001.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0004.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0005.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/capridigimedia-20210115-0002.jpg" width="1920" height="1920" data-title="" alt=""/>
                </div>
                <!-- - album photos --></a><a class="list-projects__item container pt-xsmall pb-xsmall hover-zoom js-arrow js-album" href="#">
               
            
          </section>
          <!-- - section LIST ALBUMS COVERS -->
        
          <!-- section CONTENT #2 -->
          <section class="section section-content clearfix pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-content__inner">
              <div class="w-100"></div>
              <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
              <div class="w-100"></div>
              <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                <h2>Partners</h2>
              </div>
            </div>
          </section>
          <!-- - section CONTENT #2 -->
          <!-- section LOGOS -->
          <section class="section section-logos section-grid pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="3" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="row row-gutters justify-content-center">
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/beller.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>beller</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/cs.png.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>c and s</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/hardrock.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>hardrocks</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/mccartney.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>Mc cartney</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/t-mobile.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>t- mobile</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/unlimited.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>unlimited</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/Logo-Grid-wb.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>grid web</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/loaded.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>Big Enough</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-gutters">
                  <div class="section-grid__item">
                    <div class="figure-logo grayscale bg-white"><img src="img/client/mccartney.png" alt=""/>
                      <div class="figure-logo__description">
                        <p>Design Industry</p>
                        <div class="figure-logo__line"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </section>
          
          <!-- - section LOGOS -->
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>