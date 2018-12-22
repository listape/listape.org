<?php
function getProfileByUuid($uuid,$db){
    $where=[
        'uuid'=>$uuid
    ];
    return $db->get("users","*",$where);
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
