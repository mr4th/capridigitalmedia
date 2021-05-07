<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');
$pg=1;
if( g('pg') >1 ){$pg=g('pg');}

?>
<?php include("header.php");?>
  <body>
    <style>
      html,body{overflow-x: hidden;}
    </style>
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
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="mt-0 mb-0 h1">Welcome To Capri's Blog</h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section BLOG GRID SIDEBAR -->
          <section class="section section-blog section-grid section-content overflow pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-12 section-blog__posts">
                  <!-- posts -->
                  <div class="grid grid_fluid-3 js-grid">
                    <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__sizer js-grid__sizer"></div>
                   

                        <!-- insert query -->
                        <?php 
                   
                  if(isset($_GET['searchbtn']))
                    {
                        $search=$_GET['search'];
                      
                        $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name, c.id as cid FROM admin_panel a inner join category c on a.category=c.id  WHERE a.datetime LIKE '%$search%' OR title LIKE '%$search%' OR post LIKE '%$search%'  OR c.name LIKE '%$search%'";
                      
                      
                    }else
                  {
                    
                      
                   
                    $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name, c.id as cid FROM admin_panel a inner join category c on a.category=c.id ORDER BY a.datetime desc";}
                     $sn=0;
                    $pg_multi = ($pg*6);
                    $exe=mysqli_query($con,$fetchquery) or die(mysqli_error($con));
                    $total_pg = mysqli_num_rows($exe); 
                    while($datarow=mysqli_fetch_array($exe)){
                        ++$sn;
                        if(  ( ($pg_multi - $sn) < 0) or ( ($pg_multi - $sn) > 5) ){/*echo $pg_multi .'-'. $sn.'<br>';*/ continue;}
                        $id=h($datarow['aid']);
                        $date=h($datarow['adatetime']);
                        $title=h($datarow['title']);
                        $cat=h($datarow['name']);
                        $admin=h($datarow['author']);
                        $img=$datarow['image'];
                        $post=h($datarow['post']);
                        //echo $img;die;
                ?>

                           <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 js-grid__item">
                     
                            <div class="section-grid__item" style="box-shadow: 5px 10px 18px red">
                                <article class="figure-post">
 
                          <!-- post featured image -->
                          <div class="figure-post__media">
                            <img data-src="<?php echo $img?>" width="960"
                            src="#" alt=""/>
                              <!-- post date -->
                              <time>Date:<?php echo $date; ?></span></time>
                              <!-- - post date --></div>
                          <!-- - post featured image -->
                          <!-- post header & info  -->
                          <div class="figure-post__header pt-1" style="padding: 20px;"><a class="d-block" href="#">
                              <h2 class="h4 mt-0" style="color: darkred;">Title: <?php echo $title; ?></h2></a>
                            <ul class="figure-post__categories small-caps">
                              <li style="color: darkred;">Category: <?php echo $cat; ?></li>
                              <li style="text-transform: capitalize;">Post: <?php
                            $expand = false;
                     if(strlen($post)>150){$post=substr($post,0,150)."..."; $expand = true;}
                    echo $post;?>
                    <br>
                    <?php if($expand == true){?>
                    <a target="_blank" href="fullpost.php?id=<?php echo $id;?>" class="btn btn-info">
                   
                    <button class="btn btn-info" style="float:right;padding:10px 20px;border-radius:8px;">ReadMore &raquo;&raquo;</button> 
                  </a> <br><br></div>
                   </li>
                            </ul>
                              <?php }?>

                               </div>
                          <!-- - post header & info -->
                        </article>
                      
                      </div>
                        <?php } ?>
                    </div>
                            
                         
                 
                  </div>
                  <!-- - posts -->
                  <!-- pagination-->
                  <div class="section-blog__wrapper-pagination mt-small">
                    <nav class="pagination">
                      <div class="nav-links">
                        <!-- prev --><a class="page-numbers prev material-icons" href="#">keyboard_arrow_left</a>
                        <!-- - prev  -->
                        <!-- numbers container -->
                        <div class="nav-links__container"><span class="page-numbers current"> <?php 
                $no = ceil($total_pg / 5);
                for($i=1; $i <= $no; $i++){
                    $active = '';
                    if($pg == $i){
                    $active = 'class="active"';
                        }
                    echo '<li '.$active.'><a  href="blog.php?pg='.$i.'" >'.$i.'</a></li>';
                }?></span></div>
                        <!-- - numbers container -->
                        <!-- next --><a class="page-numbers next material-icons" href="#">keyboard_arrow_right</a>
                        <!-- - next -->
                      </div>
                    </nav>
                  </div>
                  <!-- - pagination -->
                </div>
               
                <!-- - sidebar -->
              </div>
            </div>
          </section>
          <!-- - section BLOG GRID SIDEBAR -->
        </main>
        <!-- PAGE FOOTER -->
           <?php include("footer.php");?>