<?php
session_start();
if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
    $db=mysqli_connect('localhost','root','','auth4');
    $sql="select * from users where id='$id'";
    $result=$db->query($sql)->fetch_assoc();
    $user_login=$result['login'];
    require_once "lk_content.php";
}else{
    header('Location:/login_form.php');
}


