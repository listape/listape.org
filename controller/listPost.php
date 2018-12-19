<?php
helper('upload');
$exts=[
    'csv'
];
$file=upload('upload',$exts);
print '<pre>';
var_dump($file);
?>
