<?php
function downloadList($uid,$data){
  $list=getListByUid($uid);
  $file = ROOT.'csv/'.$uid;
  $name=$list['name'].'.csv';
  //$name=slug($name);
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="'.$name.'"');
  header('Content-Transfer-Encoding: binary');
  readfile($file);
}
function fetchAllListsByUuid($uuid,$db){
  $where=[
    'uuid'=>$uuid
  ];
  return $db->select('lists','*',$where);
}
function getListByUid($uid){
  $where=[
    'uid'=>$uid
  ];
  return db()->get('lists','*',$where);
}
function getListUid(){
  $uid=getToken();
  $where=[
    'uid'=>$uid
  ];
  $exists=db()->get('list',"*",$where);
  if($exists){
    getListUid();
  }else{
    return $uid;
  }
}
function listToArray($filename,$ext){
  $Sheet=new Basic\Sheet();
  $array=$Sheet->toArray($filename,$ext);
  reset($array);
  $key=key($array);
  if($ext<>'csv' && isset($array[$key])){
    $array=$array[$key];
  }
  $count=$array;
  if($count>=1){
    return $array;
  }else{
    return false;
  }
}

function listUpdate($uid,$name,$uuid){
  $name=printable($name);
  $name=mb_substr($str,0,32);
  if(strlen($name)>=3){
    $where=[
      'AND'=>[
        'uid'=>$uid,
        'uuid'=>$uuid
      ]
    ];
    $db=db();
    $data=$db->get("lists",'*',$where);
    $data['name']=$name;
    $data['updated_at']=time();
    $result=$db->update("lists",$data,$where);
    if($result){
      redirect('/list/'.$uid);
    }else{
      die("erro ao atualizar o nome");
    }
  }else{
    $data['error']=true;
    view('listUpdateGet',$data);
  }
}
function searchListByName($name,$db){
  $name=printable($name);
  $where=[
    'name[~]'=>$name
  ];
  return $db->select('lists','*',$where);
}
?>
