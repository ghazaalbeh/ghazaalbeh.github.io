<?php

$maxRows_hoone = 300;
$pageNum_hoone = 0;
if (isset($_GET['pageNum_hoone'])) {
  $pageNum_hoone = $_GET['pageNum_hoone'];
}
$startRow_hoone = $pageNum_hoone * $maxRows_hoone;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_hoone = "SELECT * FROM ho_region1_200 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_hoone = sprintf("%s LIMIT %d, %d", $query_hoone, $startRow_hoone, $maxRows_hoone);
$hoone = mysql_query($query_limit_hoone, $conn_entekhab) or die(mysql_error());
$row_hoone = mysql_fetch_assoc($hoone);

if (isset($_GET['totalRows_hoone'])) {
  $totalRows_hoone = $_GET['totalRows_hoone'];
} else {
  $all_hoone = mysql_query($query_hoone);
  $totalRows_hoone = mysql_num_rows($all_hoone);
}
$totalPages_hoone = ceil($totalRows_hoone/$maxRows_hoone)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">