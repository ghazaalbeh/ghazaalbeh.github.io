<?php 
$maxRows_rione = 300;
$pageNum_rione = 0;
if (isset($_GET['pageNum_rione'])) {
  $pageNum_rione = $_GET['pageNum_rione'];
}
$startRow_rione = $pageNum_rione * $maxRows_rione;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_rione = "SELECT * FROM ri_region1_17375 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_rione = sprintf("%s LIMIT %d, %d", $query_rione, $startRow_rione, $maxRows_rione);
$rione = mysql_query($query_limit_rione, $conn_entekhab) or die(mysql_error());
$row_rione = mysql_fetch_assoc($rione);

if (isset($_GET['totalRows_rione'])) {
  $totalRows_rione = $_GET['totalRows_rione'];
} else {
  $all_rione = mysql_query($query_rione);
  $totalRows_rione = mysql_num_rows($all_rione);
}
$totalPages_rione = ceil($totalRows_rione/$maxRows_rione)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">