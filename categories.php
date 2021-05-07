<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');

$page='categories';
?>
<?php
if(isset($_POST['submit'])){
    $cat=m($_POST['category']);
    if($_POST['edit_cat_form'] == 'yes'){
        $id_from_form = $_POST['id_from_form'];
        $sql = "update category set name='$cat' where id='$id_from_form'";
        $insert = mysqli_query($con, $sql);
        if($insert){
            $_SESSION['successMessage']= "Catgegory was Updated successfully";
        }else{
            $_SESSION['ErrorMessage']= " An error occured";
        }
        redirect("categories.php");
    }

    $currenttime=time();
    $readabletime=strftime('%d-%B-%Y %H:%M:%S',$currenttime);
    $readabletime;
    $admin=$_SESSION['username'];
    if(empty($cat)){
       $_SESSION['ErrorMessage']= "you must enter a catgegory";
        redirect("categories.php");
    }
    elseif(strlen($cat)>99){
       $_SESSION['ErrorMessage']= " catgegory name too long";
        redirect("categories.php");
    }
    else{
        global $con;
        $query="INSERT INTO category(datetime,name,creator)VALUES('$readabletime','$cat','$admin')";
        $exe=mysqli_query($con,$query);
        if($exe){
             $_SESSION['successMessage']= "catgegory added successfully";
            echo redirect("categories.php");
        }
        else{
            $_SESSION['ErrorMessage']= " catgegory failed to add";
            echo redirect("categories.php");
        }
    }
}
?>
<?php
 $edit_id = g('id');
$edit_form = '';
$edit_name = '';
$button = 'Add New Category';
if($edit_id !=''){
    $fetchquery="SELECT * FROM category where id='$edit_id' ";
    $exec=mysqli_query($con,$fetchquery);
    $datarow=mysqli_fetch_array($exec);
    $edit_name = $datarow['name'];
    $edit_form = 'yes';
    $button = 'Edit Category';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>categories</title>
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
     <h1>Manage Categories</h1>
    <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
<div>
      <form action="categories.php" method="post">
      <fieldset>
          <div class="form-group">
      <label for="categoryname">Category:</label>
      <?php if($edit_form !='' and $edit_id != ''){
          echo '<input type="hidden" name="edit_cat_form" value="yes">';
          echo '<input type="hidden" name="id_from_form" value="'.$edit_id.'">';

      }?>
      
      <input type="text" name="category" placeholder="create a category" class="form-control" value="<?php echo $edit_name;?>" required>
     </div> 
      <input class="btn btn-success btn-block"  type="submit" name="submit" value="<?php echo $button;?>">
          <br>   <br>   <br>
      </fieldset>
      </form>
      
    </div>
    <div>
    <table class="table table-responsive table-hover">
        <tr>
            <thead>
                <td>S/N</td>
                <td>DATE/TIME</td>
                <td>NAME</td>
                <td>CREATOR</td>
                <td>EDIT</td>
            </thead>
        </tr> 
        <?php
            global $con;
        $viewquery="SELECT c.id as cid, datetime, c.name, l.name as lcreator FROM category c inner join login l on l.username= c.creator ORDER BY datetime desc";
        $exec=mysqli_query($con,$viewquery) or die(mysqli_error($con));
        $ssn=0;
        while($allrows=mysqli_fetch_array($exec)){
            $id=h($allrows['cid']);
            $datetime=h($allrows['datetime']);
            $name=h($allrows['name']);
            $ceator=h($allrows['lcreator']);
            $ssn++;
        ?>
        <tbody>
            <tr>
                <td><?php echo $ssn; ?></td>
                <td><?php echo $datetime; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $ceator; ?></td>
                <td><a href="categories.php?id=<?php echo $id;?>" class="btn btn-info">EDIT CATEGORY</a></td>
            </tr>
            </tbody>
        <?php } ?>
    </table>
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