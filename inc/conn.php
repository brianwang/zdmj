<?php
$conn = mysql_connect('localhost', 'root','');
var_dump($conn);exit;
mysql_select_db('zhidianmijin', $conn);
mysql_query("set names 'gb2312'");
/* EOF */
