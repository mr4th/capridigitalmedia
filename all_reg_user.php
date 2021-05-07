<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');

$page='all_reg_user';
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
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<?php include("ad_nav.php"); ?>
<!--                main area starts-->
<div class="col-sm-10">
    <div>
    <table class="table table-responsive table-hover">
    <tr>
        
                <td colspan="8"><?php echo message();?><?php echo successmessage();?></td>
            
    </tr>
        <tr>
            <thead>
                <td>S/N</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>EMAIL ADDRESS</td>
                <td>TELPHONE</td>
            </thead>
        </tr> 
        <?php
            global $con;
          //  $fetchquery="SELECT a.id as aid, a.datetime as adatetime, title, author, `image`, post, c.name FROM admin_panel a inner join category c on a.category=c.id ORDER BY a.datetime desc";
        
         $fetchquery="SELECT * FROM reg ORDER BY id desc";
        
        $exec=mysqli_query($con,$fetchquery) or die(mysqli_error($con));
        $ssn=0;
        while($datarow=mysqli_fetch_array($exec)){
                    $id=h($datarow['id']);
                    $fname=h($datarow['fname']);
                    $lname=h($datarow['lname']);
                    $email=h($datarow['email']);
                    $tel=h($datarow['tel']);
                    $ssn++;
        ?>
        <tbody>
            <tr>
                <td><?php echo $ssn; ?></td>
                <td><?php echo $fname; ?></td>
                <td><?php echo $lname; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $tel; ?></td>                
                
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
        <div id="footer">
        <hr>
            <p style=""> copyright &copy;2019 | all rights reserved</p>
    </div>
    <div style="background-color:#0080ff; height:8px"></div>
        </body>
     <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>