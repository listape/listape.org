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
                    <small>Listas de</small>
                    <br>
                    <?php e($user['name']); ?>
                </h1>
                <?php
                if(@count($listas)>0){
                    print '<ul class="nav nav-tabs nav-stacked">';
                    foreach ($listas as $list) {
                        print '<li>';
                        $link='/list/'.$list['uuid'];
                        print '<a href="'.$link.'">'.$list['name'].'</a>';
                        print '</li>';
                    }
                    print '</ul>';
                }else{
                    ?>
                    <p>
                        Nenhuma lista enviada. <a href="/list/_/create">Clique aqui</a> para enviar uma lista.
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
