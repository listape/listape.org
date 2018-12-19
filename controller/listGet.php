<?php
$listId=segment(2);
$acao=segment(3);
switch ($acao) {
    case 'create':
    view("listCreateGet",$data);
    break;
    default:
    view('listGet',$data);
    break;
}
?>
