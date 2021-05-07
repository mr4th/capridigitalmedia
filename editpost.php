<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');

 $edit_id = g('id');
 $page = 'dashboard';
?>
<?php
if(isset($_POST['submit'])){
    $title=m($_POST['Title']);
    $cat=m($_POST['category']);
    $post=m($_POST['post']);
    $currenttime=time();
    $readabletime=strftime('%d-%B-%Y %H:%M:%S',$currenttime);
    $readabletime;
    $admin=$_SESSION['username'];
    $ext = explode('.', $_FILES["Img"]["name"]);
    $imgNewName = trim(substr($title,0,5));
   $image_target="upload/".rand(0,99).$imgNewName.rand(0,99).'.'.end($ext);
    if(empty($title)){
       $_SESSION['ErrorMessage']= "title cannot be empty";
       echo redirect("editpost.php?id=".$edit_id);
    }
    elseif(strlen($title)<2){
       $_SESSION['ErrorMessage']= "title name must be more than two letters";
       echo redirect("editpost.php?id=".$edit_id);
    }
    else{
        global $con;
        $query="update admin_panel set title='$title', category='$cat', author='$admin', post='$post' where id='$edit_id'";
        $exe=mysqli_query($con,$query)or die(mysqli_error($con));
        if($_FILES["Img"]["tmp_name"]){
        move_uploaded_file($_FILES["Img"]["tmp_name"],$image_target);
        $img_url=$_POST['img_url'];
        $query="update admin_panel set image='$image_target' where id='$edit_id'";
        $exe=mysqli_query($con,$query);
        if(file_exists($img_url)){unlink($img_url);}
        }
        
        if($exe){
             $_SESSION['successMessage']= "new post updated successfully";
            echo redirect("editpost.php?id=".$edit_id);
        }
        else{
            $_SESSION['ErrorMessage']= " post failed to add";
            echo redirect("editpost.php?id=".$edit_id);
        }
    }
}
?>


<?php
$fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name, c.id as cid FROM admin_panel a inner join category c on a.category=c.id where a.id='$edit_id' ORDER BY a.datetime desc";
$exec=mysqli_query($con,$fetchquery);
$ssn=0;
$datarow=mysqli_fetch_array($exec);
                    $id=$datarow['aid'];
                    $datetime=$datarow['adatetime'];
                    $title=$datarow['title'];
                    $cat=$datarow['name'];
                    $cid=$datarow['cid'];
                    $admin=$datarow['author'];
                    $img=$datarow['image'];
                    $post=$datarow['post'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit New Post</title>
   <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard1.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<?php include("ad_nav.php"); ?>
<!--                main area starts-->
<div class="col-sm-10">
     <h1 align="center"><font color="green">Edit Posts</font></h1>
    <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
  <div>
      <form action="editpost.php?id=<?php echo $edit_id;?>" method="post" enctype="multipart/form-data" required>
      <fieldset>
      <div align="center"><img src="<?php echo $img;?>" height="200px" width="200px"></div>
      <input type="hidden" name="img_url" value="<?php echo $img;?>">
          <div class="form-group">
      <label for="title">title:</label>
      <input type="text" name="Title" placeholder="new post" required class="form-control"  title="Not less than 5 Alpha Numeric characters" pattern="[a-zA-Z'.?!$%*: ]{5,70}" value="<?php echo $title;?>">
            
       <label for="categoryselect">category:</label>
      <select name="category" required id="categoryselect" class="form-control">
      <option value="<?php echo $cid;?>"><?php echo $cat;?></option>
           <?php
            global $con;
        $viewquery="SELECT * FROM category ORDER BY datetime desc";
        $exec=mysqli_query($con,$viewquery);
        
        while($allrows=mysqli_fetch_array($exec)){
            $id=$allrows['id'];    
            $name=$allrows['name'];
            if($id ==$cid){continue;}
        ?>
        <option value="<?php echo $id;?>"><?php echo $name;?></option>
          <?php }?>
     </select>    
     </div> 
          <div class="form-group">
      <label for="imgselect">image:</label>
      <input type="file" name="Img" class="form-control" id="imgselect">
          </div>
          
           <div class="form-group">
      <label for="postarea">post:</label>
      <textarea name="post" class="form-control" id="postarea" required><?php echo $post;?></textarea>
          </div>
      <input class="btn btn-success btn-block"  type="submit" name="submit" value="EditPost">
          <br>   <br>   <br>
      </fieldset>
      </form>
      
    </div>
    </div>
</div>
                <div style="height:10px"></div>
            </div>
        </div>
        
        </div>
<!--    footer starts-->
       
    <div style="background-color:#0080ff; height:8px"></div>
        </body>
      <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>