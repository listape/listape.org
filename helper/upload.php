<?php
function upload($name,$exts){
    $Upload=new Basic\Upload();
    return $Upload->upload('file',$exts);
}
function uploadMove($origin,$destination){
    $Upload=new Basic\Upload();
    return $Upload->move($origin,$destination);
}
?>
