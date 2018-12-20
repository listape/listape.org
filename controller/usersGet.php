<?php
if(isset($user['type']) && $user['type']=='admin'){
    if(isAjax()){
        $acao=segment(3);
        if($acao=='delete'){
            $where=[
                'uuid'=>segment(2)
            ];
            $db->delete("users",$where);
            print json(true);
        }
    }else{
        $where=[
            'id[>]'=>0,
            'ORDER'=>[
                'name'=>'ASC'
            ]
        ];
        $data['users']=$db->select("users","*",$where);
        view('usersGet',$data);
    }
}
?>
