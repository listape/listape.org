<?php
helper('upload');
model([
    'list'
]);
$exts=[
    'csv'
];
$file=upload('upload',$exts);
if(isset($file['errors'])){
    ocorreuAlgumErro($data);
}else{
    if($file['size']>=3 && $file['size']<=1000000){
        //1. verifica se o csv é valido (tem que ter pelo menos 1 valor)
        //2. salva no banco de dados
        $uid=getListUid();
        $data=[
            'name'=>'Lista sem nome',
            'uid'=>$uid,
            'uuid'=>$user['uuid'],
            'created_at'=>time()
        ];
        $db->insert('lists',$data);
        //3. salva a lista no disco rigido
        $filename=ROOT.'csv/'.$uid;
        if(uploadMove($file['temp'],$filename)){
            //4. pede para o usuário atualizar o nome da lista
            redirect('/list/'.$uid.'/update');
            //5. redireciona para a página da lista
        }else{
            die("erro ao mover");
        }
    }else{
        ocorreuAlgumErro($data);
    }
}
function ocorreuAlgumErro($data){
    $data['error']=true;
    view('/listCreateGet',$data);
}
?>