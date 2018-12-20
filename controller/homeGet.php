<?php
if (isset($_GET['q'])) {
    view("searchGet",$data);
}else{
    view("homeGet",$data);
}
?>
