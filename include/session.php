<?php
session_start();
date_default_timezone_set('Africa/Lagos');
function message(){
if(isset($_SESSION['ErrorMessage'])){
    $result="<div class='alert alert-danger'>";
    $result.=htmlentities($_SESSION['ErrorMessage']);
    $result.="</div>";
    $_SESSION['ErrorMessage']=null;
    return $result;
    }
}

function successmessage(){
if(isset($_SESSION['successMessage'])){
    $result="<div class='alert alert-success'>";
    $result.=htmlentities($_SESSION['successMessage']);
    $result.="</div>";
    $_SESSION['successMessage']=null;
    return $result;
    }
}
?>