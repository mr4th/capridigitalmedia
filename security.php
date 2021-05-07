<?php 
if(!empty($_SESSION['role']) ){
    if($_SESSION['role']!=='admin' ){redirect('login.php');}
}else{redirect('login.php');}

?>