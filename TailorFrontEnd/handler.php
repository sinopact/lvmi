<?php
/**
 * Created by PhpStorm.
 * User: Sinopact
 * Date: 2017/8/29
 * Time: 11:17
 */

header("Content-Type: text/html;charset=utf-8");
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','root','html');
if (!$link) {
    die("连接失败:".mysqli_connect_error());
}
$content = $_POST['content'];

if($content == "")
{
    echo "<script>alert('请输入内容')</script>";
} else{
    $sql= "insert into test(content) values('$content')";
    //插入数据库
    if(!(mysqli_query($link,$sql))){
        echo "<script>alert('数据插入失败')</script>";
    }else{
        echo "<script>alert('注册成功！)</script>";
    }
}
?>