<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn_entekhab = "localhost";
$database_conn_entekhab = "enresh";
$username_conn_entekhab = "root";
$password_conn_entekhab = "";
$conn_entekhab = mysql_pconnect($hostname_conn_entekhab, $username_conn_entekhab, $password_conn_entekhab) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_set_charset('utf8');
?>
