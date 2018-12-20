<?php
$uuid=segment(2);
$acao=segment(3);
switch ($acao) {
    case false:
    $data['lists']=listasDoUsuario($uuid);
    view('userGet',$data);
    break;
    default:
    view(404);
    break;
}
function listasDoUsuario($uuid){
    $lists=[
        [
            'uid'=>'haha',
            'name'=>'Capitais brasileiras'
        ]
    ];
    return $lists;
}
function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
