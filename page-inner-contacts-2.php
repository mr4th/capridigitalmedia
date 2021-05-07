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
                  <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>Get in Touch</span></div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h2">Let us know your take and what you would want us to do for you today</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
           <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                  id="gmap_canvas" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=%20Road%204,%20Ikota%20Shopping%20Complex,Lekki%20Lagos%20Lagos+(capridigitalmedia)&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                   <a href='https://embed-map.org/'>how to add a google map to wordpress</a>
                     <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=cafaa94fbefb93576b2ff2f0308750ab72a9f6c6'></script>
                  
          <!-- section CONTACTS -->
          <div class="container-fluid container_px-xs-0">
            <section class="section section-contacts section-properties section-content" data-arts-os-animation="data-arts-os-animation">
              <div class="container-fluid no-gutters">
                <div class="row no-gutters">
                  <div class=" col-12">
                    <div class="bg-white container-fluid py-md-12 py-1">
                      <div class="section-properties__item my-4">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Location</div>
                          <div class="figure-info__value paragraph">Suite H330 Road 4, <br />
                                Ikota Shopping Complex,Lekki Lagos</div>
                        </div>
                      </div>
                      <div class="section-properties__item my-4">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Want to Talk?</div>
                          <div class="figure-info__value paragraph"><a href="mailto:info@capridigitalmedia.com">info@capridigitalmedia.com</a><br> 0909 038 7847, <br> 0703 521 9259</div>
                        </div>
                      </div>
                      <div class="section-properties__item my-4">
                        <div class="figure-info split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="figure-info__option small-caps">Social Media</div>
                          <ul class="social">
                            <li class="social__item"><a class="fa fa-facebook-f" href="https://facebook.com/capridigitalmedia"></a></li>
                            <li class="social__item"><a class="fa fa-twitter"  href="https://twitter.com/capridigimedia?lang=en"></a></li>
                            <li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/capridigimedia/?hl=en"></a></li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
          </div>
          <!-- - section CONTACTS -->
          <!-- section CONTENT #1 -->
          <section class="section section-content clearfix pt-medium pb-small text-center" data-arts-os-animation="data-arts-os-animation">
            <div class="section-content__inner">
              <div class="w-100"></div>
              <div class="section__headline mb-1 mb-md-2 mx-auto"></div>
              <div class="w-100"></div>
              <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                <h2>Get in Touch</h2>
              </div>
              <div class="w-100"></div>
              <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                <p>Usually I respond to e-mails MO – FRI 2 times a day</p>
              </div>
            </div>
          </section>
          <!-- - section CONTENT #1 -->
          <div class="container container_px-xs-0">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- section FORM -->
                <section class="section section-form pb-medium">
                  <form class="form form-contact bg-white form-contact_paddings" action="contact_me.php" name="contactForm" id="contactForm" novalidate>
                    <!-- header -->
                    <div class="row form__row">
                      <div class="col form__col">
                        <h3 class="h3 mt-0 mb-0">Send Message</h3>
                      </div>
                    </div>
                    <!-- - header -->
                    <!-- input #1 -->
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <input class="input-float__input" type="text" name="name" id="name" required="required" data-msg="Please enter your name"/><span class="input-float__label">Your Name</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <!-- - input #1 -->
                    <!-- input #2 -->
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <input class="input-float__input" type="email" name="email" required="required" id="email" data-msg="Please enter a correct e-mail"/><span class="input-float__label">Your E-mail</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <!-- - input #2 -->
                    <!-- input #3 -->
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <input class="input-float__input" type="text" id="phone" name="phone"/><span class="input-float__label">Your phone number</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                    <!-- - input #3 -->

                     <!-- input #4 -->
                    <div class="row form__row">
                      <div class="col form__col">
                        <label class="input-float js-input-float">
                          <textarea class="input-float__input input-float__input_textarea" id="message"  name="message"></textarea><span class="input-float__label">Your Message</span><span class="form__error"></span>
                        </label>
                      </div>
                    </div>
                     <div id="success"></div>
                    <!-- - input #4 -->
                    <!-- submit -->
                    <div class="row form__row">
                      <div class="col form__col form__col_submit">
                        <button class="button button_solid button_black button_fullwidth" type="submit" id="sendMessageButton" name="submit" data-hover="Send Message"><span class="button__label-hover">Send Message</span></button>
                      </div>
                    </div>
                    <!-- - submit -->
                  </form>
                </section>
                <!-- - section FORM -->
              </div>
            </div>
          </div>
        </main>
        <!-- PAGE FOOTER -->
       
            <?php include("footer.php");?>
<script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>