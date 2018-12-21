<?php
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
function fetchAllListsByUuid($uuid){
    return [
        [
            'uid'=>'haha',
            'name'=>'Capitais brasileiras'
        ],
        [
            'uid'=>'haha',
            'name'=>'Capitais brasileiras'
        ]
    ];
}
?>
