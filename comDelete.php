<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');
?>
<?php
if(isset($_GET["id"])){
    $urlId=$_GET["id"];
    $query="DELETE FROM comments WHERE id='$urlId'";
    $exe=mysqli_query($con,$query);
     if($exe){
           
             redirect("all_comment.php");
             $_SESSION['successMessage']= "comment has been deleted";
        }
       else{
           
            redirect("all_comment.php");
            $_SESSION['ErrorMessage']= "Comment not deleted";
        }
}
?>