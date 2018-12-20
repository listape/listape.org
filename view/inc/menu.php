<?php
if($data['user']){
    view("inc/menuOnline",$data);
}else{
    view("inc/menuOffline");
}
 ?>
