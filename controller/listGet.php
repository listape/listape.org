<?php
$listId=segment(2);
$acao=segment(3);
switch ($acao) {
    case 'create':
    redirecionaSeNaoEstaLogado($user);
    view("listCreateGet",$data);
    break;
    default:
    view('listGet',$data);
    break;
}
function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
