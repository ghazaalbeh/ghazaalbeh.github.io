<?php
$maxRows_enone = 300;
$pageNum_enone = 0;
if (isset($_GET['pageNum_enone'])) {
  $pageNum_enone = $_GET['pageNum_enone'];
}
$startRow_enone = $pageNum_enone * $maxRows_enone;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_enone = "SELECT * FROM en_region1_3199 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_enone = sprintf("%s LIMIT %d, %d", $query_enone, $startRow_enone, $maxRows_enone);
$enone = mysql_query($query_limit_enone, $conn_entekhab) or die(mysql_error());
$row_enone = mysql_fetch_assoc($enone);

if (isset($_GET['totalRows_enone'])) {
  $totalRows_enone = $_GET['totalRows_enone'];
} else {
  $all_enone = mysql_query($query_enone);
  $totalRows_enone = mysql_num_rows($all_enone);
}
$totalPages_enone = ceil($totalRows_enone/$maxRows_enone)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

