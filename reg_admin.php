<?php
 include('include/db.php');
include('include/session.php');
include('include/function.php');
$page='reg_admin';
$page2='admin';
$msg='';
?>
<?php
   if(array_key_exists('submit',$_POST)){         
   $num =0;        
$name = m($_POST['name']);
$username=m($_POST['username']);
$password=m($_POST['password']);
//$pic = upload(logo, 'images/');
//
//if($pic != 'No'){
//$msg = "<font color='red'>AN ERROR OCCURED!</font>";
//$data = row5($username, $password, '', $pic, $name);
$query = "insert into login (username, password, name)values('$username', '$password', '$name') ";
$exe = mysqli_query($con,$query);
if($exe){
	$_SESSION['successMessage']= "Admin added successfully";
    
    redirect("reg_admin.php");
}
else{$_SESSION['ErrorMessage']= " Admin failed to add";
             redirect("reg_admin.php");

  }
   }
?>




 <!DOCTYPE html>
<html>
<head>
   <title>reg admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard1.css">
   <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    
<body>
    <div class="container-fluid">
        
<?php include("ad_nav.php"); ?>
<!--                main area starts-->
<div class="col-sm-10">
     <h1>Manage Posts</h1>
    <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
  <div>
      <form method="post" enctype="multipart/form-data" autocomplete="off">
<table width="30%" border="0" align="center" class="table table-hover">
  <tr>
    <td  align="left">USER NAME<input type="text" name="username" class="form-control" pattern="[a-zA-Z@.]{,70}" title="Enter Correct Email" placeholder="USER NAME"  required id="username" value=""/><span id="username_msg"></span></td>
  </tr>
    
    
  <tr>
    <td  align="left">PASSWORD<input type="password" name="password" class="form-control" pattern="[a-zA-Z0-9]{6,30}" title="NOT LESS THAN 6 ALPHA NUMREIC CHRACTERS" placeholder="PASSWORD"  required id="password" value=""/><span id="username_msg"></span></td>
  </tr>
  
  <tr>  
    <td>NAME <input type="text" name="name" title="APHABETS ONLY" class="form-control" pattern="[a-zA-Z ]{5,100}" placeholder="ENTER FULL NAME" required id="name" /></td>
  </tr>
    
<tr>
    <td align="center" colspan="3"><input type="submit" class="form-control" name="submit" value="SUBMIT" id="name"/></td>
  </tr>
</table>
</form>

    </div>
        <table class="table table-responsive table-hover table-striped table-bordered">
        <tr>
            <thead>
                <td>S/N</td>
                <td>NAME</td>
                <td>LAST LOGIN</td>
                
            </thead>
        </tr> 
        <?php
            global $con;
        $viewquery="SELECT * FROM login ORDER BY last_login desc";
        $exec=mysqli_query($con,$viewquery);
        $ssn=0;
        while($allrows=mysqli_fetch_array($exec)){
            $name=h($allrows['name']);
            $last_login=h($allrows['last_login']);
            
            $ssn++;
        ?>
        <tbody>
            <tr>
                <td><?php echo $ssn; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $last_login; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    
        </div></div>
    
</body>
      </html>