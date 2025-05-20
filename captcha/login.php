<?php
session_start();
$captcha_input = $_POST['captcha'];
$captcha_code = $_SESSION ['captcha_code'];
$login=$_POST['login'];
$password=$_POST['password'];
$db=mysqli_connect('localhost','root','','auth4');
$sql="select * from users where login='$login' and password='$password'";
$result=$db->query($sql)->fetch_assoc();
var_dump($result);
if ($result<>null){
    $_SESSION['user_id']=$result['id'];

    if($captcha_input != $captcha_code){
        header('Location:/error.php');
    }else{
        header('Location:/lk.php');
    }
}else{
    header('Location:/error.php');
}





