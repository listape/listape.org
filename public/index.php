<?php
//Anderson Ismael
//11 de Dezembro de 2018

//dependencias
require '../inc/autoload.php';
if(isDev()){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//config
date_default_timezone_set('America/Sao_Paulo');

//regras
$segment=segment();
$controller=$segment[1];
if($controller=='/'){
    $controller='home';
}
$method=ucfirst(strtolower(getMethod()));
$controller=$controller.$method;
$filenameController=ROOT.'controller/'.$controller.'.php';
$filenameView=ROOT.'view/'.$controller.'.php';

//variaveis globais
$data['user']=isAuth();
$data['db']=db();
if(file_exists($filenameController)){
    controller($controller,$data);
}elseif(file_exists($filenameView)){
    view($controller,$data);
}else{
    view('404');
}
