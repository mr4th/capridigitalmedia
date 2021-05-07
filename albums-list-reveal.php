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
      <div class="js-smooth-scroll bg-light-2" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium pt-large pb-small text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-2)">
            <div class="section-masthead__inner container">
              <header class="row section-masthead__header">
                <div class="col-12">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h1">Albums II</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          
          <!-- - section MASTHEAD -->
          <!-- section ALBUMS LIST HOVER REVEAL -->
          <section class="section section-list overflow pb-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="list-projects js-list-thumbs text-center">
                    <div class="list-projects__items"><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="0">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Interior</span><span class="block-counter__counter">17</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-1_1.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_3.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_4.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_5.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-1_6.jpg" width="1920" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="1">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Portraits</span><span class="block-counter__counter">23</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-2_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_3.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-2_5.jpg" width="1920" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="2">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>UI / UX Design</span><span class="block-counter__counter">19</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-3_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_4.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_5.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_6.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-3_7.jpg" width="1920" height="1280" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="3">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Branding</span><span class="block-counter__counter">31</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-4_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_2.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_3.jpg" width="1920" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-4_4.jpg" width="1920" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="4">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Identity</span><span class="block-counter__counter">17</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-5_1.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_2.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-5_5.jpg" width="1280" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="5">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Product Design</span><span class="block-counter__counter">29</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-6_1.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_3.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_4.jpg" width="1920" height="1280" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-6_5.jpg" width="1920" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a><a class="list-projects__item pt-xsmall pb-xsmall js-list-thumbs__link js-album" href="#" data-post-id="6">
                        <h2 class="h2 d-inline-block list-projects__heading block-counter js-split-text split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Black & White</span><span class="block-counter__counter">13</span></h2>
                        <!-- album photos -->
                        <div class="js-album__items d-none"><img src="#" data-album-src="img/assets/albumImages/album-7_1.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_2.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_3.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_4.jpg" width="1280" height="1920" data-title="" alt=""/><img src="#" data-album-src="img/assets/albumImages/album-7_5.jpg" width="1280" height="1920" data-title="" alt=""/>
                        </div>
                        <!-- - album photos --></a>
                    </div>
                    <!-- hover images -->
                    <div class="list-project__canvas js-list-thumbs__covers" data-arts-scroll-fixed="data-arts-scroll-fixed">
                      <div class="list-projects__covers" data-background-for="0">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="0">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-1_thumb-1.jpg" width="180" height="180" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="0">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-1_thumb-2.jpg" width="217" height="325" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="0">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-1_thumb-3.jpg" width="315" height="210" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="1">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="1">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-2_thumb-1.jpg" width="217" height="325" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="1">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-2_thumb-2.jpg" width="180" height="180" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="1">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-2_thumb-3.jpg" width="315" height="210" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="2">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="2">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-3_thumb-1.jpg" width="216" height="216" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="2">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-3_thumb-2.jpg" width="333" height="333" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="2">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-3_thumb-3.jpg" width="315" height="315" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="3">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="3">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-4_thumb-1.jpg" width="216" height="216" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="3">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-4_thumb-2.jpg" width="333" height="333" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="3">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-4_thumb-3.jpg" width="315" height="210" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="4">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="4">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-5_thumb-1.jpg" width="315" height="210" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="4">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-5_thumb-2.jpg" width="333" height="333" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="4">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-5_thumb-3.jpg" width="315" height="210" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="5">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="5">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-6_thumb-1.jpg" width="315" height="210" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="5">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-6_thumb-2.jpg" width="216" height="325" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="5">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-6_thumb-3.jpg" width="333" height="333" alt=""/></div>
                        </div>
                      </div>
                      <div class="list-projects__covers" data-background-for="6">
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="6">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-7_thumb-1.jpg" width="315" height="210" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="6">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-7_thumb-2.jpg" width="216" height="325" alt=""/></div>
                        </div>
                        <div class="list-projects__cover-reveal js-list-thumbs__cover" data-background-for="6">
                          <div class="list-projects__cover-wrapper"><img src="#" data-src="img/assets/albums/album-7_thumb-3.jpg" width="333" height="333" alt=""/></div>
                        </div>
                      </div>
                    </div>
                    <!-- - hover images -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- - section ALBUMS LIST HOVER REVEAL -->
        </main>
       <?php include("footer.php");?>