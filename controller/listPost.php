<?php
if(!$user){
    redirect('/signin');
}
helper('upload');
$exts=[
    'csv'
];
$file=upload('upload',$exts);
if(isset($file['errors'])){
    ocorreuAlgumErro($data);
}else{
    if($file['size']>=3 && $file['size']<=1000000){
        print '<pre>';
        var_dump($file);
    }else{
        ocorreuAlgumErro($data);
    }
}
function ocorreuAlgumErro($data){
    $data['error']=true;
    view('/listCreateGet',$data);
}
?>
