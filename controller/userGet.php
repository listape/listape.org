<?php
$uuid=segment(2);
$acao=segment(3);
model('list');
model('user');
switch ($acao) {
    case false:
    $data['lists']=getListByUuid($uuid);
    view('userGet',$data);
    break;
    default:
    view(404);
    break;
}
