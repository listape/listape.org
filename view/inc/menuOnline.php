<li><a href="/">Pesquisar</a></li>
<li><a href="/list/_/create">Enviar lista</a></li>
<li><a href="/user/<?php e($user['uuid']);?>">
    <?php
    if(isset($profile) && $user && $user['uuid']==$profile['uuid']){
        print 'Minhas listas';
    }else{
        print 'Listas de '.$profile['name'];
    }
    ?>
</a></li>
<li><a href="/logout">Sair</a></li>
