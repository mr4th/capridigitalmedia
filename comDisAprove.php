<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');
?>
<?php
if(isset($_GET["id"])){
    $urlId=$_GET["id"];
    $query="UPDATE comments SET status='OFF' WHERE id='$urlId'";
    $exe=mysqli_query($con,$query);
     if($exe){

             redirect("all_comment.php");
            $_SESSION['successMessage']= "comment approved successfully";
        }
       else{
           
            redirect("all_comment.php");
            $_SESSION['ErrorMessage']= "Comment not approved";
        }
}
?>