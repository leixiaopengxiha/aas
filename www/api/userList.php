<?php
    $link = mysqli_connect('127.0.0.1','root','12345678','boke',3306);

    if(!$link){
        echo "数据库连接失败";
        exit();
    }
    // $sql = "delete from user_list where  age>=20"; 
    $sql = 'select * from user_list';
    $res = mysqli_query($link,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $arr[] = $row;
    }
    $json = json_encode($res);
    echo $json;
    mysqli_close($link);
?>