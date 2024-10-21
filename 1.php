<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_COOKIE['count']))
{
	$count= $_COOKIE['count'] + 1;
}
else 
{
	$count = 1;
}
setcookie('count', $count, time() + 3600);
echo "$count";
?>