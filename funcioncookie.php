<?php
$tema=$_GET['usertheme'];
setcookie('_cookietema',$tema,time()+(86400*365),"/","");
header("Location: ".$_SERVER['HTTP_REFERER']);
?>
