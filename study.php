<?php 

    $res = [
        'result'=>false,
        'error' => 0,
        'msg' => ''
    ];
    if ( isset($_GET['login']) && isset($_GET['password'])){
        $login = $_GET['login'];
        $pass = $_GET['password'];
        if (empty($login) || empty($pass)){
            $res['error'] = 1;
            $res['msg'] = 'Empty login or password';
        }
        else{
            $res['result'] = true;
            $res['msg'] = 'Authorized!';
        }
        $res = json_encode($res);
        header('Content-type:application/json');
        echo $res;
    }
?>