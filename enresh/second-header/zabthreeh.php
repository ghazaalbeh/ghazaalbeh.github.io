<?php 
$maxRows_zabthree = 300;
$pageNum_zabthree = 0;
if (isset($_GET['pageNum_zabthree'])) {
  $pageNum_zabthree = $_GET['pageNum_zabthree'];
}
$startRow_zabthree = $pageNum_zabthree * $maxRows_zabthree;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_zabthree = "SELECT * FROM zab_region3_327 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_zabthree = sprintf("%s LIMIT %d, %d", $query_zabthree, $startRow_zabthree, $maxRows_zabthree);
$zabthree = mysql_query($query_limit_zabthree, $conn_entekhab) or die(mysql_error());
$row_zabthree = mysql_fetch_assoc($zabthree);

if (isset($_GET['totalRows_zabthree'])) {
  $totalRows_zabthree = $_GET['totalRows_zabthree'];
} else {
  $all_zabthree = mysql_query($query_zabthree);
  $totalRows_zabthree = mysql_num_rows($all_zabthree);
}
$totalPages_zabthree = ceil($totalRows_zabthree/$maxRows_zabthree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
