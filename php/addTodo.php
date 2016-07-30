<?php
$mysqli = new mysqli('localhost','root','','test');
$sql = "INSERT INTO `todos` (`id`,`title`,`isDone`) VALUES ('{$_GET['id']}','{$_GET['title']}','{$_GET['isDone']}')";
$mysqli->query($sql);
echo $mysqli->insert_id;
?>