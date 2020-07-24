<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_behrayan = "localhost";
$database_behrayan = "behrayan_order";
$username_behrayan = "root";
$password_behrayan = "";
$behrayan = mysql_pconnect($hostname_behrayan, $username_behrayan, $password_behrayan) or trigger_error(mysql_error(),E_USER_ERROR); 

?>