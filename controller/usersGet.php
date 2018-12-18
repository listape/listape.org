<?php
if(isset($user['type']) && $user['type']=='admin'){
    $where=[
        'id[>]'=>0
    ];
    $data['users']=$db->select("users","*",$where);
    view('usersGet',$data);
}
?>
