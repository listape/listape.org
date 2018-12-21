<?php
$uuid=segment(2);
$acao=segment(3);
model([
    'list',
    'user'
]);
switch ($acao) {
    case false:
    $data['lists']=fetchAllListsByUuid($uuid);
    view('userGet',$data);
    break;
    default:
    view(404);
    break;
}
