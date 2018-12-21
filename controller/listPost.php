<?php
if(!$user){
    redirect('/signin');
}
$uid=segment(2);
$acao=segment(3);
$data['uid']=$uid;
switch($acao){
    case 'create':
    controller('listCreate',$data);
    break;
    case 'update':
    model("list");
    $name=$_POST['name'];
    listUpdate($uid,$name,$user['uuid']);
    break;
}
?>
