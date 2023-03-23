<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_lol = "localhost";
$database_lol = "practica";
$username_lol = "root";
$password_lol = "";
$lol = mysql_pconnect($hostname_lol, $username_lol, $password_lol) or trigger_error(mysql_error(),E_USER_ERROR); 
?>