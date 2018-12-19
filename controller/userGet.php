<?php
$id=segment(2);
$acao=segment(3);
switch ($acao) {
    case false:
    view('userGet',$data);
    break;
    default:
    view(404);
    break;
}
function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
