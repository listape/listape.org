<?php
$uuid=segment(2);
$acao=segment(3);
model([
    'list',
    'user'
]);
$profile=getProfileByUuid($uuid,$db);
if($profile){
    $data['profile']=$profile;
    $data['lists']=fetchAllListsByUuid($uuid,$db);
    view('userGet',$data);
}else{
    view('404',$data);
}
