<?php
function arrayToCsv($array,$filename){
  $Sheet=new Basic\Sheet();
  return $Sheet->toSheet($array,$filename,'csv');
}
