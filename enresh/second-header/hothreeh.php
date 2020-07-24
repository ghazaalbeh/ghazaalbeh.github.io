<?php

$maxRows_hothree = 300;
$pageNum_hothree = 0;
if (isset($_GET['pageNum_hothree'])) {
  $pageNum_hothree = $_GET['pageNum_hothree'];
}
$startRow_hothree = $pageNum_hothree * $maxRows_hothree;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_hothree = "SELECT * FROM ho_region3_103 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_hothree = sprintf("%s LIMIT %d, %d", $query_hothree, $startRow_hothree, $maxRows_hothree);
$hothree = mysql_query($query_limit_hothree, $conn_entekhab) or die(mysql_error());
$row_hothree = mysql_fetch_assoc($hothree);

if (isset($_GET['totalRows_hothree'])) {
  $totalRows_hothree = $_GET['totalRows_hothree'];
} else {
  $all_hothree = mysql_query($query_hothree);
  $totalRows_hothree = mysql_num_rows($all_hothree);
}
$totalPages_hothree = ceil($totalRows_hothree/$maxRows_hothree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">