<?php
$uid=segment(2);
$acao=segment(3);
switch ($acao) {
    case 'create':
    redirecionaSeNaoEstaLogado($user);
    view("listCreateGet",$data);
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
function getListByUid($uid){
    return [
        'name'=>'Nome da lista',
        'description'=>'Descrição da lista',
        'uid'=>'haha'
    ];
}
function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
