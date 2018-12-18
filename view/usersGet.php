<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($user['name']); ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <h1>
                    <small>Listas</small>
                    <br>
                    <?php e($user['name']); ?>
                </h1>
                <?php
                if(@count($users)>0){
                    print '<table class="table table-striped">';
                    print '<thead>';
                    print '<tr>';
                    print '<th>Nome</th>';
                    print '<th>Tipo</th>';
                    print '<th>Apagar</th>';
                    print '</tr>';
                    print '</thead>';
                    print '<tbody>';
                    print '<tr>';
                    foreach ($users as $user) {
                        print '<td>';
                        $link='/user/'.$user['id'];
                        print '<a href="'.$link.'">'.$user['name'].'</a>';
                        print '</td>';
                        print '<td>';
                        print $user['type'];
                        print '</td>';
                        print '<td>';
                        $params='\''.$user['name'].'\','.$user['id'];
                        $link='javascript:apagarUsuário('.$params.');';
                        print '<a href="'.$link.'" class="btn btn-mini">';
                        print 'Apagar';
                        print '</a>';
                        print '</td>';
                    }
                    print '</tr>';
                    print '</tbody>';
                    print '</table>';
                }else{
                    print 'Nenhuma lista enviada';
                }
                ?>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
    <script type="text/javascript">
    function apagarUsuário(name,id){
        if(confirm('Apagar o usuário "'+name+'"?')){
            $.getJSON( "/users/"+id+"/apagar", function( data ) {
                if(data){
                    redirect('/users');
                }else{
                    alert('Erro ao apagar o usuário "'+name+'"');
                }
            });
        }
    }
    </script>
</body>
</html>
