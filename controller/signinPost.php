<?php
$user=signin();
if(isset($user['error'])){
    $data=[
        'error'=>$user['error'],
        'title'=>'Entrar'
    ];
    view('signinGet',$data);
}else{
    if($user['type']=='admin'){
        redirect('/users');
    }else{
        redirect('/');
    }
}