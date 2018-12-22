<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
<?php
if(empty($q)){
    ?>
    <title>Mushape</title>
    <?php
}else{
    ?>
    <title><?php e($q); ?> - Mushape</title>
    <?php
}
 ?>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <br>
                <div class="text-center">
                    <ul class="nav nav-tabs">
                        <?php view('inc/menu',$data); ?>
                    </ul>
                    <div class="text-left">
                        Resultados da busca por <b><?php e($q); ?></b>
                    </div>
                    <?php view('inc/formSearch',$data); ?>
                </div>
                <?php
                if(is_array($lists) && @count($lists)>0){
                    print '<table class="table table-striped">';
                    foreach ($lists as $list) {
                        print '<tr>';
                        print '<td>';
                        $link='/list/'.$list['uid'];
                        print '<a href="'.$link.'">'.$list['name'].'</a>';
                        print '</td>';
                        print '</tr>';
                    }
                    print '</table>';
                }else{
                    ?>
                    <p class="text-center">
                        Nenhuma lista encontrada
                    </p>
                    <?php
                }
                ?>
                <script type="text/javascript">
                function apagarLista(name,uid){
                    if(confirm('Apagar a lista "'+name+'"?')){
                        $.getJSON( "/list/"+uid+"/delete", function( data ) {
                            if(data){
                                redirect('/user/<?php e($user['uuid']);?>');
                            }else{
                                alert('Erro ao apagar a lista "'+name+'"');
                            }
                        });
                    }
                }
                </script>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
