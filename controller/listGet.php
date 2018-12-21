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

    case 'update':
    $list=getListByUid($uid);
    $data['list']=$list;
    if($list && $list['uuid']==$user['uuid']){
        view('listUpdateGet',$data);
    }else{
        view(404);
    }
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
