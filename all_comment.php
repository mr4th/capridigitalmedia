<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>categories</title>
   <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard1.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<?php include("ad_nav.php"); ?>
<!--                main area starts-->
<div class="col-sm-10">
    <h1>Un-Approved Comment</h1>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>DATE</th>
            <th>COMMENT</th>
            <th>APPROVE</th>
            <th>ACTION</th>
            <th>DETAILS</th>
        </tr>
        
            <?php
           
            $extractCom="SELECT * FROM comments WHERE status='OFF' ORDER BY datetime desc";
            $exe=mysqli_query($con,$extractCom);
            $srno=0;
            while($data=mysqli_fetch_array($exe)){
                $id=h($data['id']);
                $comDate=h($data['datetime']);
                $comName=h($data['name']);
                $userCom=h($data['comment']);
                $comPostId=h($data['admin_panel_id']);
            $srno++;
                if(strlen($userCom)>10){$userCom=substr($userCom,0,10).'...';}
                if(strlen($userCom)>20){$userCom=substr($userCom,0,20).'...';}
            ?>
            <tr> <td><?php echo $srno; ?></td>
            <td style="color:darkblue"><?php echo $comName; ?></td>
            <td><?php echo $comDate; ?></td>
            <td><?php echo $userCom; ?></td>
            <td><a href="comApprove.php?id=<?php echo $id;?>">
            <span class="btn btn-success">Not Approve</span></a></td>
            <td><a href="comDelete.php?id=<?php echo $id;?>">
            <span class="btn btn-danger">Delete</span></a></td>
            <td><a href="fullpost.php?id=<?php echo $comPostId; ?>"  target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
       </tr> <?php } ?>
             
        </table>
    </div>
    
<!--    end of unapproved comment-->
     <h1>Approved Comment</h1>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>DATE</th>
            <th>COMMENT</th>
            <th>APPROVED BY</th>
            <th>REVERSE-APPROVE</th>
            <th>ACTION</th>
            <th>DETAILS</th>
        </tr>
        
            <?php
            $extractCom="SELECT * FROM comments WHERE status='ON' ORDER BY datetime desc";
            $exe=mysqli_query($con,$extractCom);
            $srno=0;
            while($data=mysqli_fetch_array($exe)){
                $id=h($data['id']);
                $comDate=h($data['datetime']);
                $comName=h($data['name']);
                $userCom=h($data['comment']);
                $comPostId=h($data['admin_panel_id']);
            $srno++;
                if(strlen($userCom)>10){$userCom=substr($userCom,0,10).'...';}
                if(strlen($userCom)>20){$userCom=substr($userCom,0,20).'...';}
            ?>
            <tr> <td><?php echo $srno; ?></td>
            <td style="color:darkblue"><?php echo $comName; ?></td>
            <td><?php echo $comDate; ?></td>
            <td><?php echo $userCom; ?></td>
            <td><?php echo $_SESSION['username']; ?></td>
            <td><a href="comDisAprove.php?id=<?php echo $id ;?>">
            <span class="btn btn-warning">Dis-Approve</span></a></td>
            <td><a href="comDelete.php?id=<?php echo $id;?>">
            <span class="btn btn-danger">Delete</span></a></td>
            <td><a href="fullpost.php?id=<?php echo $comPostId; ?>" target="_blank">
            <span class="btn btn-primary">Live Preview</span></a></td>
       </tr> <?php } ?>
             
        </table>
    </div>
<!--    end of approve comment-->
</div>
<!--    footer starts-->
        
    <div style="background-color:#0080ff; height:8px"></div>
        </body>
      <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>