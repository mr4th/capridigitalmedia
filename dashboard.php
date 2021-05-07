<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');

$page='dashboard';
?>
<?php
if(g('del') and g('del2')){
    $del_id = g('del');
    $pic = g('del2');
    $sql = "delete from admin_panel where id = '$del_id'";
    if(mysqli_query($con, $sql)){
        $_SESSION['successMessage']= "post deleted successfully";
        if(file_exists($pic)){unlink($pic);}
    }else{
         $_SESSION['ErrorMessage']= "An error occured";
        }
    redirect("dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>categories</title>
   <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard1.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<?php include("ad_nav.php"); ?>
<!--                main area starts-->
<div class="col-sm-10">
    <div>
    <table class="table table-responsive table-hover table-bordered">
    <tr>
        
                <td colspan="8"><?php echo message();?><?php echo successmessage();?></td>
            
    </tr>
        <tr>
            <thead>
                <td>S/N</td>
                <td>PIC</td>
                <td>TITLE</td>
                <td>POST</td>
                <td>CREATOR</td>
                <td>DATE/TIME</td>
                <td>EDIT</td>
                <td>REMOVE</td>
            </thead>
        </tr> 
        <?php
            global $con;
          //  $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name FROM admin_panel a inner join category c on a.category=c.id ORDER BY a.datetime desc";
        
         $fetchquery="SELECT a.id as aid, a.datetime as adatetime, l.name as author, title, `image`, post, c.name FROM admin_panel a inner join category c on a.category=c.id inner join login l on l.username=a.author ORDER BY a.datetime desc";
        
        $exec=mysqli_query($con,$fetchquery) or die(mysqli_error($con));
        $ssn=0;
        while($datarow=mysqli_fetch_array($exec)){
                    $id=h($datarow['aid']);
                    $datetime=h($datarow['adatetime']);
                    $title=h($datarow['title']);
                    $cat=h($datarow['name']);
                    $admin=h($datarow['author']);
                    $img=h($datarow['image']);
                    $post=h($datarow['post']);
                    if(strlen($post)>150){$post=substr($post,0,150)."...";}
            $ssn++;
        ?>
        <tbody>
            <tr>
                <td><?php echo $ssn; ?></td>
                <td><img src="<?php echo $img;?>" width="40%"></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $post; ?></td>
                <td><?php echo $admin; ?></td>
                <td><?php echo $datetime; ?></td>                
                <td><a href="editpost.php?id=<?php echo $id;?>" class="btn btn-primary">Edit Post</a></td>
                <td><a href="dashboard.php?del=<?php echo $id;?>&del2=<?php echo $img;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete Post</a></td>
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