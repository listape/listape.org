<?php
$uid=segment(2);
$acao=segment(3);
model([
  'list',
  'user'
]);
switch ($acao) {
  case 'create':
  redirecionaSeNaoEstaLogado($user);
  view("listCreateGet",$data);
  break;

  case 'download':
  downloadList($uid,$data);
  break;

  case 'update':
  $list=getListByUid($uid);
  $data['list']=$list;
  if($list && $list['uuid']==$user['uuid']){
    view('listUpdateGet',$data);
  }else{
    view(404);
  }
  break;

  case 'delete':
  $list=getListByUid($uid);
  $data['list']=$list;
  if($list && $list['uuid']==$user['uuid']){
    $where=[
      'uid'=>$uid
    ];
    db()->delete("lists",$where);
    print json(true);
  }else{
    print json(false);
  }
  break;

  default:
  $data['list']=getListByUid($uid);
  if($data['list']){
    $uuid=$data['list']['uuid'];
    $data['profile']=getProfileByUuid($uuid,$db);
    view('listGet',$data);
  }else{
    view(404);
  }
  break;
}
?>
