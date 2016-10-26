<meta charset="utf-8">
<?php
$l = $_REQUEST['login'];
$p = $_REQUEST['password'];

mysql_query($insert_sql);
require_once "forma.php";
mysql_connect("localhost", "root", "") or die("<p>Ошибка подключения к базе данных! " . mysql_error()
 . "</p>"); mysql_select_db("db_sec")  or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
 
?>