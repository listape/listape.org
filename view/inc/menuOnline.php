<ul class="nav">
<li><a href="/">Pesquisar</a></li>
<li><a href="/list/_/create">Enviar lista</a></li>
<?php
if($user['type']=='admin'){
  print '<li><a href="/users">';
  print 'Usuários';
  print '</a></li>';
}
?>
</ul>
<ul class="nav pull-right">
<?php
print '<li><a href="/user/'.$user['uuid'].'">';
e($user['name']);
print '</a></li>';
?>
<li><a href="/logout">Sair</a></li>
</ul>
