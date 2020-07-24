<?php 

$maxRows_hotwo = 300;
$pageNum_hotwo = 0;
if (isset($_GET['pageNum_hotwo'])) {
  $pageNum_hotwo = $_GET['pageNum_hotwo'];
}
$startRow_hotwo = $pageNum_hotwo * $maxRows_hotwo;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_hotwo = "SELECT * FROM ho_region2_356 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_hotwo = sprintf("%s LIMIT %d, %d", $query_hotwo, $startRow_hotwo, $maxRows_hotwo);
$hotwo = mysql_query($query_limit_hotwo, $conn_entekhab) or die(mysql_error());
$row_hotwo = mysql_fetch_assoc($hotwo);

if (isset($_GET['totalRows_hotwo'])) {
  $totalRows_hotwo = $_GET['totalRows_hotwo'];
} else {
  $all_hotwo = mysql_query($query_hotwo);
  $totalRows_hotwo = mysql_num_rows($all_hotwo);
}
$totalPages_hotwo = ceil($totalRows_hotwo/$maxRows_hotwo)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
