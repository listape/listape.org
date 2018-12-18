<?php
if(isset($user['type']) && $user['type']=='admin'){
    if(isAjax()){
        $where=[
            'id'=>segment(2)
        ];
        $db->delete("users",$where);
        print json(false);
    }else{
        $where=[
            'id[>]'=>0
        ];
        $data['users']=$db->select("users","*",$where);
        view('usersGet',$data);
    }
}
?>
