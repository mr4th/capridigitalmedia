<?php
date_default_timezone_set('Asia/Karachi');
$currenttime=time();
$readabletime=strftime('%d-%B-%Y %H:%M:%S',$currenttime);
echo $readabletime;
?>