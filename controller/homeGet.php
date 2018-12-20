<?php
if (isset($_GET['q'])) {
    controller('searchGet',$data);
}else{
    view("homeGet",$data);
}
?>
