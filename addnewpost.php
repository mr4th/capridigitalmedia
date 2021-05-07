<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');

$page='addnewpost';
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
    //die;
    if(empty($title)){
       $_SESSION['ErrorMessage']= "title cannot be empty";
       echo redirect("addnewpost.php");
    }
    elseif(strlen($title)<2){
       $_SESSION['ErrorMessage']= "title name must be more than two letters";
       echo redirect("addnewpost.php");
    }
    else{
        global $con;
        $query="INSERT INTO admin_panel(datetime,title,category,author,image,post)VALUES('$readabletime','$title','$cat','$admin','$image_target','$post')";
        $exe=mysqli_query($con,$query);
        move_uploaded_file($_FILES["Img"]["tmp_name"],$image_target);
        if($exe){
             $_SESSION['successMessage']= "post added successfully";
            echo redirect("addnewpost.php");
        }
        else{
            $_SESSION['ErrorMessage']= " post failed to add";
            echo redirect("addnewpost.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
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
     <h1>Manage Posts</h1>
    <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
  <div>
      <form action="addnewpost.php" method="post" enctype="multipart/form-data" required>
      <fieldset>
          <div class="form-group">
      <label for="title">title:</label>
      <input type="text" name="Title" placeholder="new post" class="form-control" title="Not less than 5 Alpha Numberic characters" pattern="[a-zA-Z'.?!$%*: ]{5,70}"  required>
            
       <label for="categoryselect">category:</label>
      <select name="category" required id="categoryselect" class="form-control">
      <option>Select Category</option>
           <?php
            global $con;
        $viewquery="SELECT * FROM category ORDER BY datetime desc";
        $exec=mysqli_query($con,$viewquery);
        
        while($allrows=mysqli_fetch_array($exec)){
            $id=$allrows['id'];    
            $name=$allrows['name'];
 
        ?>
        <option value="<?php echo $id;?>"><?php echo $name;?></option>
          <?php }?>
     </select>    
     </div> 
          <div class="form-group">
      <label for="imgselect">image:</label>
      <input type="file" name="Img" class="form-control" id="imgselect" required>
          </div>
          
           <div class="form-group">
      <label for="postarea">post:</label>
      <textarea name="post" class="form-control" id="postarea" required></textarea>
          </div>
      <input class="btn btn-success btn-block"  type="submit" name="submit" value="Add New Post">
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