<?php
$data['user']=isAuth();
if($data['user']){
    view("inc/navOnline",$data);
}else{
    view("inc/navOffline");
}
 ?>
