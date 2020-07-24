<?php

$maxRows_tajtwo = 300;
$pageNum_tajtwo = 0;
if (isset($_GET['pageNum_tajtwo'])) {
  $pageNum_tajtwo = $_GET['pageNum_tajtwo'];
}
$startRow_tajtwo = $pageNum_tajtwo * $maxRows_tajtwo;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_tajtwo = "SELECT * FROM taj_region2_21236 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_tajtwo = sprintf("%s LIMIT %d, %d", $query_tajtwo, $startRow_tajtwo, $maxRows_tajtwo);
$tajtwo = mysql_query($query_limit_tajtwo, $conn_entekhab) or die(mysql_error());
$row_tajtwo = mysql_fetch_assoc($tajtwo);

if (isset($_GET['totalRows_tajtwo'])) {
  $totalRows_tajtwo = $_GET['totalRows_tajtwo'];
} else {
  $all_tajtwo = mysql_query($query_tajtwo);
  $totalRows_tajtwo = mysql_num_rows($all_tajtwo);
}
$totalPages_tajtwo = ceil($totalRows_tajtwo/$maxRows_tajtwo)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
