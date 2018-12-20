<?php
$uid=segment(2);
$acao=segment(3);
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
function downloadList($uid,$data){
    $file = ROOT.'csv/'.$uid;
    $name='Capitais brasileiras.csv';
    //$name=slug($name);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$name.'"');
    header('Content-Transfer-Encoding: binary');
    readfile($file);
}
function getListByUid($uid){
    return [
        'uid'=>'haha',
        'name'=>'Capitais brasileiras'
    ];
}
function redirecionaSeNaoEstaLogado($user){
    if(!$user){
        redirect("/signin");
    }
}
?>
