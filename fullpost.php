<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');
$pg=1;
if( g('pg') >1 ){$pg=g('pg');}

?>

<?php
$page='fullpost';
?>
<?php
if(isset($_POST['submit'])){
    $name=m($_POST['name']);
    $email=m($_POST['email']);
    $comment=m($_POST['comment']);
    $currenttime=time();
    $readabletime=strftime('%d-%B-%Y %H:%M:%S',$currenttime);
    $readabletime;
     $postIdUrl=$_GET['id'];
    if(empty($name) || empty($email) || empty($comment)){
       $_SESSION['ErrorMessage']= "all fields are required";
       
    }
    elseif(strlen($comment)>500){
       $_SESSION['ErrorMessage']= "only 500 characters are allowed in comment";
      
    }
    else{
        global $con;
        $idFromUrl=$_GET["id"];
        $query="INSERT INTO comments(datetime,name,email,comment,status,admin_panel_id)VALUES('$readabletime','$name','$email','$comment','OFF','$idFromUrl')";
        $exe=mysqli_query($con,$query);
        if($exe){
             $_SESSION['successMessage']= "comment submitted successfully";
             echo redirect("fullpost.php?id={$postIdUrl}");
        }
        else{
            $_SESSION['ErrorMessage']= " comment failed to add";
            echo redirect("fullpost.php?id={$postIdUrl}");
        }
    }
}
?>

<?php include("header.php");?>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
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
    <style>
        nav 
        {
            background-color: transparent;
            width: auto;
            height: 50px;
        }
        nav ul
        {
            list-style: none
        }
       nav ul li
        {
            float: left;
            display: block;
             text-align: center;
            width: 170px;
            height: 50px;
            line-height: 50px;
            text-decoration: none;
        }
      nav ul li a
        {
            background-color: transparent;
            color: aliceblue;
            text-decoration: none;
            display: block;
            
        }
        
        nav ul li a:hover
        {
            background-color: aliceblue;
            color: gray;
            font-family: monospace;
            transition: 750ms;
            text-decoration: none;
            
            
        }
      
        .title
        {
            margin-top: -400px;
            text-align: center;
            font-size: 80px;
            color: aliceblue;
            font-family:times new romans;
            margin-left:-50px;
        }
          .bgsec
        {
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url(img/blog.png);
    background-repeat: no-repeat;
    width: 98.76vw;
    height: 80vh;
     box-shadow: 4px 1px 15px 6px;
    color: darkgray;
}

       .col-sm-3{background-color: yellowgreen}
        #footer{padding: 10px; border-top: 1px solid black; text-align: center;color: aliceblue;background-color: #0d0d0d}
        
        .lead
        {
            text-align: center;
            font-size: 15px;
        }
        
        .thumbnail img{
            width: 100%;
            height: 100%;
        }
        
        .comstyle
        {
            background-color: #f5f5ef;
            padding: 8px;
            border-radius: 5px;
        }
       
    </style>
    <body>
     
       
     
        <section class="bgsec">
       
        <div style="height:5px; background-color:#1aa3ff; margin-top:-18px"></div>
            </div>
                
        </section>
        <div class="container">
            <div class="title">Check Out Our Latest Gist</div>
        
           <br>
           <br>
           <br>
           <br>
        <div class="row">
            <div class="col-sm-1">
             
            </div>
            <div class="col-sm-10 col-sm-1">
                <?php 
                   
                  if(isset($_GET['searchbtn']))
                    {
                        $search=$_GET['search'];
                      
                        $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name, c.id as cid FROM admin_panel a inner join category c on a.category=c.id  WHERE a.datetime LIKE '%$search%' OR title LIKE '%$search%' OR post LIKE '%$search%'  OR c.name LIKE '%$search%'";
                      
                      
                    }else
                  {
                      
                      $postIdUrl=$_GET['id'];
                    $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name, c.id as cid FROM admin_panel  a inner join category c on a.category=c.id  WHERE a.id='$postIdUrl' ORDER BY a.datetime";
                       $exe=mysqli_query($con,$fetchquery) or die(mysqli_error($con));
                  }
                $exe=mysqli_query($con,$fetchquery) or die(mysqli_error($con));
                      $sn=0;
                    $pg_multi = ($pg*6);
                      
                   
                  
                    $total_pg = mysqli_num_rows($exe); 
                    while($datarow=mysqli_fetch_array($exe)){
                        ++$sn;
                        if( ( ($pg_multi - $sn) < 0) or ( ($pg_multi - $sn) > 5) ){/*echo $pg_multi .'-'. $sn.'<br>';*/ continue;}
                        $id=h($datarow['aid']);
                        $date=h($datarow['adatetime']);
                        $title=h($datarow['title']);
                        $cat=h($datarow['name']);
                        $admin=h($datarow['author']);
                        $img=$datarow['image'];
                        $post=h($datarow['post']);
                        
                ?>
                <div class="thumbnail" style="padding:10px; box-shadow:1px 1px 14px 0px;">
                <img src="<?php echo $img;?>">
                </div>
                <div style="font-size:40px;color:yellowgreen;">Title:<?php echo $title; ?></div>
                <div>Date of release:<?php echo $date; ?></div>
                <div>Category:<?php echo $cat; ?></div>
                <div>Post:<?php
                            $expand = false;
                    
                    echo $post;?>
                    <?php }
                    ?>

                </div>
      
            </div>
        </div>
            <br>
            <hr>
        <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
<!--    comment-->
            <br>
            <br>
            <span style="color:darkblue">Share Your Thoughts About This Post</span>
            <hr>
            <span style="color:darkblue">Comment:</span>
            
            <?php
            $comUrlId=$_GET['id'];
            $extractCom="SELECT * FROM comments WHERE admin_panel_id='$comUrlId' AND status='ON'";
            $exe=mysqli_query($con,$extractCom);
            while($data=mysqli_fetch_array($exe)){
                $comDate=h($data['datetime']);
                $comName=h($data['name']);
                $userCom=h($data['comment']);
            
            ?>
            <style>
                p{}
            </style>
            <div class="comstyle">
                <img style="margin:10px" class="pull-left" src="img/users.png" width="7%">
                <p style="font-size:30px;font-weight:bold;text-transform: capitalize;color:darkblue"><?php echo $comName; ?></p>
                <p style="font-size:18px; color:#999999;text-transform: capitalize;font-weight:bold"><?php echo $comDate; ?></p>
                <p><?php echo $userCom; ?></p>
            </div>
            <br>
            <hr>
            <?php } ?>
            <hr style="background-color:darkblue">
              <div>
              <div class="form-vertical">
      <form action="fullpost.php?id=<?php echo  $postIdUrl;?>" method="post">
    
          <div class="form-group">
      <label for="name" style="color:darkblue">Name:</label>
      <input type="text" name="name" style="text-align:center" placeholder="enter name" class="form-control"  required>
            
       <label for="email" style="color:darkblue">Email:</label>
       <input type="email" name="email" style="text-align:center" placeholder="enter email" class="form-control"  required>
            
          
           <div class="form-group">
      <label for="commentarea" style="color:darkblue">Comment:</label>
      <textarea name="comment" class="form-control" style="text-align:center" id="comment area" required></textarea>
          </div>
      <input class="btn btn-info" class="form-control"  type="submit" name="submit" value="Comment">
          <br>   <br>   <br>
   
      </form>
      </div>
    </div>
            
        <div class="text-center">
            <table width="100%">
                <tr>
                <td><ul class="pagination pagination-lg">
                <!-- <li><a href="#">«</a></li>-->
                <?php 
                $no = ceil($total_pg / 6);
                for($i=1; $i <= $no; $i++){
                    $active = '';
                    if($pg == $i){
                    $active = 'class="active"';
                        }
                    echo '<li  '.$active.'><a  href="blog.php?pg='.$i.'">'.$i.'</a></li>';
                }?>
                <!--  <li><a href="#">»</a></li>-->
                </ul>
                </td>
                </tr>
            </table>

        </div>
           
        <!--    footer starts-->
         <!-- PAGE FOOTER -->
         <?php include("footer.php");?>