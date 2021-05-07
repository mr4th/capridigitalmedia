<?php include('security.php'); 

if(empty($page)){
    $page = '';
}
?>
<!--          insert comment

sidebar starts-->
<div class="col-sm-2">

    <ul class="nav nav-pills nav-stacked">
        <li  <?php if($page == 'dashboard'){?>class="active " <?php }?> ><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp;dashboard</a></li>
        <li <?php if($page == 'addnewpost'){?>class="active " <?php }?> ><a href="addnewpost.php"> <span class="glyphicon glyphicon-th"></span>&nbsp;Add New Post</a></li>
        <li  <?php if($page == 'categories'){?>class="active " <?php }?> ><a href="categories.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Categories</a></li>
        <li  <?php if($page == 'reg_admin'){?>class="active " <?php }?> ><a href="reg_admin.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Manage Admins</a></li>
        <li  <?php if($page == 'all_comment'){?>class="active" <?php }?> ><a href="all_comment.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Comments</a></li>
        <li  <?php if($page == 'all_reg_user'){?>class="active" <?php }?> ><a href="all_reg_user.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Registered Members</a></li>
        <li class=""><a href="login.php?logout=yes"><span class=""></span>&nbsp;Logout</a></li>
    </ul>
</div>