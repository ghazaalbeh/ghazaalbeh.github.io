<?php

$maxRows_entwo = 300;
$pageNum_entwo = 0;
if (isset($_GET['pageNum_entwo'])) {
  $pageNum_entwo = $_GET['pageNum_entwo'];
}
$startRow_entwo = $pageNum_entwo * $maxRows_entwo;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_entwo = "SELECT * FROM en_region2_4840 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_entwo = sprintf("%s LIMIT %d, %d", $query_entwo, $startRow_entwo, $maxRows_entwo);
$entwo = mysql_query($query_limit_entwo, $conn_entekhab) or die(mysql_error());
$row_entwo = mysql_fetch_assoc($entwo);

if (isset($_GET['totalRows_entwo'])) {
  $totalRows_entwo = $_GET['totalRows_entwo'];
} else {
  $all_entwo = mysql_query($query_entwo);
  $totalRows_entwo = mysql_num_rows($all_entwo);
}
$totalPages_entwo = ceil($totalRows_entwo/$maxRows_entwo)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">