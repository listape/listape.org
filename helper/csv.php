<?php
function arrayToCsv($array,$filename){
  $Sheet=new Basic\Sheet();
  return $Sheet->toSheet($array,$filename,'csv');
}
function csvToArray($filename){
  $Sheet=new Basic\Sheet();
  $array=$Sheet->toArray($filename,'csv');
  $count=$array;
  if($count>=1){
    return $array;
  }else{
    return false;
  }
}
