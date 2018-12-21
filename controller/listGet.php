<?php
$uid=segment(2);
$acao=segment(3);
model('list');
switch ($acao) {
    case 'create':
    redirecionaSeNaoEstaLogado($user);
    view("listCreateGet",$data);
    break;
    case 'download':
    downloadList($uid,$data);
    break;
    default:
    $data['list']=getListByUid($uid);
    if($data['list']){
        view('listGet',$data);
    }else{
        view(404);
    }
    break;
}

function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
