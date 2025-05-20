<?php
$login=$_POST['login'];
$password=$_POST['password'];
$db=mysqli_connect('localhost','root','','auth4');
$sql="select * from users where login='$login'";
$result=$db->query($sql)->fetch_assoc();
var_dump($result);
if ($result<>null){
    header('Location:/reg_form.php');
}else{
    $sql="insert into users (id,login,password) values(null,'$login','$password')";
    $result=$db->query($sql);
    header('Location:/login_form.php');
}