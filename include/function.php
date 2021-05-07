<?php
function redirect($newloc){
     header('Location:'.$newloc);
    ob_flush();
        exit;
}
?>
<?php
//1
function h($a){
	return htmlentities($a);
}
//2
function p($a)
{
	return r($_POST[$a]);
	
}

function st($a){
return strip_tags($a);	
}

//7
function m($a){
        global $con;
return mysqli_real_escape_string($con, $a);
}

//8
function g($a){
        if(empty($_GET[$a])){return;}
	 $url=$_GET[$a];
$url=str_replace(" ","________",$url);
$url=str_replace(":","______",$url);
$url=str_replace('/',"____",$url);
$par2=urlencode($url);	
$par2=str_replace("________"," ",$par2);
$par2=str_replace("______",":",$par2);
return $par2=str_replace("____","/",$par2);
}
?>