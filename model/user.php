<?php
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
