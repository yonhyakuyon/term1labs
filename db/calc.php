<?php
$id = 1;
$db = mysqli_connect('localhost','root','','university');
$sql = "SELECT * FROM school WHERE id ='$id'";
$db_result =$db->query($sql)->fetch_assoc()['room_id'];
$sql_rm = "SELECT * FROM room WHERE id ='$db_result'";
$kkk =$db->query($sql_rm)->fetch_assoc();
print_r($kkk);