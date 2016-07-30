<?php
$mysqli = new mysqli('localhost','root','','test');
$sql = "UPDATE `todos` SET  `title`='{$_GET['title']}' WHERE `id`={$_GET['id']}";
$mysqli->query($sql);
echo 'success';
?>