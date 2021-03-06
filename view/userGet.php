<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>
        <?php
        if(isset($profile) && $user && $user['uuid']==$profile['uuid']){
            print 'Minhas listas';
        }else{
            print 'Listas de '.$profile['name'];
        }
        ?>
    </title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <br>
                <h1>
                    <?php
                    if(isset($profile) && $user && $user['uuid']==$profile['uuid']){
                        print 'Minhas listas';
                    }else{
                        print 'Listas de '.$profile['name'];
                    }?>
                </h1>
                <?php
                if(@count($lists)>0){
                    print '<table class="table table-striped">';
                    foreach ($lists as $list) {
                        print '<tr>';
                        print '<td>';
                        $link='/list/'.$list['uid'];
                        print '<a href="'.$link.'">'.$list['name'].'</a>';
                        print '</td>';
                        $params='\''.$list['name'].'\',\''.$list['uid'].'\'';
                        $link='javascript:apagarLista('.$params.');';
                        if(isset($profile) && $user && $user['uuid']==$profile['uuid']){
                            print '<td>';
                            print '<a href="'.$link.'" class="btn btn-mini">';
                            print 'Apagar';
                            print '</a>';
                            print '</td>';
                        }
                        print '</tr>';
                    }
                    print '</table>';
                }else{
                    ?>
                    <p>
                        Nenhuma lista enviada. <a href="/list/_/create">Clique aqui</a> para enviar uma lista.
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
