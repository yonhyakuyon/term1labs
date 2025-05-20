<?php
$id = 1; //id = 1
$go = $_POST['go'];
$back = $_POST ['bck'];
if ($go>0){

    $id = $id + $go;

};
$db = mysqli_connect('localhost', 'root', '', 'gallery');

$sql = "select image from cats where id='$id'";
$cat_pic = $db->query($sql)->fetch_assoc()['image'];
$res = '<img src="pics/' . $cat_pic . '">';
echo $res;