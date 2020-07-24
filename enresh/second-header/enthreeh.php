<?php

$maxRows_enthree = 300;
$pageNum_enthree = 0;
if (isset($_GET['pageNum_enthree'])) {
  $pageNum_enthree = $_GET['pageNum_enthree'];
}
$startRow_enthree = $pageNum_enthree * $maxRows_enthree;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_enthree = "SELECT * FROM en_region3_5132 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_enthree = sprintf("%s LIMIT %d, %d", $query_enthree, $startRow_enthree, $maxRows_enthree);
$enthree = mysql_query($query_limit_enthree, $conn_entekhab) or die(mysql_error());
$row_enthree = mysql_fetch_assoc($enthree);

if (isset($_GET['totalRows_enthree'])) {
  $totalRows_enthree = $_GET['totalRows_enthree'];
} else {
  $all_enthree = mysql_query($query_enthree);
  $totalRows_enthree = mysql_num_rows($all_enthree);
}
$totalPages_enthree = ceil($totalRows_enthree/$maxRows_enthree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">